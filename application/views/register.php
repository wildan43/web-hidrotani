<?php
    session_start();

    $id = $_GET['id'];
    $username = $_GET['newusername'];
    $password = md5($_GET['newpassword']);
    $email = $_GET['newemail'];
    $_SESSION['registrationSuccess'] = true;

    $options = array(
        CURLOPT_URL => 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-cjbzs/endpoint/inserthidrotani',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => http_build_query(array(
            'username' => $username,
            'password' => $password,
            'email' => $email,
        ))
    );

    $cUrl = curl_init();

    curl_setopt_array($cUrl, $options);

    $response = curl_exec($cUrl);
    
    header('Location:Login');
?>