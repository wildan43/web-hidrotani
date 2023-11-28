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
            <li><a href="<?php echo site_url('panduan'); ?>" style="color: #37517e;">Back</a></li>
              <li>Panduan</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->



    <!-- ======= Konten Panduan ======= -->
    <section id="konten" class="konten">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2">
              <img src="" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h3>Jenis Tanaman</h3>
              <p style="color: black;">Jenis tanaman yang bisa menggunakan sistem hidroponik</p>
              <ul>
                <li><i class="bi bi-check-circled"></i> Sayuran Hijau</li>
                <p>Selada: Semua jenis selada, termasuk selada hijau, merah, dan romaine, tumbuh sangat baik dalam hidroponik.</p>
                <p>Bayam: Bayam cepat tumbuh dan menghasilkan daun yang lezat.</p>
                <p>Kangkung: Tanaman kangkung hidroponik dapat memberikan hasil yang cepat dan melimpah.</p>
                <li><i class="bi bi-check-circled"></i> Tanaman Buah</li>
                <p>Tomat: Tomat hidroponik menghasilkan buah yang besar dengan perawatan yang tepat.</p>
                <p>Mentimun: Mentimun tumbuh baik dalam hidroponik dan menghasilkan buah dalam waktu relatif singkat.</p>
                <p>Cabai: Cabai hidroponik menghasilkan buah yang pedas dan lezat.</p>
                <li><i class="bi bi-check-circled"></i> Herbal dan Tanaman Rempah</li>
                <p>Basil: Basil merupakan herba yang tumbuh subur dalam hidroponik dan memiliki aroma yang kuat.</p>
                <p>Peterseli: Peterseli hidroponik sangat baik digunakan sebagai hiasan dan penambah rasa dalam masakan.</p>
                <p>Kemangi: Kemangi adalah tanaman rempah dengan aroma yang khas, cocok untuk hidroponik.</p>
                <li><i class="bi bi-check-circled"></i> Tanaman Buah Kecil</li>
                <p>Stroberi: Stroberi hidroponik menghasilkan buah yang manis dan segar.</p>
                <p>Raspberry: Raspberry tumbuh dengan baik dalam sistem hidroponik berbasis substrat.</p>
                <li><i class="bi bi-check-circled"></i> Tanaman Berbunga</li>
                <p>Bunga Krisan: Bunga krisan hidroponik memberikan nilai dekoratif dan dapat tumbuh dengan baik dalam sistem hidroponik.</p>
                <li><i class="bi bi-check-circled"></i> Herbal aromatik</li>
                <p>Thyme: Thyme adalah tanaman aromatik yang tumbuh baik dalam hidroponik dan memberikan rasa unik pada masakan.</p>
              </ul>
            </div>
          </div>
  
        </div>
      </section><!-- End About Us Section -->

    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>HIDROTANI</h3>
            <p>Hidrotani merupakan website yang menyediakan informasi mendalam mengenai hidroponik, teknologi bertani tanpa media tanah yang mengubah cara kita memandang pertanian.
              Kami mengajak anda untuk memasuki dunia inovasi pertanian modern, kami di Hidrotani ingin mempermudah Anda dalam perjalanan memahami dan menguasai seni bertani tanpa tanah.  </p>          </div>

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
