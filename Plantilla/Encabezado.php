<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Inicio</title>
</head>

<body>
<?php include('../cargador/cargando.php') ?>
<header>
    <div class="d-flex">
        <span id="cuadro-1"></span>
        <marquee behavior="" direction="letf" >Carrera 06 frente a la Plaza Bolivar de Independecia, Edif. sede Alcaldia, Municipio Capacho Nuevo, Estado Táchira.</marquee>
    </div>
    <div class="container py-3 d-flex">
        <img src="../img/escudo.png" alt="Escudo" width="100px">
        <div class="titulo-encabezado lh-1 mx-3 d-flex w-100">
            <img src="../img/Barras.png" alt="Titulo">
            <h1 class="lh-1 text-black"> Alcaldia Bolivariana del Municipio <br>
                <span class="h3">Capacho Nuevo</span> </h1>
        </div>
    </div>
    <nav class="menu-pegajoso-inicio">
        <div class="container navegador">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="../index.php" class="nav-link text-light">Inicio</a></li>
                <li class="nav-item"><a href="../Paginas/Alcaldia.php" class="nav-link text-light">Alcandia</a></li>
                <li class="nav-item"><a href="../Paginas/Municipio.php" class="nav-link text-light">Municipio</a></li>
                <li class="nav-item"><a href="../Paginas/Entes.php" class="nav-link text-light">Entes</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Planillas de Solictud
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../Paginas/Servicios-vista.php">Catastro</a></li>
                        <li><a class="dropdown-item" href="../Paginas/Servicios-vista.php">Registro Civil</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="../Paginas/noticias.php" class="nav-link text-light">Noticias</a></li>
            </ul>
        </div>
    </nav>
    <ul class="lista-redes d-none d-md-block">
        <li><a class="instagram" href=""><i class="lab la-instagram fs-2 text-light p-2"></i> Instagram</a></li>
        <li> <a class="facebook" href=""><i class="lab la-facebook-f fs-2 text-light p-2"></i> Facebook</a></li>
        <li><a class="twitter" href=""><i class="lab la-twitter fs-2 text-light p-2"></i> twitter</a> </li>
    </ul>
</header>