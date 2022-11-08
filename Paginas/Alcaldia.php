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
                    <img src="../img/fijas/alcalde.jpg" alt="alcalde" height="360px" width="auto">
                    
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
                <div class="col-12 h-100 ">
                    <a data-bs-toggle="modal" data-bs-target="#modalOrganigrama">
                        <div class="shadow-sm bg-light contenedor-organigrama h-50 border rounded">
                            <img src="../img/fijas/organigrama-real.png" alt="organigrama" width="100%">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-5 px-md-4">
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-3 h1">Objetivos Generales</h3>
                    <ul>
                        <li>Reorganización estructural de la Alcaldía y la creación de 3 Institutos Autónomos Municipales. </li>
                        <li> Apoyo a las comunidades organizadas y poder popular, a , través de la creación de empresas de producción social. </li>
                        <li>Incentivar la diversidad productiva del municipio, a través del apoyo a los productores y prestadores de servicios turísticos.</li>
                        <li> Reparación y mantenimiento de instalaciones y espacios públicos. </li>
                        <li>Rehabilitación y mantenimiento de la vialidad del municipio.</li>
                        <li>Fortalecer las políticas públicas de seguridad ciudadana en el municipio.</li>
                        <li>Fortalecimiento del servicio de transporte público.</li>
                    </ul>
                </div>
                <div class="col-12">
                    <h3 class="mb-3 h1">Objetivos Específicos</h3>
                    <ul>
                        <li>Reorganizición estructural de la Alcaldía y la creación de tres Institutos Autónomos Municipales. </li>
                        <li> Creación de los siguientes Institutos Autónomos: </li>
                        <ol>
                            <li> Instituto Autónomo Municipal de la Mujer.</li>
                            <li>Instituto Autónomo Municipal de la Cultura y Turismo. </li>
                            <li> Instituto Autónomo Municipal de lla Juventud, Deporte y. Recreación.</li>
                        </ol>
                        <li>Creación de la siguientes Oficinas:</li>
                        <ol>
                            <li>Dirección de apoyo y coordinación con el Poder Popular</li>
                            <li>Oficina de Planificación y Elaboración de Proyectos de Desarrollo Municipal y Comunal.</li>
                            <li>Sala Situacional Municipal de Imformación, Análisis y Estadística.</li>
                        </ol>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section class="mision-vision">
        <div class="container">
            <div class="row py-4">
                <div class="col-md-6 px-md-5 ">
                    <div class="mv-cuerpo position-relative ">
                        <div class="figura position-absolute "></div>
                        <div class=" ">
                            <h2 class="text-light">Misión</h2>
                            <p class="p-3 text-center shadow">Reactivar, reivindicar y fortalecer los valores socialistas, éticos, cooperativos y humanos de los habitantes del municipio Capacho Nuevo del estado Táchira, a través de los sistemas de desarrollo productivo, agrario, cultural, turístico y comunitario, siempre enfocados dentro del Plan de Desarrollo Económico y Social de la Nación 2019-2025, con el fin de maximizar el nivel de conciencia ciudadana y revolucionaria de los integrantes de nuestro municipio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-md-5">
                    <div class="mv-cuerpo position-relative">
                        <div class="figura position-absolute"></div>
                        <div class="">
                            <h2 class="text-light">Visión</h2>
                            <p class="p-3 text-center shadow">La transformación institucional, para que la misma sea autosustentable y eficiente; la cual, sirva de referencia, tanto a nivel estadal como nacional, en el diseño y desarrollo de políticas locales que fomente el impulso de la sociedad, en el marco del nuevo modelo de desarrollo y de participación protagónica con el poder popular, generadora de mecanismos para el impulso productivo en las comunidades; con la concepción de un ciudadano moral y éticamente nuevo, que reconozca la acción del servidor público proactivo, cooperador y esencialmente honesto.</p>
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
                    <img src="../img/fijas/organigrama-real.png" alt="organigrama" width="100%">
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('../Plantilla/Pie.php') ?>