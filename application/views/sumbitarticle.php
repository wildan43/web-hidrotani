<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pastikan bahwa formulir telah disubmit melalui metode POST

    // Tangkap data yang dikirimkan melalui formulir
    $editor = $_POST['editor'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];
    $judul = $_POST['judul'];
    $dekskripsi = $_POST['dekskripsi'];

    // Validasi data, misalnya periksa apakah semua kolom sudah diisi sesuai kebutuhan
    if (empty($editor) || empty($tanggal) || empty($lokasi) || empty($judul) || empty($dekskripsi)) {
        // Jika data tidak lengkap, redirect kembali ke formulir atau berikan pesan error
        echo "Semua kolom harus diisi. Kembali ke halaman formulir.";
        exit;
    }

    $image = base64_encode(file_get_contents($_FILES['image']['tmp_name']));

    $apiUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-cjbzs/endpoint/insertArticle?judul=';

    $articleData = array(
        'judul' => $judul,
        'editor' => $editor,
        'tanggal' => $tanggal,
        'dekskripsi' => $dekskripsi,
        'lokasi' => $lokasi,
        'image' => $image 
    );

    

    $response = callAPI($apiUrl, 'POST', $articleData);
    if ($response['status'] === 'success') {
        header('Location: /hidrotani');
        exit;
    } else {
        // Handle the error scenario
        header('Location: /hidrotani');
        exit;
    }

   
}

function callAPI($url, $method, $data = false) {
    $curl = curl_init();

    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_RETURNTRANSFER => true,
    );

    if ($data) {
        $options[CURLOPT_POSTFIELDS] = http_build_query($data);
    }

    curl_setopt_array($curl, $options);
    $response = curl_exec($curl);
    curl_close($curl);
    return json_decode($response, true);

    
}
?>
