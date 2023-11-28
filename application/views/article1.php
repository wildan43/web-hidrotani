<?php
// Fungsi untuk melakukan permintaan ke API dan mendapatkan respons JSON
function callAPI($url, $method = 'GET', $data = false) {
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

// Ambil ID artikel dari parameter URL
$articleId = isset($_GET['id']) ? $_GET['id'] : null;

// Validasi ID
if (!$articleId) {
    echo "Invalid article ID.";
    exit;
}

// Memanggil API MongoDB untuk mendapatkan data artikel berdasarkan ID
$articleUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-cjbzs/endpoint/getdataArticlebyId?id=' . $articleId;
$articleData = callAPI($articleUrl);

// Validasi apakah artikel ditemukan
if (!$articleData) {
    echo "Article not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $articleData['judul']; ?></title>

    <!-- All CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
          crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bgbiru fixed-top ">
    <div class="container ">
          <a class="navbar-brand" href="<?php echo site_url('')?>">HidroTani</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('index/panduan'); ?>">Panduan</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('index/artikel'); ?>">HidroBaca</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('index/maps2'); ?>">HidroPeta</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('index/SignUp'); ?>">Sign Up</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('index/Login'); ?>">Login</a>
                  </li>
              </ul>
          </div>
    </div>
</nav>

<!-- Konten Artikel -->
<div class="container mt-5 ">
    <div class="row spacing">
        <div class="col-md-8 ">
            <h1 class="Judul"><?php echo $articleData['judul']; ?></h1>
            <p class="text-muted">Tanggal: <?php echo $articleData['tanggal']; ?></p>
            <?php
                      // Decode and display the base64-encoded image
                      $imageData = base64_decode($articleData['image']);
                      $imageSrc = 'data:image/png;base64,' . base64_encode($imageData);
                      
                      ?>
                      <img src="<?php echo $imageSrc; ?>" alt="" class="img-fluid">
            <h6>Editor by <?php echo $articleData['editor']; ?></h6>
            <br>
            <?php echo $articleData['dekskripsi']; ?>
        </div>
    </div>
</div>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>HIDROTANI</h3>
                    <p>Hidrotani merupakan website yang menyediakan informasi mendalam mengenai hidroponik, teknologi bertani tanpa media tanah yang mengubah cara kita memandang pertanian.
                        Kami mengajak anda untuk memasuki dunia inovasi pertanian modern, kami di Hidrotani ingin mempermudah Anda dalam perjalanan memahami dan menguasai seni bertani tanpa tanah.</p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Panduan</a></li>
                        <li><a href="#">Hidrobaca</a></li>
                        <li><a href="#">Hidropeta</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        IPB University <br>
                        <strong>Phone:</strong> 0858 3553 0910<br>
                        <strong>Email:</strong> JOMPO@gmail.com<br>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>HIDROTANI</span></strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->

<!-- Menggunakan Bootstrap JS (jQuery dan Popper.js diperlukan) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
