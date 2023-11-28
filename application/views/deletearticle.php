
<?php

   $id = $_GET['id'];
    echo $id;


    $curl = curl_init();
    $options = array(
        CURLOPT_URL => 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-cjbzs/endpoint/DeleteArticleById?id='.$id,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
    );

    curl_setopt_array($curl,$options);
    $response = curl_exec($curl);
    curl_close($curl);

    if ($response['status'] === 'success') {
        header('Location: /hidrotani');
        exit;
    } else {
        // Handle the error scenario
        header('Location: /hidrotani');
        exit;
    }


?>