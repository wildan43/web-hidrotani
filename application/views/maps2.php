
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps Project</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css">
    <style>
        #map {
            height: 800px;
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bgbiru fixed-top">
        <div class="container">
        <a class="navbar-brand" href="<?php echo site_url('')?>">HidroTani</a>            
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
    
    <div id="map"></div>
    <button id="trigger-routing-button">Tampilkan Rute</button>

    <div id="user-location-button" style="position: absolute; top: 10px; left: 10px; z-index: 100;"></div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
</body>
</html>
