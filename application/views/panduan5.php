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
              <h3>Pemilihan Tanaman</h3>
              <p style="color: black;">Pemilihan Tanaman dalam Hidroponik</p>
              <ul>
                <li><i class="bi bi-check-circled"></i> Kebutuhan Tanaman</li>
                <p> Pertimbangkan jenis tanaman yang memiliki akar dangkal dan cocok untuk tumbuh dalam media hidroponik. Sayuran hijau seperti selada, bayam, dan kangkung, serta tanaman buah seperti tomat, mentimun, dan cabai, biasanya cocok untuk hidroponik.</p>
                <li><i class="bi bi-check-circled"></i> Ruangan dan Lingkungan</li>
                <p> Pertimbangkan ruang tempat Anda akan menanam tanaman. Beberapa tanaman memerlukan lebih banyak ruang dan cahaya matahari. Pastikan tanaman yang Anda pilih sesuai dengan kondisi lingkungan tempat hidroponik Anda berada.</p>
                <li><i class="bi bi-check-circled"></i> Ketersediaan Air dan Nutrisi</li>
                <p> Pertimbangkan kemampuan sistem hidroponik Anda untuk memberikan air dan nutrisi yang cukup kepada tanaman. Beberapa tanaman memerlukan lebih banyak air dan nutrisi daripada yang lain. Pastikan sistem Anda dapat memenuhi kebutuhan tanaman tersebut.</p>
                <li><i class="bi bi-check-circled"></i> Waktu Pertumbuhan dan Panen</li>
                <p> Pertimbangkan berapa lama tanaman akan membutuhkan waktu untuk tumbuh dan siap panen. Beberapa tanaman memiliki siklus pertumbuhan yang lebih cepat daripada yang lain. Jika Anda ingin hasil cepat, pilihlah tanaman dengan siklus pertumbuhan yang pendek.</p>
                <li><i class="bi bi-check-circled"></i> Tujuan budidaya</li>
                <p> Tentukan apakah Anda ingin menanam tanaman untuk konsumsi pribadi atau tujuan komersial. Beberapa tanaman mungkin lebih cocok untuk konsumsi pribadi karena tumbuh dengan baik dalam jumlah kecil, sementara tanaman lainnya cocok untuk budidaya massal.</p>
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
