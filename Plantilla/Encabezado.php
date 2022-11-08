<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"> -->
    <link rel="stylesheet" href="../css/style.css">
    <title>Inicio</title>
</head>

<body>
    <?php include('../cargador/cargando.php') ?>
    <header>
        <nav class="menu-pegajoso-inicio">
            <!--   -----Menu Horizontal---- -->
            <div class="container navegador">
                <button class="navbar-toggler d-md-none d-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#ejemplo" aria-controls="ejemplo">hola<span class="navbar-toggler-icon"></span></button>
                <ul class="nav justify-content-center ">
                    <li class="nav-item"><a href="../index.php" class="nav-link text-light">Inicio</a></li>
                    <li class="nav-item"><a href="../Paginas/noticias.php" class="nav-link">Noticias</a></li>
                    <li class="nav-item"><a href="../Paginas/Alcaldia.php" class="nav-link">Alcaldia</a></li>
                    <li class="nav-item"><a href="../Paginas/Municipio.php" class="nav-link">Municipio</a></li>
                    <li class="nav-item"><a href="../Paginas/Entes.php" class="nav-link">Entes</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Planillas de Solictud
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../Paginas/Servicios-vista.php">+ Catastro</a></li>
                            <li><a class="dropdown-item" href="../Paginas/servicios-registro-civil.php">+ Registro Civil</a></li>
                            <li><a class="dropdown-item" href="../Paginas/servicios-hacienda.php">+ Hacienda Municipal</a></li>
                            <li><a class="dropdown-item" href="../Paginas/servicios-sindicatura.php">+ Sindicatura</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--   -----Menu lateral---- -->
            <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="ejemplo" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="text-light">Menù</h5>
                    <button type="button" class="btn-close text-reset text-light" data-bs-dismiss="offcanvas" aria-label="close">

                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul>
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="../Paginas/noticias.php">Noticias</a></li>
                        <li><a href="../Paginas/Alcaldia.php">Alcaldia</a></li>
                        <li><a href="../Paginas/Municipio.php">Municipio</a></li>
                        <li><a href="../Paginas/Entes.php">Entes</a></li>
                        <div>
                            <a class=" collapsed w-100 btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#uno" aria-expanded="false">Planillas de Solictud</a>
                            <div id="uno" class="collapse">
                                <ul>
                                    <li><a class="dropdown-item" href="../Paginas/Servicios-vista.php">+ Catastro</a></li>
                                    <li><a class="dropdown-item" href="../Paginas/Servicios-vista.php">+ Registro Civil</a></li>
                                    <li><a class="dropdown-item" href="../Paginas/servicios-hacienda.php">+ Hacienda Municipal</a></li>
                                    <li><a class="dropdown-item" href="../Paginas/servicios-sindicatura.php">+ Sindicatura</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <li class="nav-item">
                            <div class="accodion accordion-flush" id="ejemplo">
                                <div class="accordiion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#uno" aria-expanded="false">Hola</button>
                                    </h2>
                                </div>
                                <div id="uno">
                                    <ul>
                                        <li><a class="dropdown-item" href="Paginas/Servicios-vista.php">+ Catastro</a></li>
                                        <li><a class="dropdown-item" href="Paginas/Servicios-vista.php">+ Registro Civil</a></li>
                                        <li><a class="dropdown-item" href="Paginas/servicios-hacienda.php">+ Hacienda Municipal</a></li>
                                        <li><a class="dropdown-item" href="Paginas/servicios-sindicatura.php">+ Sindicatura</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li> -->
                        <!-- <div class="dropdown">
                            <a class="dropdown-toggle w-100 btn btn-danger" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="boton-menu-lateral-planillas">
                                Planillas de Solictud
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-dark" href="Paginas/Servicios-vista.php">+ Catastro</a></li>
                                <li><a class="dropdown-item text-dark" href="Paginas/Servicios-vista.php">+ Registro Civil</a></li>
                                <li><a class="dropdown-item text-dark" href="Paginas/servicios-hacienda.php">+ Hacienda Municipal</a></li>
                                <li><a class="dropdown-item text-dark" href="Paginas/servicios-sindicatura.php">+ Sindicatura</a></li>
                            </ul>
                        </div> -->
                    </ul>
                </div>
            </div>
        </nav>
        <div class=" d-flex align-items-center" style="background: #f6f8ff;">
            <img src="../img/fijas/Logo-puro.png" alt="Escudo" width="90px" height="auto" id="pagina-inicial-escudo">
            <div class="titulo-encabezado lh-1 d-flex w-100">
                <h1 id="membrete" class="mx-auto"> ALCALDIA BOLIVARIANA DEL MUNICIPIO <br> <small class="h3">CAPACHO NUEVO DEL ESTADO TACHIRA</small> </h1>
            </div>
            <img src="../img/fijas/luis_mendoza.png" alt="LuisGomez" width="90px" height="auto" id="membreteLuisMendoza" class="d-none d-md-block">
        </div>

        <div class="d-flex">
            <marquee behavior="" direction="letf" class="py-1">Carrera 06 frente a la Plaza Bolivar de Independecia, Edif. sede Alcaldia, Municipio Capacho Nuevo, Estado Táchira</marquee>
        </div>
        <ul class="lista-redes d-none d-md-block">
            <li><a class="instagram" target="_blank" href="https://www.instagram.com/alcaldia_capachonuevo/"><i class="lab la-instagram fs-2 text-light p-2"></i> Instagram</a></li>
            <li> <a class="facebook" target="_blank" href="https://www.facebook.com/dipluismendoza/"><i class="lab la-facebook-f fs-2 text-light p-2"></i> Facebook</a></li>
            <li><a class="twitter" href=""><i class="lab la-twitter fs-2 text-light p-2"></i> twitter</a> </li>
        </ul>
    </header>