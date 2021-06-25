<!doctype html>
<html lang="en">

<head>
    <?php foreach ($Analy['post'] as $uwu): ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $uwu->uaCode;?>"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', '<?php echo $uwu->uaCode;?>');
    </script>
    <?php endforeach; ?>
    <meta charset="utf-8">
    <?php foreach ($pre['post'] as $uwu): ?>
    <meta name="description" content="<?php echo $uwu->descripcion ?>">
    <meta name="keywords" content="<?php echo $uwu->keywords ?>">
    <meta name="author" content="<?php echo $uwu->author ?>">
    <?php endforeach; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo RUTAPUBLIC ?>/public/img/icono.png">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" id="link" href="<?php echo RUTAPUBLIC ?>/public/css/loader-style.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption&family=Permanent+Marker&display=swap"
        rel="stylesheet">
    <link href="<?php echo RUTAPUBLIC ?>/public/animate-load/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo RUTAPUBLIC ?>/public/animate-load/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo RUTAPUBLIC ?>/public/animate-load/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?php echo RUTAPUBLIC ?>/public/animate-load/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo RUTAPUBLIC ?>/public/animate-load/venobox/venobox.css" rel="stylesheet">
    <link href="<?php echo RUTAPUBLIC ?>/public/animate-load/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo RUTAPUBLIC ?>/public/animate-load/aos/aos.css" rel="stylesheet">
    <link href="<?php echo RUTAPUBLIC ?>/public/css/slider.css" rel="stylesheet" media="screen">
    <link href="<?php echo RUTAPUBLIC ?>/public/css/slider-pro.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo RUTAPUBLIC ?>/public/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo RUTAPUBLIC ?>/public/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?php echo RUTAPUBLIC ?>/public/js/jquery.sliderPro.min.js"></script>
    <title>Soy Su voz</title>


</head>

