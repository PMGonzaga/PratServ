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
<html lang="pt-br" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../assets/img/pratserv_logo.jpeg" type="image/x-icon">
  <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>PratServ</title>
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
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>
        <div class="flex-shrink-0 dropdown">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small shadow show" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 34px);" data-popper-placement="bottom-end">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <div style="text-align: center; margin-top: 20px;">
  <img src="../assets/img/pratserv_logo.jpeg" alt="Descrição da imagem" />
    <h1 class="text-body-emphasis">PratServ</h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted">
      Essa é a BETA do nosso sistema logo logo temos planos de implementar muito mais funções
      em caso de feedback entre em contato conosco.
    </p>
    </div>
  </div>
</body>
</html>
