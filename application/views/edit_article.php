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

// Periksa jika ID artikel diberikan dalam URL
if (isset($_GET['id'])) {
    $articleId = $_GET['id'];

    // Memanggil API untuk mendapatkan detail artikel berdasarkan ID
    $articleUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-cjbzs/endpoint/getdataArticlebyId?id=' . $articleId;
    $articleData = callAPI($articleUrl);

    // Periksa jika artikel ada
    if ($articleData) {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $updatedData = array(
                'judul' => $_POST['judul'],
                'editor' => $_POST['editor'],
                'tanggal' => $_POST['tanggal'],
                'dekskripsi' => $_POST['dekskripsi'],
                
                
                // Tambahkan field lain jika diperlukan
            );

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                // Process the uploaded image
                $image = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
                $updatedData['image'] = $image;
            }else {
                // Use the existing image data
                $updatedData['image'] = $articleData['image'];
            }

            // Memanggil API untuk memperbarui artikel berdasarkan ID
            $url = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-cjbzs/endpoint/UpdateArticle?id=' . $articleId;


            $updateResult = callAPI($url, 'PUT', $updatedData);

            if ($updateResult) {
                // Redirect ke halaman daftar artikel atau tampilkan pesan sukses
                header('Location: dataArticle');


                exit;
            } else {
                $error_message = "Gagal memperbarui artikel. Silakan coba lagi.";
                // var_dump($updatedData);

            }
        }
    } else {
        // Tangani jika artikel dengan ID tertentu tidak ditemukan
        echo "Artikel tidak ditemukan.";
        exit;
    }
} else {
    // Tangani jika tidak ada ID artikel yang diberikan dalam URL
    echo "ID Artikel tidak ada.";
    exit;
}
?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>HidroTani Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/plugins/images/favicon.png')?>">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

</head>

<body>
    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
         <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                <a class="navbar-brand" href="<?php echo site_url('')?>">
                        
                    <b class="logo-icon">
                            <img src="<?php echo base_url('assets/plugins/images/Logo HT.png')?>" alt="homepage" />
                        </b>
                        <span class="logo-text">
                            <img src="<?php echo base_url('assets/plugins/images/HidroTani Admin.png')?>" alt="homepage" />
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
               <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                   <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                       <li>
                            <a class="profile-pic" href="#">
                            <img src="<?php echo base_url('assets/plugins/images/users/ilham.jpg') ?>" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium"><?php echo $_SESSION['user']['username']; ?></span></a>
                        </li>
                      </ul>
                </div>
            </nav>
        </header>
         <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('Adminprofile'); ?>"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('adminbasic_table'); ?>"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Daftar Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('dataArticle'); ?>"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">Article</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('AdminHidropeta'); ?>"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">HidroPeta</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
       <div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="container">
        <h2>Edit Artikel</h2>
        <?php if (isset($error_message)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
        <form method="post" action="" enctype="multipart/form-data">
>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $articleData['judul']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="editor" class="form-label">Editor</label>
                <input type="text" class="form-control" id="editor" name="editor" value="<?php echo $articleData['editor']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php echo $articleData['tanggal']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="dekskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="dekskripsi" name="dekskripsi" rows="4" required><?php echo $articleData['dekskripsi']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Artikel</label>
                <div class="entry-img">
                      <?php
                      // Decode and display the base64-encoded image
                      $imageData = base64_decode($articleData['image']);
                      $imageSrc = 'data:image/png;base64,' . base64_encode($imageData);
                      ?>
                      <img src="<?php echo $imageSrc; ?>" alt="" class="img-fluid">
                  </div>
                <input type="file" id="image" name="image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Perbarui Artikel</button>
        </form>
    </div>
    <footer class="footer text-center">2023 © HidroTani by Pemuda Jompo TPL B1</footer>
</div>
     </div>
     <script src="<?php echo base_url('assets/plugins/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/app-style-switcher.js'); ?>"></script>
<!--Wave Effects -->
<script src="<?php echo base_url('assets/js/waves.js'); ?>"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url('assets/js/sidebarmenu.js'); ?>"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>

</body>

</html>