<body onload="cargar()">

    <div class="loader">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>

    <?php require RUTAAPP . '/vistas/includes/navbar.php'; ?>
    <!-- ======= Hero Section ======= -->
    <div id="example1" class="slider-pro">
        <div class="sp-slides">
            <?php foreach ($data['post'] as $post): ?>
            <div class="sp-slide">
                <img class="sp-image" src="<?php echo RUTAPUBLIC."/public"."/".$post->folder.$post->src; ?>"
                    data-src="<?php echo RUTAPUBLIC."/public"."/".$post->folder.$post->src; ?>"
                    data-retina="<?php echo RUTAPUBLIC."/public"."/".$post->folder.$post->src; ?>">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- ======= Hero Section ======= -->

    <div class="container-fluid mt-5" data-aos="fade-up" date-aos-delay="200" id="heroContainer" name="ayuda"
        id="ayuda">
        <div class="row" id="rowhero">
            <div class="col-md-12 d-flex justify-content-center mt-5">
                <div class="section-header">
                    <h3 id="hhero">Ayúdanos a Ser la voz</h3>
                    <p id="phero">Con tu aporte contribuyes al resguardo de cientos de niñas y niños, ¡Queremos seguir
                        brindando abrigo y protección a niñas, niños, adolescentes y jóvenes quienes no cuentan con el
                        cuidado familiar.</p>
                    <p id="pcontacto">Llena tu formulario de contacto</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center" id="rowhsec">

            <div class="col-md-3 ml-5" id="primbloc">
                <p id="pprimbloc">#AmigoSOS</p>
                <div id="pprimbloc2">
                    <p>Ayuda recurrente</p>
                </div>

                <div id="aprimbloc">
                    <a href="https://www.aldeasinfantiles.org.gt/como-ayudar/amigo-sos" target="_blank">
                        <img src="<?php echo RUTAPUBLIC?>/public/img/Web_AISOSQuiero-ayudar-2.-amigosSoS.png">
                    </a>
                </div>
            </div>

            <div class="col-md-3" id="secondbloc">
                <p id="psecondbloc">#SoyTuVoz</p>
                <div id="psecondbloctwo">
                    <p>Donativo único</p>
                </div>

                <div id="asecondbloc">
                    <a href="contact.php">
                        <img src="<?php echo RUTAPUBLIC?>/public/img/Web_AISOSQuiero-ayudar-1.-Soy-su-voz.png">
                    </a>
                </div>
            </div>


            <div id="tercerbloc" class="col-md-3 ml-5">
                <p id="ptercerbloc">#Sorteo</p>
                <div id="ptwotercerbloc">
                    <p>Participa y gana por Q30</p>
                </div>

                <div id="atwotercerbloc">
                    <a
                        href="https://www.ayuvi.org.gt/es/content/bingo-familiar-ayuvi?fbclid=IwAR3AI1tZVeF9aIIqHYW_mWH0YIUtvVpSqXeoNjYgZjSxK-pBnnyCTarZwb4">
                        <img src="<?php echo RUTAPUBLIC?>/public/img/Web_AISOSQuiero-Ganar-3.-bingo.png">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="why-us section-bg" id="video" data-aos="fade-up" date-aos-delay="200">
        <div class="container" name="embajadores" id="embajadores">
            <div class="row">
                <div class="col-md-5 mt-3 ml-3">
                    <h1 id="whyus">Embajadores SOS</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 video-box">
                    <?php foreach ($Vid['post'] as $video): ?>
                    <img src="<?php echo RUTAPUBLIC."/public"."/".$video->folder.$video->src; ?>" class="img-fluid"
                        alt="">
                    <a href="<?php echo $video->Urla;?>" class="venobox play-btn mb-4" data-vbtype="video"
                        data-autoplay="true"></a>
                    <?php endforeach; ?>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx bx-film"></i></div>
                        <h4 class="title">La mayoría de veces el <span id="spanh4">Abusador</span> está muy cerca</h4>
                        <p class="description" style="text-align: justify;">Fortalecer una Familia es prevenir cualquir
                            tipo de abuso hacia los niños y las niñas y evitar que crezcan en un orfanato.</p>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="owl-carousel owl-theme">
                        <?php foreach ($SOS['post'] as $postsos): ?>
                        <div class="item">
                            <div class="d-flex justify-content-center">
                                <img src="<?php echo RUTAPUBLIC."/public"."/".$postsos->folder.$postsos->src; ?>"
                                    id="imgemba"></div>
                            <div class="d-flex justify-content-center">
                                <p id="pemba" class="font-weight-bold"><?php echo $postsos->nombre ?></p>
                            </div>
                            <div style="position: relative;bottom: 15px;" class="d-flex justify-content-center">
                                <small id="smallemba"><?php echo $postsos->rol ?></small>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accordion -->
    <div class="container-fluid bg-gray" id="accordion-style-1">
        <div class="container" id="crianza" name="crianza">
            <section>
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-green mb-4 text-center">Crianza Positiva</h1>
                    </div>
                    <div class="col-10 mx-auto">
                        <div class="accordion" id="accordionExample">
                            <?php $cont = 0; foreach ($Acord['post'] as $postacord): ?>
                            <div class="card">
                                <div class="card-header" id="heading<?php echo $cont;?>">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse<?php echo $cont?>"
                                            aria-expanded="true" aria-controls="collapse<?php echo $cont;?>">
                                            <i class="fa fa-heart main"></i><i
                                                class="fa fa-angle-double-right mr-3 main"></i><?php echo $postacord->titulo ?></button>
                                    </h5>
                                </div>

                                <div id="collapse<?php echo $cont;?>" class="collapse fade"
                                    aria-labelledby="heading<?php echo $cont;?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $postacord->contenido; ?>
                                        <?php 
                                                
                                                        $path = RUTAPUBLIC."/".$postacord->folder.$postacord->src;
                                                        $ext  = (new SplFileInfo($path))->getExtension();
                                                        if($ext == "jpg" or $ext == "png" or $ext == "jpeg" or $ext == "jiff" or $ext == "gif" or $ext == "PNG" or $ext == "JPG" or $ext == "webp"){
                                                            echo "<a href='$path' data-toggle='modal' dismiss='modal' data-backdrop='false' data-target='#pdf' data-whatever='$path'><img src=".RUTAPUBLIC."/public/img/imagen.jpg"." style='width:50px;'></a>";
                                                        }
                                                        else if($ext == "pdf" or $ext == "PDF"){
                                                            echo "<a href='$path' data-toggle='modal' dismiss='modal' data-backdrop='false' data-target='#pdf' data-whatever='$path'><img src=".RUTAPUBLIC."/public/img/PDF_file_icon.svg"." style='width:50px;'></a>";
                                                        }
                                                        else if($ext !== ""){
                                                        }
                                                        else{
                                                        }
                                                    ?>
                        </div>
                    </div>
                </div>
                <?php $cont++ ?>
                <?php endforeach; ?>

        </div>
    </div>
    </div>
    </section>
    </div>
    </div>
    <!-- .// Accordion -->

    <div class="container-fluid oso" id="osofin">
        <div class="row" id="ositorow">
            <div class="col-md-12 d-flex justify-content-center">
                <img src="<?php echo RUTAPUBLIC ?>/public/img/osofinal.JPG" id="osofinal">
                <div class="col-md-12 col-sm-12 pt-4 d-flex justify-content-center align-items-end">
                    <h1 id="h1oso">La mascarilla no nos callará</h1>
                </div>

            </div>
        </div>
        <div class="row" id="rowosotwo">
            <div class="col-lg-12 d-flex justify-content-center mb-3">
                <a href="https://www.aldeasinfantiles.org.gt/" target="_blank"><button type="button" id="arowtwo"
                        class="btn btn-lg btn-block">Quiero saber más</button></a>
            </div>
        </div>
    </div>



    <div class="container-fluid fixed-bottom d-flex justify-content-center" id="fix">
        <h2 id="#donar" class="font-weight-bold pt-3" style="color:white;">¡Donar ahora!</h2>
    </div>

    <!--iframe edit-->
    <div class="modal fade" id="pdf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="width: auto;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vista previa del archivo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe id="iframePDF" src="" style='width:100vh;height:100vh'></iframe>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    <!--Iframe modal-->                        

    <?php require RUTAAPP . '/vistas/includes/footer.php'; ?>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v7.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
    <?php foreach ($mess['post'] as $messenger): ?>
    <div class="fb-customerchat" attribution=setup_tool page_id="<?php echo $messenger->page ?>"
        theme_color="<?php echo $messenger->color ?>" logged_in_greeting="<?php echo $messenger->messageL ?>"
        logged_out_greeting="<?php echo $messenger->messageO ?>">
    </div>
    <?php endforeach; ?>
