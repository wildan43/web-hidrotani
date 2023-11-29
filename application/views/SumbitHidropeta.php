
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure that the form has been submitted via the POST method
    if (!isset($_POST['submit'])) {
        echo "Invalid form submission.";
        exit;
    }

    // Capture data from the form
    $nama = $_POST['nama'];
    $Lat = $_POST['Lat'];
    $Long = $_POST['Long'];
    $url = $_POST['url'];

    // Validate data
    if (empty($nama) || empty($Lat) || empty($Long) || empty($url)) {
        echo "All fields must be filled. Please go back to the form.";
        exit;
    }

    // Validate and process the uploaded image
    if (isset($_FILES['image'])) {
        $image = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
    } else {
        echo "Image not uploaded successfully.";
        exit;
    }

    // API endpoint URL (replace with your actual API URL)
    $apiUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-cjbzs/endpoint/InsertMarkerHidrotani';

    // Data to be sent to the API
    $articleData = array(
        'nama' => $nama,
        'Lat' => $Lat,
        'Long' => $Long,
        'url' => $url,
        'image' => $image,
    );

    // Call the API function
    $response = callAPI($apiUrl, 'POST', $articleData);

    // Handle the API response
    if ($response['status'] === 'success') {
        header('Location: /hidrotani');
        exit;
    } else {
        header('Location: /hidrotani');
        exit;
    }
}

// Function to call the API using cURL
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