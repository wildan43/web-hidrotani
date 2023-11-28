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
            <h3>Sistem Hidroponik</h3>
            <p style="color: black;">Beberapa sistem dalam Hidroponik</p>
            <ul>
              <li><i class="bi bi-check-circled"></i> Sistem wick</li>
              <p> Prinsip: Sistem ini menggunakan sumbu pembawa (wick) untuk mengangkut air dan nutrisi dari reservoir ke media tanam.</p>
              <p> Keuntungan: Sistem ini sederhana dan murah, cocok untuk pemula.</p>
              <li><i class="bi bi-check-circled"></i> Sistem Deep Water Culture (DWC)</li>
              <p> Prinsip: Tanaman ditempatkan dalam rakit apung di atas larutan nutrisi yang terus bergerak, memastikan akar terendam dalam larutan tersebut.</p>
              <p> Keuntungan: DWC memberikan akses oksigen yang baik ke akar tanaman, mempercepat pertumbuhan.</p>
              <li><i class="bi bi-check-circled"></i> Sistem Nutrient Film Technique (NFT)</li>
              <p> Prinsip: Larutan nutrisi tipis mengalir melalui akar tanaman yang ditempatkan dalam saluran datar, menciptakan film tipis yang memberikan nutrisi pada akar.</p>
              <p> Keuntungan: Efisien dalam penggunaan air dan nutrisi, baik untuk tanaman berakar dangkal.</p>
              <li><i class="bi bi-check-circled"></i> Sistem Aeroponik</li>
              <p> Prinsip: Akar tanaman tergantung di udara dan disemprot dengan larutan nutrisi secara teratur menggunakan semprotan misting.</p>
              <p> Keuntungan: Memungkinkan pertukaran gas oksigen dan karbon dioksida yang optimal untuk akar tanaman, menghasilkan pertumbuhan yang cepat.</p>
              <li><i class="bi bi-check-circled"></i> Sistem Drip</li>
              <p> Prinsip: Larutan nutrisi disemprotkan atau diteteskan secara perlahan-lahan ke akar tanaman melalui pipa atau selang.</p>
              <p> Keuntungan: Memungkinkan pengontrolan yang akurat atas jumlah air dan nutrisi yang diberikan kepada tanaman.</p>
              <li><i class="bi bi-check-circled"></i> Sistem Wick to Waste</li>
              <p> Prinsip: Sistem ini menggunakan sumbu pembawa untuk membawa larutan nutrisi ke media tanam, tetapi kelebihan larutan tersebut tidak dikembalikan ke reservoir, melainkan disimpan dalam wadah terpisah.</p>
              <p> Keuntungan: Mengurangi risiko overfeeding dan membantu pemeliharaan pH dan EC yang lebih stabil.</p>
              <li><i class="bi bi-check-circled"></i> Sistem Aquaponik</li>
              <p> Prinsip: Kombinasi antara hidroponik dan akuakultur (budidaya ikan). Air yang digunakan untuk membudidayakan ikan diperkaya oleh kotoran ikan yang mengandung nutrisi, yang kemudian digunakan untuk menyuburkan tanaman hidroponik.</p>
              <p> Keuntungan: Sistem ini menciptakan lingkungan berkelanjutan di mana ikan dan tanaman saling mendukung.</p>
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
