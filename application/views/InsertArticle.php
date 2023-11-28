
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
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
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                            <img src="<?php echo base_url('assets/plugins/images/users/ilham.jpg') ?>" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Ilham</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
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
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Article</h4>
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
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <form class="form-horizontal form-material" action="<?php echo site_url('sumbitarticle')?>" method="post" enctype="multipart/form-data">
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Editor</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" placeholder="Nama editor" name="editor" id="editor" class="form-control p-0 border-0">
                                    </div>
                                </div>
                                    
                                <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">tanggal</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Tanggal" name="tanggal" id="tanggal"
                                                class="form-control p-0 border-0"> </div>
                                    </div>

                                <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Lokasi</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Lokasi" name="lokasi" id="lokasi"
                                                class="form-control p-0 border-0"> </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Judul Artikel</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Judul" name="judul" id="judul"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    
                                    
                                    <div class="form-group mb-4">
                                        <label class="col-md-6 p-0">Isi Artikel</label>
                                        <label class="col-md-6">note:setiap spasi diberi &lt;/b&gt; </label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea rows="5" class="form-control p-0 border-0" name="dekskripsi" id="dekskripsi"></textarea>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Gambar Artikel</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <label for="image">Pilih Gambar:</label>
                                            <input type="file" id="image" name="image" accept="image/*">
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="col-sm-12 mt-4">
                                            <button type="submit" class="btn btn-success">Submit Artikel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2023 © HidroTani by Pemuda Jompo TPL B1
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
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