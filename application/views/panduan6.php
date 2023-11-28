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
              <h3>Tahap Pemeliharaan</h3>
              <p style="color: black;">Pemeliharaan dalam sistem Hidroponik</p>
              <ul>
                <li><i class="bi bi-check-circled"></i> Aerasi dan Oksigenasi</li>
                <p> Pastikan sistem hidroponik memiliki cukup aerasi dan oksigenasi. Sistem yang baik harus menyediakan cukup oksigen ke akar tanaman. Hal ini bisa dilakukan dengan memastikan adanya pergerakan air yang cukup di dalam reservoir atau menggunakan sistem aerasi tambahan seperti air stones.</p>
                <li><i class="bi bi-check-circled"></i> Pemantauan Suhu</li>
                <p>Monitor suhu larutan nutrisi dan lingkungan tumbuh. Suhu yang terlalu tinggi atau terlalu rendah dapat memengaruhi pertumbuhan tanaman. Sebagian besar tanaman hidroponik tumbuh baik pada suhu sekitar 18-25°C.</p>
                <li><i class="bi bi-check-circled"></i> Pemeliharaan Nutrisi</li>
                <p>Periksa konsentrasi nutrisi di larutan nutrisi dan tambahkan nutrisi baru sesuai kebutuhan tanaman. Beberapa sistem hidroponik memerlukan pembaruan larutan nutrisi setiap dua minggu, tergantung pada kecepatan pertumbuhan tanaman dan tipe sistem.</p>
                <li><i class="bi bi-check-circled"></i> Pembersihan dan Sterilisasi</li>
                <p>Bersihkan sistem secara teratur untuk mencegah pertumbuhan jamur, alga, dan bakteri. Peralatan seperti pompa, saluran, dan wadah harus dibersihkan dan disterilkan secara berkala.</p>
                <li><i class="bi bi-check-circled"></i> Pemeliharaan akar</li>
                <p>Periksa akar tanaman secara teratur. Pastikan tidak ada akar mati yang membusuk di dalam sistem. Jika ada, bersihkan akar dengan hati-hati dan pastikan mereka mendapatkan oksigen yang cukup.</p>
                <li><i class="bi bi-check-circled"></i> Penyiraman Tanaman</li>
                <p>Atur sistem penyiraman sesuai dengan kebutuhan tanaman. Beberapa tanaman memerlukan penyiraman lebih sering daripada yang lain. Pastikan air sampai ke semua bagian akar tanaman.</p>
                <li><i class="bi bi-check-circled"></i> Pemeliharaan Cahaya</li>
                <p>Pastikan tanaman mendapatkan cahaya yang cukup, terutama jika Anda menggunakan sistem hidroponik dalam ruangan. Pertimbangkan menggunakan lampu tanaman (grow lights) jika cahaya matahari tidak mencukupi.</p>
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
