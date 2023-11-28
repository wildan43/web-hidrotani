
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Web</title>
    
    <!-- All CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
</head>
<body>
    <!----Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bgbiru fixed-top">
        <div class="container">
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
</div>    
   <!-----Navbar End----> 

   <!-- ======= Breadcrumbs ======= -->
   <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center" style="color: black;">
        <ol>
          <li><a href="<?php echo site_url('')?>" style="color: #37517e;">Home</a></li>
          <li>Hidrobaca</li>
        </ol>
      </div>

    </div>


  </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8 entries">

                <?php
                // Fungsi untuk melakukan permintaan ke API dan mendapatkan respons JSON
                function callAPI($url, $method = 'GET', $data = false)
                {
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
                    return json_decode($response);
                }

                // Memanggil API untuk mendapatkan semua artikel
                $articlesUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-cjbzs/endpoint/getAllArticle';
                $articlesData = callAPI($articlesUrl);
                ?>

                <!-- Menampilkan artikel menggunakan perulangan -->
                <?php foreach ($articlesData as $row) : ?>
                    <article class="entry">
                    <div class="entry-img">
                      <?php
                      // Decode and display the base64-encoded image
                      $imageData = base64_decode($row->image);
                      $imageSrc = 'data:image/png;base64,' . base64_encode($imageData);
                      
                      ?>
                      <img src="<?php echo $imageSrc; ?>" alt="" class="img-fluid">
                  </div>

                        <h2 class="entry-title">
                            <a href="<?php echo site_url('article1?id=' . $row->_id); ?>"><?php echo $row->judul; ?></a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <?php echo $row->editor; ?></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <?php echo $row->tanggal; ?></a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <?php
                            // Pisahkan deskripsi menjadi paragraf
                            $paragraphs = explode("\n", $row->dekskripsi);
                            foreach ($paragraphs as $paragraph) {
                                echo "<p>$paragraph</p>";
                            }

                            ?>
                            <div class="read-more">
                                <a href="<?php echo site_url('article1?id=' . $row->_id); ?>">Read More</a>
                            </div>
                        </div>
                    </article>End blog entry
                <?php endforeach; ?>

                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>

            </div> <!-- End of the blog -->
        </div>
    </div>
</section><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#" style="text-decoration: none;">Hidroponik <span>(25)</span></a></li>
                  <li><a href="#" style="text-decoration: none;">Hama & Penyakit <span>(12)</span></a></li>
                  <li><a href="#" style="text-decoration: none;">Pupuk & Nutrisi <span>(5)</span></a></li>
                  <li><a href="#" style="text-decoration: none;">Tips <span>(22)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php 'assets/vendor/purecounter/purecounter_vanilla.js'?>"></script>
  <script src="<?php 'assets/vendor/aos/aos.js'?>"></script>
  <script src="<?php 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
  <script src="<?php 'assets/vendor/glightbox/js/glightbox.min.js'?>"></script>
  <script src="<?php 'assets/vendor/isotope-layout/isotope.pkgd.min.js'?>"></script>
  <script src="<?php 'assets/vendor/swiper/swiper-bundle.min.js'?>"></script>
  <script src="<?php 'assets/vendor/php-email-form/validate.js'?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php 'assets/js/main.js'?>"></script>

</body>

</html>