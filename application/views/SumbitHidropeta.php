
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $Lat = $_POST['Lat'];
    $Long = $_POST['Long'];
    $url = $_POST['url'];

    if (empty($Lat) || empty($Long)) {
        echo '<script>';
        echo 'alert("Semua kolom harus diisi. Kembali ke halaman formulir.");';
        echo 'window.location.href = "AdminHidropeta";';
        echo '</script>';
        exit;
    }

    // Proses upload gambar (harus disesuaikan dengan kebutuhan dan validasi lebih lanjut)
    $image = base64_encode(file_get_contents($_FILES['image']['tmp_name']));

    // Panggil API untuk menyimpan artikel
    $apiUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-cjbzs/endpoint/InsertMarkerHidrotani';
    

    $markerData = array(
        'Lat' => $Lat,
        'Long' => $Long,
        'url' => $url,
        'image' => $image 
    );

    
   

    // Panggil fungsi untuk melakukan permintaan ke API
    $response = callAPI($apiUrl, 'POST', $markerData);

    
}

function callAPI($url, $method, $data = false) {
    $curl = curl_init();

    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_RETURNTRANSFER => true,
    );

    

    curl_setopt_array($curl, $options);
    $response = curl_exec($curl);
    curl_close($curl);
    return json_decode($response, true);
}

if ($response['status'] === 'success') {
    header('Location: /hidrotani');
    exit;
} else {
    // Handle the error scenario
    header('Location: /hidrotani');
    exit;
}
?>
