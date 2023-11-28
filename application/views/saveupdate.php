<?php
session_start();
$_SESSION['user'];
// Periksa apakah pengguna masuk log

// Periksa apakah formulir dikirimkan

        $id = !empty($_POST['id']) ? $_POST['id'] : $_SESSION['user']['id']; // If id is not empty, use the submitted value; otherwise, use the session value
        $username = !empty($_POST['username']) ? $_POST['username'] : $_SESSION['user']['username'];
        $email = !empty($_POST['email']) ? $_POST['email'] : $_SESSION['user']['email'];
        $password = !empty($_POST['password']) ? md5($_POST['password']) : $_SESSION['user']['password'];
        $nomortelepon = !empty($_POST['nomortelepon']) ? $_POST['nomortelepon'] : $_SESSION['user']['nomortelepon'];



    // Tentukan titik akhir API berdasarkan keberadaan $id
    
    // Tentukan titik akhir API berdasarkan keberadaan $id
    $url = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-cjbzs/endpoint/UpdatePenggunaByid?id=' . $id
        . '&username=' . $username
        . '&email=' . $email
        . '&password=' . $password
        . '&nomortelepon=' . $nomortelepon;
    
    // Tentukan metode HTTP berdasarkan keberadaan $id
    $customrequest = 'PUT';

    $data = array(
        '_id' => $id,
        'username' => $username,
        'email' => $email,
        'password' => $password,
        'nomortelepon' => $nomortelepon,
    );

    $curl = curl_init();
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => $customrequest,
        CURLOPT_POSTFIELDS => http_build_query($data),
    );

    curl_setopt_array($curl, $options);

    $response = curl_exec($curl);

    curl_close($curl);


    // Redirect ke halaman index.php setelah pembaruan
     header('Location: Login');
    
    // echo(var_dump($_POST['password']));

    exit;


?>
