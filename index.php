<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Inicio</title>
</head>

<body>
    <?php include('cargador/cargando.php') ?>
    <header>
        <div class="d-flex">
            <span id="cuadro-1"></span>
            <marquee behavior="" direction="letf">Carrera 06 frente a la Plaza Bolivar de Independecia, Edif. sede Alcaldia, Municipio Capacho Nuevo, Estado Táchira</marquee>
        </div>
        <div class="container py-2 d-flex align-items-center">
            <img src="img/escudo.png" alt="Escudo" width="100px" height="100px">
            <div class="titulo-encabezado lh-1 mx-md-4 d-flex w-100">
                <img src="img/Barras.png" alt="Titulo">
                <h1 id="membrete"> ALCALDIA BOLIVARIANA DEL MUNICIPIO <br> <small class="h3 d-none d-md-block">CAPACHO NUEVO DEL ESTADO TACHIRA</small> </h1>

            </div>
        </div>
        <nav class="menu-pegajoso-inicio">
            <div class="container navegador">
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a href="index.php" class="nav-link text-light">Inicio</a></li>
                    <li class="nav-item"><a href="Paginas/Alcaldia.php" class="nav-link text-light">Alcandia</a></li>
                    <li class="nav-item"><a href="Paginas/Municipio.php" class="nav-link text-light">Municipio</a></li>
                    <li class="nav-item"><a href="Paginas/Entes.php" class="nav-link text-light">Entes</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Planillas de Solictud
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Paginas/Servicios-vista.php">Catastro</a></li>
                            <li><a class="dropdown-item" href="Paginas/Servicios-vista.php">Registro Civil</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="Paginas/noticias.php" class="nav-link text-light">Noticias</a></li>
                </ul>
            </div>
        </nav>
        <ul class="lista-redes d-none d-md-block">
            <li><a class="instagram" href=""><i class="lab la-instagram fs-2 text-light p-2"></i> Instagram</a></li>
            <li> <a class="facebook" href=""><i class="lab la-facebook-f fs-2 text-light p-2"></i> Facebook</a></li>
            <li><a class="twitter" href=""><i class="lab la-twitter fs-2 text-light p-2"></i> twitter</a> </li>
        </ul>
    </header>
    <main>
        -----obras publicas, proteccion civil, desarrollo social, Novedades, cultura y turismo, Deporte y recreación,servicios generales----
        <section class="deslizador">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner carrusel-foto">
                    <div class="carousel-item active">
                        <img src="img/Capacho Nuevo_0.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h3 class="fs-1">Third slide label</h3>
                            <p class="text-light fs-5">Some representative placeholder content for the third slide.</p>
                            <a href="#" class="btn btn-warning"> Visualizar</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Capacho Nuevo_0.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption  d-md-block">
                            <h3 class="fs-1">Third slide label</h3>
                            <p class="text-light fs-5">Some representative placeholder content for the third slide.</p>
                            <a href="#" class="btn btn-warning"> Visualizar</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Capacho Nuevo_0.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h3 class="fs-1">Third slide label</h3>
                            <p class="text-light fs-5">Some representative placeholder content for the third slide.</p>
                            <a href="#" class="btn btn-warning"> Visualizar</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!--  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators ">
                    <button class="carrusel-botones" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner carrusel-foto">
                    <div class="carousel-item active">
                        <img src="img/Capacho Nuevo_0.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h3 class="fs-1">Third slide label</h3>
                            <p class="text-light">Some representative placeholder content for the third slide.</p>
                            <a href="#" class="btn btn-warning"> Visualizar</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Capacho Nuevo_0.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h3 class="fs-1">Third slide label</h3>
                            <p class="text-light">Some representative placeholder content for the third slide.</p>
                            <a href="#" class="btn btn-warning"> Visualizar</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Capacho Nuevo_0.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h3 class="fs-1">Third slide label</h3>
                            <p class="text-light">Some representative placeholder content for the third slide.</p>
                            <a href="#" class="btn btn-warning"> Visualizar</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->
        </section>
        
        <section class="alcalde">
            <span></span>
            <figure id="al-figura-1"></figure>
            <div class="container al-contenedor py-5">
                <div class="row">
                    <div class="col-12 ">
                        <h3 class="h6">ALTO MANDO</h3>
                        <h2 class="sub-raya"> Alcalde</h2>
                    </div>
                    <div class="col-12 cuadro pt-3 p-0">
                        <div class="al-figura-2 d-flex justify-content-center align-items-center">
                            <div class="px-md-5">
                                <h3 class="h4">Lus Mendozqa</h3>
                                <p class="textos ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi
                                    dolorum, nemo saepe id
                                    ut asperiores. </p>
                                <a href="btn" class="btn btn-danger">Leer mas</a>
                            </div>
                        </div>
                        <img src="img/magen.png" alt="" class="d-none d-md-block">
                    </div>
                </div>
            </div>
            <span></span>
        </section>

        <section class="servicios">
            <div class="container py-4">
                <div class="row py-4 text-center">
                    <h2 class="text-light">Servicios</h2>
                </div>
                <div class="row px-md-5 text-center ">
                    <div class="col-md-4 px-md-4 mb-2">
                        <div class="carta p-4 ">
                            <p class="d-flex justify-content-center align-items-center"><span class="servicios-figura"><i class="las la-universal-access"></i></span></p>
                            <h3 class="h5">Ttexvxv</h3>
                            <p class="textos text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsu
                            </p>
                            <a href="#" class="btn btn-danger">ver</a>
                        </div>
                    </div>
                    <div class="col-md-4 px-md-4 mb-2">
                        <div class="carta p-4 ">
                            <p class="d-flex justify-content-center align-items-center"><span class="servicios-figura"><i class="las la-sign-language"></i></span></p>
                            <h3 class="h5">Ttexvxv</h3>
                            <p class="textos text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsu</p>
                            <a href="#" class="btn btn-danger">ver</a>
                        </div>
                    </div>
                    <div class="col-md-4 px-md-4 mb-2">
                        <div class="carta p-4 ">
                            <p class="d-flex justify-content-center align-items-center"><span class="servicios-figura"><i class="las la-city"></i></span></p>
                            <h3 class="h5">Ttexvxv</h3>
                            <p class="textos text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsu</p>
                            <a href="#" class="btn btn-danger">ver</a>
                        </div>
                    </div>
                    <div>
                        <a href="Paginas/Servicios.php" class="p-4 saber-mas position-relative h-4 text-light d-block">Mas</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="entes">
            <div class="container py-5">
                <div class="row py-4">
                    <div class="col-12 text-center">
                        <h3 class="h6">ORGANSMOS</h3>
                        <h2 class="sub-raya">Entes</h2>
                    </div>
                </div>
                <div class="row py-4">
                    <div id="carousel-entes" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <div class="carta-carrusel d-flex justify-content-center mb-3">
                                    <div class="row w-75 border rounded p-md-3 mb-dm-3 shadow servicios-entes-figura">
                                        <div class="col-md-6 text-end">
                                            <img src="img/Capacho Nuevo_0.jpg" alt="" width="100%">
                                        </div>
                                        <div class="col-md-6 d-flex align-items-center">
                                            <div class="">
                                                <h4>Fundaindependencia</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis deserunt culpa quod at
                                                    perspiciatis quia sint possimus ut fugiat sequi impedit optio, reiciendis laborum
                                                    aliquid quidem consectetur laudantium quos asperiores.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="carousel-item">
                            <div class="carta-carrusel d-flex justify-content-center  mb-3">
                                    <div class="row w-75 border rounded p-md-3 mb-dm-3 shadow servicios-entes-figura">
                                        <div class="col-md-6 text-end">
                                            <img src="img/Capacho Nuevo_0.jpg" alt="" width="100%">
                                        </div>
                                        <div class="col-md-6 d-flex align-items-center">
                                            <div>
                                            <h4>Fundaindependencia</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis deserunt culpa quod at
                                                    perspiciatis quia sint possimus ut fugiat sequi impedit optio, reiciendis laborum
                                                    aliquid quidem consectetur laudantium quos asperiores.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                           <div class="carousel-item">
                            <div class="carta-carrusel d-flex justify-content-center  mb-3">
                                    <div class="row w-75 border rounded p-md-3 mb-dm-3 shadow servicios-entes-figura">
                                        <div class="col-md-6 text-end">
                                            <img src="img/Capacho Nuevo_0.jpg" alt="" width="100%">
                                        </div>
                                        <div class="col-md-6 d-flex align-items-center">
                                            <div>
                                            <h4>Fundaindependencia</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis deserunt culpa quod at
                                                    perspiciatis quia sint possimus ut fugiat sequi impedit optio, reiciendis laborum
                                                    aliquid quidem consectetur laudantium quos asperiores.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-entes" data-bs-slide="prev">
                        <i class="las la-angle-double-left fs-2"></i>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel-entes" data-bs-slide="next">
                        <i class="las la-angle-double-right fs-2"></i>
                        </button>
                    </div>

                    <!--    <div class="col-md-6 text-end">
                        <img src="img/Capacho Nuevo_0.jpg" alt="" width="350px">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis deserunt culpa quod at
                                perspiciatis quia sint possimus ut fugiat sequi impedit optio, reiciendis laborum
                                aliquid quidem consectetur laudantium quos asperiores.</p>
                        </div>
                    </div> -->
                </div>

            </div>
        </section>
        <section class="datos">
            <div class="container p-md-5">
                <div class="row text-center py-4">
                    <div class="col-md-3 px-5 mb-2">
                        <h3 class="h1 text-light ">50k+</h3>
                        <hr>
                        <h3 class="text-light">Poblacion</h3>
                    </div>
                    <div class="col-md-3 px-5 mb-2">
                        <h3 class="h1 text-light ">5</h3>
                        <hr>
                        <h3 class="text-light">Hosytales</h3>
                    </div>
                    <div class="col-md-3 px-5 mb-2">
                        <h3 class="h1 text-light ">3</h3>
                        <hr>
                        <h3 class="text-light">Escuelas</h3>
                    </div>
                    <div class="col-md-3 px-5 mb-2">
                        <h3 class="h1 text-light ">2</h3>
                        <hr>
                        <h3 class="text-light">glesas</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="noticias">
            <div class="container p-5">
                <div class="row p-4">
                    <div class="col-12 text-star">
                        <h3 class="h6">NOVEDADES</h3>
                        <h2 class="sub-raya justify-content-start"> <span class="mx-3">+</span> Ultimas Noticias</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <a href="#">
                            <div class="carta-noticia text-center">
                                <span class="noticia-figura-1">Titulos</span>
                                <img src="img/Capacho Nuevo_0.jpg" alt="" width="100%">
                                <span class="noticia-figura-2">Subtitulo</span>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-2">
                        <a href="#">
                            <div class="carta-noticia text-center">
                                <span class="noticia-figura-1">Titulos</span>
                                <img src="img/Capacho Nuevo_0.jpg" alt="" width="100%">
                                <span class="noticia-figura-2">Subtitulo</span>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-2">
                        <a href="#">
                            <div class="carta-noticia text-center">
                                <span class="noticia-figura-1">Titulos</span>
                                <img src="img/Capacho Nuevo_0.jpg" alt="" width="100%">
                                <span class="noticia-figura-2">Subtitulo</span>

                            </div>
                        </a>
                    </div>
                    <div class="col-4">

                    </div>
                    <div class="col-4">

                    </div>
                </div>
        </section>
       <!--  <section class="mapa">
            <div class="lh-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63242.64468534074!2d-72.37228766875002!3d7.825205700000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e666a3d6ebccb91%3A0x6ffe72e7abf9b009!2sAlcald%C3%ADa%20Municipio%20Independencia!5e0!3m2!1ses-419!2sve!4v1666016303907!5m2!1ses-419!2sve" width="100%" height="254px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section> -->
    </main>
    <footer class="py-2">
        <div class="container ">
            <div class="row p-5 pb-4">
                <div class="col-6">
                    <h5 class="text-light">Algo nose</h5>
                    <p class="text-light lh-sm"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                        deserunt, delectus inventore asperiores impedit quia voluptas .</p>
                </div>
                <div class="col-6">
                    <h5 class="text-light">Horarios de atencion al ciudadano.</h5>
                    <p class="text-light lh-sm"> Lunes - Viernes. <br> <strong class="text-light"> 8:00 AM - 01:00
                            PM</strong></p>

                </div>
                <div class="col-12 text-center text-light">
                    Copyright 2022-2023
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/cargando.js" ></script>
    <script>
        $(document).ready(function() {
            var menu = $('.menu-pegajoso-inicio').offset().top;
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > menu) {
                    $('.menu-pegajoso-inicio').addClass('menu-fijo');
                } else {
                    $('.menu-pegajoso-inicio').removeClass('menu-fijo');
                }
            })
        });
    </script>
   
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>