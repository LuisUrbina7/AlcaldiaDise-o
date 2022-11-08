<footer class="py-2">
    <div class="container ">
        <div class="row p-5 pb-4">
            <div class="col-6">
                <h5 class="text-light">Lema</h5>
                <h2 class="text-light lh-sm h3">En Capacho Nuevo... Renace la Esperanza!!!</h2>
                
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
<!-- <script src="../jquery-3.6.1.min.js"></script>
    <script src="../bootstrap-5.0.2/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../js/cargando.js" ></script>
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