<?php
session_start();

// Verifica se a variável de sessão existe
if (!isset($_SESSION['email'])) {
    // Redireciona o usuário para outra página
    header("Location: inicio.php");
    exit(); // Certifica-se de que o código não será executado após o redirecionamento
}

// Restante do código da página aqui
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="../assets/img/pratserv_logo.jpeg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Geolocalização</title>
    <style>
        #map {
            height: 800px;
            width: 100%;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAprGCFPhc5thgDjx9kSuhkx1ZDHYX5W68&callback=initMap" async defer></script>
    <script>
        function initMap() {
            // Verifica se o navegador suporta geolocalização
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert('Seu navegador não suporta geolocalização.');
            }
        }

        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            var mapOptions = {
                center: new google.maps.LatLng(latitude, longitude),
                zoom: 12
            };

            var map = new google.maps.Map(document.getElementById("map"), mapOptions);

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(latitude, longitude),
                map: map
            });
        }
    </script>
</head>
<body>
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-secondary">Inicio</a></li>
          <li><a href="admin.php" class="nav-link px-2 text-white">Gerenciar</a></li>
          <li><a href="geolocalizacao.php" class="nav-link px-2 text-white">Geolocalização</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
    <div id="map"></div>
</body>
</html>
