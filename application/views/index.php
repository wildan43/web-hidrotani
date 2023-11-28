

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Web</title>
    
    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <?php
if(isset($_GET['error'])){
    $error_message = $_GET['error'];
    echo '<script>alert("' . $error_message . '");</script>';
}

$userSession = $this->session->userdata('user');

    $profileLink = 'profile';

    if (isset($userSession) && $userSession['username'] == 'admin') {
        $profileLink = 'index/Adminprofile';
    }
?>
    <!----Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bgbiru fixed-top">
        <div class="container">
        <a href="<?php echo site_url($profileLink); ?>" >
            <img src="assets/img/Asset 1.png" alt="User Image" class="user-image">
        </a>
        <span style="margin-right: 10px;"></span>
        <a class="navbar-brand" href="<?php echo site_url('')?>">
            HidroTani
        </a>
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
</div>    
   <!-----Navbar End----> 
   
   <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>HidroTani</h1>
          <h2>Untuk kamu yang ingin bertani hidroponik</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="<?php echo site_url('panduan')?>" class="btn-get-started scrollto">Panduan</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/home.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

      <!------Artikel-------->
      <section id="artikel" class="artikel section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5" >
                        <h2>HIDROBACA</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="assets/img/4.png" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Cara Menanam Kangkung Hidroponik di Lahan Sempit </h3>
                            <p class="lead">Metode hidroponik semakin menjadi pilihan bijak bagi para pecinta tanaman,
                            termasuk kangkung. Kangkung hidroponik tidak hanya ramah lingkungan dengan penggunaan air yang lebih efisien,
                            tetapi juga sangat cocok untuk ditanam di lahan sempit.</p>
                            <button class="btn" style="background-color: #184C62;color: #fff;" link href="a1.php">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="assets/img/5.png" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Komposisi Lamtoro sebagai Nutrisi Sawi Hidroponik </h3>
                            <p class="lead">Peranan nutrisi dalam budidaya hidroponik sangat vital untuk memenuhi kebutuhan pertumbuhan optimal tanaman.
                            Jika jumlah nutrisi hidroponik tidak sesuai dengan kebutuhan tanaman, dapat berdampak negatif pada kualitas hasil panen.</p>
                            <button class="btn" style="background-color: #184C62;color: #fff;" link href="a2.php">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="assets/img/6.png" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Meningkatkan Produksi Sawi Hidroponik dengan Pupuk Kandang Ayam</h3>
                            <p class="lead">Penurunan produksi ini mengindikasikan perlunya peningkatan dalam sistem budidaya sawi. 
                            Salah satu solusi yang efektif untuk mengatasi keterbatasan lahan adalah dengan menerapkan sistem hidroponik.</p>
                            <button class="btn" style="background-color: #184C62;color: #fff;" link href="a3.php">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!----Artikel end------>

      <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>HIDROTANI</h3>
            <p>Hidrotani merupakan website yang menyediakan informasi mendalam mengenai hidroponik, teknologi bertani tanpa media tanah yang mengubah cara kita memandang pertanian.
              Kami mengajak anda untuk memasuki dunia inovasi pertanian modern, kami di Hidrotani ingin mempermudah Anda dalam perjalanan memahami dan menguasai seni bertani tanpa tanah.  </p>
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
              <strong>Phone:</strong>  0858 3553 0910<br>
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
  
    <!-- All Js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
