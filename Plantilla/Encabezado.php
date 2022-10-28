<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Inicio</title>
</head>

<body>
    <?php include('../cargador/cargando.php') ?>
    <header>
    <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 150" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(220, 53, 69, 1)" offset="0%"></stop>
                    <stop stop-color="rgba(220, 53, 69, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,15L480,30L960,90L1440,0L1920,75L2400,45L2880,45L3360,15L3840,15L4320,75L4800,0L5280,0L5760,45L6240,75L6720,90L7200,105L7680,135L8160,60L8640,135L9120,90L9600,120L10080,30L10560,75L11040,60L11520,120L11520,150L11040,150L10560,150L10080,150L9600,150L9120,150L8640,150L8160,150L7680,150L7200,150L6720,150L6240,150L5760,150L5280,150L4800,150L4320,150L3840,150L3360,150L2880,150L2400,150L1920,150L1440,150L960,150L480,150L0,150Z"></path>
        </svg>
        <div class="d-flex">
            <marquee behavior="" direction="letf" class="py-1">Carrera 06 frente a la Plaza Bolivar de Independecia, Edif. sede Alcaldia, Municipio Capacho Nuevo, Estado Táchira</marquee>
        </div>
        <div class="container py-2 d-flex align-items-center">
            <img src="../img/escudo.png" alt="Escudo" width="100px" height="100px">
            <div class="titulo-encabezado lh-1 mx-md-4 d-flex w-100">
                <img src="../img/Barras.png" alt="Titulo">
                <h1 id="membrete"> ALCALDIA BOLIVARIANA DEL MUNICIPIO <br> <small class="h3 d-none d-md-block">CAPACHO NUEVO DEL ESTADO TACHIRA</small> </h1>
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
            <li><a class="instagram" target="_blank" href="https://www.instagram.com/alcaldia_capachonuevo/"><i class="lab la-instagram fs-2 text-light p-2"></i> Instagram</a></li>
            <li> <a class="facebook" target="_blank" href="https://www.facebook.com/dipluismendoza/"><i class="lab la-facebook-f fs-2 text-light p-2"></i> Facebook</a></li>
            <li><a class="twitter" href=""><i class="lab la-twitter fs-2 text-light p-2"></i> twitter</a> </li>
        </ul>
    </header>