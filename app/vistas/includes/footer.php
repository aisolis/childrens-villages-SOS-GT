
<footer id="footer" class="page-footer font-small pt-4 preloder" style="margin-bottom:68px;">
    <div class="container text-center text-md-left preloder">
        <div class="row text-center text-md-left mt-3 pb-3">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 footer-contact">
                <h6 class="text-uppercase mb-4 font-weight-bold">Soy su Voz</h6>
                <p style="text-align: justify;">Brindamos calor de hogar para cada niño y niña lleno de amor, respeto y seguridad. Actualmente beneficiamos a más de 1,000 niños y niñas. ¡APOÝANOS!</p>
            </div>

            <hr class="w-100 clearfix d-md-none">

            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Enlaces Útiles</h6>
                <?php foreach ($foot['post'] as $link): ?>
                <p><i class="<?php echo $link->icono ?> mr-3"></i><a style="color:white; font-weight:bold;" class="k-d" href="<?php echo $link->url ?>" target="_blank"><?php echo $link->nombre ?></a></p>
                <?php endforeach;?>
            </div>

            <hr class="w-100 clearfix d-md-none">
        
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contacto</h6>
                <p><i class="fas fa-home mr-3"></i>9 Avenida, 32-01 Zona 11 Colonia las Charcas</p>
                <p><i class="fas fa-envelope mr-3"></i>amigos@aldeasinfantiles.org.gt</p>
                <p><i class="fas fa-phone mr-3"></i>2419 1500</p>
            </div>
        </div>

        <hr>

        <div class="row d-flex align-items-center">
            <div class="col-md-7 col-lg-8">
                <p class="text-center text-md-left">© 2020 Copyright: <a class="k-d" href="https://www.aldeasinfantiles.org.gt"><strong>Aldeas Infantiles SOS Guatemala</strong></a></p>
            </div>

            <div class="col-md-5 col-lg-4 ml-lg-0">
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a class="k-d" href="https://twitter.com/AISOSGuatemala" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
                    <a class="k-d" href="https://www.facebook.com/AISOSGT" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                    <a class="k-d" href="https://www.instagram.com/aldeasinfantiles_gt/" class="facebook" target="_blank"><i class="bx bxl-instagram"></i></a>
                    <a class="k-d" href="https://www.youtube.com/channel/UC32CCODtmqn3Em037nKQxOw" class="youtube" target="_blank"><i class="bx bxl-youtube"></i></a>
                </div>
                <br>
            </div>
        </div>
    </div>
</footer>