</body>

</html>
<script src="<?php echo RUTAPUBLIC ?>/public/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/js/load.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/73f075235b.js" crossorigin="anonymous"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/animate-load/jquery/jquery.min.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/animate-load/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/animate-load/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/animate-load/php-email-form/validate.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/animate-load/venobox/venobox.min.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/animate-load/waypoints/jquery.waypoints.min.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/animate-load/counterup/counterup.min.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/js/owl.carousel.min.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/animate-load/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/animate-load/aos/aos.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/js/main.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/js/search-modal.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/js/jquery.dataTables.min.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/js/shortcut.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/js/indicators.js"></script>


<script>
$('.oso').css('cursor', 'pointer');
$(".oso").click(function() {
    url = "<?php echo RUTAPUBLIC; ?>/sos/Donar";
    $(location).attr('href', url);

});

$('#fix').css('cursor', 'pointer');
$("#fix").click(function() {
    url = "<?php echo RUTAPUBLIC; ?>/sos/Donar";
    $(location).attr('href', url);

});

$('#pdf').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('#iframePDF').attr("src",recipient)
            });
</script>
<script>
$('.owl-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    center: true,
    margin: 10,
    nav: false,
    autoWidth: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false,
            loop: true
        },
        600: {
            items: 3,
            nav: false,
            loop: true
        },
        1000: {
            items: 4,
            nav: false,
            loop: true
        },
    }
});
var pathname = window.location.pathname;
if(pathname == "/")
{
history.replaceState(null, null, 'sos/index');    
}

</script>

</body>

</html>