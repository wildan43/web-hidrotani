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
              <h3>Persiapan Penanaman</h3>
              <p style="color: black;">Ada beberapa tahap dalam persiapan penanaman hidroponik</p>
              <ul>
                <li><i class="bi bi-check-circled"></i> Pemilihan Sistem Hidroponik</li>
                <p> Pilih sistem hidroponik yang sesuai dengan kebutuhan dan anggaran Anda. Pertimbangkan ruang yang tersedia, jenis tanaman yang akan ditanam, serta ketersediaan sumber daya seperti air dan listrik.</p>
                <li><i class="bi bi-check-circled"></i> Pemilihan Media Tanam</li>
                <p> Pilih media tanam yang cocok untuk sistem hidroponik Anda. Contoh media tanam termasuk kerikil, serat kelapa, pasir, atau rockwool. Pastikan media ini bersih dan bebas dari hama atau patogen.</p>
                <li><i class="bi bi-check-circled"></i> Pemilihan Tanaman</li>
                <p> Tentukan jenis tanaman yang ingin Anda tanam. Beberapa tanaman lebih cocok untuk sistem hidroponik daripada yang lain. Sayuran hijau, tomat, mentimun, dan cabai biasanya tumbuh baik dalam hidroponik.</p>
                <li><i class="bi bi-check-circled"></i> Pemilihan Larutan Nutrisi</li>
                <p> Gunakan larutan nutrisi yang sesuai dengan kebutuhan tanaman Anda. Larutan nutrisi harus mencakup semua nutrisi esensial yang diperlukan oleh tanaman, termasuk nitrogen (N), fosfor (P), kalium (K), kalsium (Ca), magnesium (Mg), serta elemen mikro seperti besi (Fe) dan mangan (Mn).</p>
                <li><i class="bi bi-check-circled"></i> Penyiapan Reservior Nutrisi</li>
                <p> Persiapkan reservoir atau bak yang akan digunakan untuk menyimpan larutan nutrisi. Pastikan reservoir bersih dan steril. Kontrol pH dan kekuatan larutan nutrisi (EC) untuk memastikan bahwa mereka berada dalam rentang yang tepat untuk tanaman yang Anda pilih.</p>
                <li><i class="bi bi-check-circled"></i> Penyusunan Sistem</li>
                <p> Susun sistem hidroponik Anda sesuai dengan desain yang telah Anda pilih. Pasang pompa air, saluran nutrisi, dan sistem aerasi (jika diperlukan). Pastikan semua komponen terhubung dengan baik dan tidak ada kebocoran.</p>
                <li><i class="bi bi-check-circled"></i> Penanaman Awal</li>
                <p> Tanam bibit atau benih ke dalam media tanam dengan hati-hati. Pastikan akar tanaman terletak dengan baik di media dan mendapat kontak langsung dengan larutan nutrisi. Jaga agar tanaman tetap stabil selama proses penanaman.</p>
                <li><i class="bi bi-check-circled"></i> Pemantauan dan Perawatan</li>
                <p> Monitor pH, EC, dan suhu larutan nutrisi secara teratur. Periksa tanaman untuk tanda-tanda penyakit, hama, atau kekurangan nutrisi. Berikan larutan nutrisi tambahan jika diperlukan. Bersihkan sistem secara teratur untuk mencegah tumbuhnya jamur atau bakteri.</p>
                <li><i class="bi bi-check-circled"></i> Penyesuaian dan Peningkatan</li>
                <p> Amati pertumbuhan tanaman dan hasil panen. Sesuaikan parameter seperti pH, kekuatan larutan nutrisi, atau waktu penyiraman jika diperlukan. Terus belajar dan eksperimen dengan sistem Anda untuk meningkatkan hasil.</p>
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
