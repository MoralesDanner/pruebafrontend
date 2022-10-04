<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Frontend</title>
    <!-- Frameworks -->
    <link href="<?php echo base_url(); ?>/assets/librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/librerias/estilos.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>/assets/librerias/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>/assets/librerias/bootstrap/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> 
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> 
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="opacity: 0.8;">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><i class="bi bi-currency-bitcoin" style="font-size:50px"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>">Inicio</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" id="Buscar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit" style="border-color: #ffffff;color:#ffffff">Buscar</button>
      </form>
        </div>
      </div>
    </nav>