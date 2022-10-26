<?php include('../Plantilla/Encabezado.php') ?>
    <main>
        <section class="pagina-noticias">
            <div class="container">
                <div class="row  p-md-5">
                    <div class="col-md-9">
                        <div class="d-flex vista-titulo-noticia px-4 align-items-center">
                            <span class=" rounded "></span>
                            <div class="p-3">
                                <h3 class="color-oscuro h3 mb-0"> Titulo de Nombre de la noticia </h3>
                                <p> <small class="text-muted "> Autor: Luis Urbina </small> </p>
                            </div>
                        </div>
                        <div class="vista-cuerpo-noticia">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus laudantium ipsa perspiciatis quis cumque in atque velit incidunt magni possimus aut voluptatibus quasi, expedita quia porro, numquam quam iure odio!
                            Eveniet temporibus eligendi, necessitatibus quia, dignissimos sunt iusto aperiam, inventore in accusantium non unde odio soluta perferendis voluptatibus? Nulla exercitationem eius dignissimos minima! Pariatur, quia accusamus. Quaerat voluptatum cum reiciendis!
                            Unde odit officia, architecto minima amet non? Hic eum molestiae asperiores blanditiis minima dolor. Saepe, ipsum sint tempora magnam necessitatibus vel a cum quisquam accusamus consequuntur repudiandae itaque, iure dolore!
                            Cum dolorem, deserunt minus, debitis asperiores molestias officiis, sunt quo quaerat modi nulla commodi. Fugit expedita, sunt velit odio quae reprehenderit sequi. Quidem eveniet sunt debitis nam consequatur eius ex!
                            Provident ullam aliquam recusandae sapiente amet. Optio libero placeat maiores rem? Dolores unde culpa recusandae tempore distinctio, neque repellat dolorem ratione voluptatibus odio animi laborum, beatae sint libero? Qui, nulla.
                            Veritatis quod recusandae magnam corrupti consectetur neque distinctio tempore esse deleniti. Obcaecati, temporibus? Ducimus perspiciatis officiis cumque voluptates placeat blanditiis praesentium aut sit. Dolore corrupti omnis minima, eligendi doloremque sit?
                            Modi reprehenderit possimus quibusdam in accusamus suscipit beatae at iste consequuntur quas pariatur, temporibus asperiores, veniam dolorum delectus nam, impedit molestiae nulla! Tempore sed culpa corrupti, quasi atque inventore labore?
                            Iure animi debitis eos ipsam eum vel ullam ipsum. Corporis a iste delectus molestias unde dolorem quaerat fugiat iure enim ab explicabo temporibus amet, tempore odio perspiciatis, dolores magnam provident.
                            Hic iste autem reprehenderit placeat quae adipisci vero laborum, quis ipsum voluptate, vel et qui dolores repellendus explicabo accusamus veritatis eos at fugit nostrum in libero soluta deserunt. Quam, ducimus.
                            Similique inventore adipisci enim ex aliquid maiores, repellendus quisquam culpa, velit eos minus in vitae quam dolore error, eaque dignissimos? Molestias doloremque facilis voluptatem dolorem adipisci ipsum deleniti? Eum, suscipit?</p>
                        </div>
                    </div>
                    <aside class="col-md-3 d-none d-md-block">
                        <div class="contenedor-aside">
                            <div class="noticias-recientes">
                                <h3>Recientes</h3>
                                <a href="" class="link fs-5 d-block">Titulo 1</a>
                                <a href="" class="link fs-5 d-block">Titulo 2</a>
                                <a href="" class="link fs-5 d-block">Titulo 2</a>

                            </div>
                            <div class="ventana-categorias">
                                <h3>Categorias</h3>
                                <div>
                                    <a href="" class="link fs-6 text-decoration-none px-1 rounded bg-warning text-light m-1">Categoria 1</a>
                                    <a href="" class="link fs-6 text-decoration-none px-1 rounded bg-warning text-light m-1">Categoria 2</a>
                                    <a href="" class="link fs-6 text-decoration-none px-1 rounded bg-warning text-light m-1">Categoria 3</a>
    
                                </div>
                            </div>

                        </div>
                    </aside>
                </div>

            </div>
        </section>
        <section>
            <div class="container">
                <div class="px-4 contenedor-ancho">

                    <div class="comentarios p-3 d-flex align-items-center ">
                        <img src="../img/escudo.png" alt="" width="90px" class="d-none d-md-block">
                        <div class="p-2"> 
                            <p class="text-muted comentario-titulo h5">Nombre de Usuario</p>
                            <p class="comentario-cuerpo mb-1 lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo aliquam molestiae, voluptates, incidunt officia autem illo assumenda  </p>
                            <p class="text-muted comentario-titulo"><small>Correo de Usuario | fecha : 20/10/2022</small></p>
        
                        </div>
                    </div>
                    
                    <div class="comentarios p-3 d-flex align-items-center ">
                        <img src="../img/escudo.png" alt="" width="90px" class="d-none d-md-block">
                        <div class="p-2"> 
                            <p class="text-muted comentario-titulo h5">Nombre de Usuario</p>
                            <p class="comentario-cuerpo mb-1 lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo aliquam molestiae, voluptates, incidunt officia autem illo assumenda  </p>
                            <p class="text-muted comentario-titulo"><small>Correo de Usuario | 20/10/2022</small></p>
        
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <p> Escribe un Comentario...</p>
                    <form action="" class="contenedor-ancho px-md-5" >
                        <div class="mb-1">
                            <label for="Nombre">Nombre :</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-1">
                            <label for="Correo">Correo :</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Nombre">Mensaje :</label>
                            <textarea name="comentario" id="" cols="10" rows="3" class="form-control">
    
                            </textarea>
                        </div>
                        <div class="mb-3 text-end ">
                            <input type="submit" value="Enviar" class="btn btn-warning text-light">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
 <?php include('../Plantilla/Pie.php') ?>
   