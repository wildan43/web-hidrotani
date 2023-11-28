<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Project Web</title>
        
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
        <a class="navbar-brand" href="<?php echo site_url('')?>">
HidroTani</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('panduan'); ?>">Panduan</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('artikel'); ?>">HidroBaca</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('maps2'); ?>">HidroPeta</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('SignUp'); ?>">Sign Up</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('Login'); ?>">Login</a>
                  </li>
              </ul>
          </div>
        </div>
    </nav>
   
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center" style="color: black;">
            <ol>
              <li><a href="index.php" style="color: #37517e;">Home</a></li>
              <li>Panduan</li>
              

            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container">
  
          <div class="row">
            <div class="col-md-6">
              <div class="icon-box">
                <i class="bi bi-briefcase"></i>
                <h4><a href="<?php echo site_url('index/panduan1')?>">Pengenalan Hidroponik</a></h4>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="bi bi-card-checklist"></i>
                <h4><a href="<?php echo site_url('index/panduan2')?>">Sistem Hidroponik</a></h4>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="bi bi-bar-chart"></i>
                <h4><a href="<?php echo site_url('index/panduan3')?>">Jenis Tanaman</a></h4>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="bi bi-binoculars"></i>
                <h4><a href="<?php echo site_url('index/panduan4')?>">Persiapan Penanaman</a></h4>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="bi bi-brightness-high"></i>
                <h4><a href="<?php echo site_url('index/panduan5')?>">Pemilihan Tanaman</a></h4>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="bi bi-calendar4-week"></i>
                <h4><a href="<?php echo site_url('index/panduan6')?>">Tahap Pemeliharaan</a></h4>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End Services Section -->

      <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>HIDROTANI</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
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

  
      

    
    <!-- Menggunakan Bootstrap JS (jQuery dan Popper.js diperlukan) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
