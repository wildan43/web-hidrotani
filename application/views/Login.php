<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style2.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create Account</title>
</head>
<body>
<?php
// Halaman login.php
if(isset($error_message)){
    echo '<div class="error-message">' . $error_message . '</div>';
}
?>

<div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                <!-- Logo di atas gambar -->
                <div class="logo-container">
                    <img src="<?php echo base_url('assets/img/logo1.png'); ?>" alt="" class="logo">
                </div>
                <!-- Gambar di antara tombol "Sign Up" dan "Log in" -->
                <img src="<?php echo base_url('assets/img/sing.jpg'); ?>" alt="" style="width: 100%;">
            </div>

            <div class="col-md-6 right">
                <form id="form_login" action="<?php echo site_url('signin') ?>" method="GET">
                    <div class="input-box">
                        <header>Log in</header>
                        <div class="input-field">
                            <input type="text" class="input" id="username" name="username" required="">
                            <label for="username" name="username">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password" name="password" required="">
                            <label for="password" name="password">Password</label>
                        </div> 
                        <div class="input-field">
                            <input type="submit" class="submit" form="form_login" value="Log in">
                        </div> 
                        <div class="Home">
                            <a href="<?php echo site_url(''); ?>">Home</a>
                        </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</div>

<!-- All Js -->
<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
</body>
</html>
