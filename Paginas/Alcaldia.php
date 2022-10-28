<?php include('../Plantilla/Encabezado.php') ?>
<main>
    <section class="alcaldia-alcalde">
        <div class="container">
            <div class="row text-center py-5 px-md-5">
                <div class="col-md-6">
                    <h2>Luis Mendoza</h2>
                    <h3 class="mb-3">Alcalde</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum soluta, deleniti dignissimos voluptates voluptas ratione architecto eveniet. Earum, qui amet officia laudantium nisi at. Error doloremque eius iste nulla dolorem.Facere sed dicta facilis quo cupiditate sapiente soluta natus maxime nobis molestiae magnam doloremque debitis ipsa, corrupti quas quasi aliquid inventore ullam ratione nesciunt similique voluptatibus sequi quos accusamus! Mollitia!</p>
                </div>
                <div class="col-md-6">
                    <img src="../img/magen.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="espacio-alcaldia">

    </section>
    <section class="organigrama">
        <div class="container">
            <div class="row text-center py-5 px-md-5">
                <h2 class="mb-3">Organigrama Institucional.</h2>
                <div class="col-12 h-100">
                    <a data-bs-toggle="modal" data-bs-target="#modalOrganigrama">
                        <div class="shadow-sm bg-light contenedor-organigrama h-50 border rounded">
                            <img src="../img/Organigrama-4 (6).svg" alt="organigrama" width="100%">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="mision-vision">
        <div class="container">
            <div class="row py-4">
                <div class="col-md-6 px-5 ">
                    <div class="mv-cuerpo position-relative ">
                        <div class="figura position-absolute "></div>
                        <div class=" ">
                            <h2 class="text-light">Misión</h2>
                            <p class="p-3 text-center shadow">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, doloribus et odio eveniet molestiae soluta debitis? Cum voluptate aspernatur aperiam magni facere laudantium ullam maiores provident.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-5">
                    <div class="mv-cuerpo position-relative">
                        <div class="figura position-absolute"></div>
                        <div class="">
                            <h2 class="text-light">Visión</h2>
                            <p class="p-3 text-center shadow">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, doloribus et odio eveniet molestiae soluta debitis? Cum voluptate aspernatur aperiam magni facere laudantium ullam maiores provident.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="modalOrganigrama" tabindex="-1" aria-labelledby="modalOrganigrama" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../img/Organigrama-4 (6).svg" alt="organigrama" width="100%">
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('../Plantilla/Pie.php') ?>