

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style2.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create Account</title>
    
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                <!-- Logo di atas gambar -->
                <div class="logo-container">
                <img src="<?php echo base_url('assets/img/logo1.png') ?>" alt="" class="logo">
            </div>
                <!-- Gambar di antara tombol "Sign Up" dan "Log in" -->
                <img src="<?php echo base_url('assets/img/sing.jpg') ?>" alt="" style="width: 100%;">
                
            </div>

            <div class="col-md-6 right">
                <div class="input-box">
                    <header>Create account</header>
                    <form id="signup" action="register">
                        <div class="input-field">
                            <input type="newusername" class="input" id="newusername" name="newusername" required="">
                            <label for="newusername" id="newusername" name="newusername">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input" id="newemail" name="newemail" required="" autocomplete="off">
                            <label for="newemail" id="newemail" name = "newemail">Email</label> 
                        </div> 
                        <div class="input-field">
                            <input type="password" class="input" id="newpassword" name ="newpassword" required="">
                            <label for="newpassword" id="newpassword" name="newpassword" >Password</label>
                        </div> 
                    </form>
                    <div class="input-field">
                        <input type="submit" form="signup" class="submit" value="Sign Up">
                    </div> 
                    <div class="signin">
                        <span>Already have an account? <a href="<?php echo site_url('') ?>">Log in here</a></span>
                    </div>
                    <div class="Home">
                        <a href="<?php echo site_url('') ?>">Home</a>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
</body>
</html>
