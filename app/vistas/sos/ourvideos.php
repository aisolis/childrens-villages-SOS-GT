<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php foreach ($Analy['post'] as $uwu): ?>
      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $uwu->uaCode;?>"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);} 
          gtag('js', new Date());
        
          gtag('config', '<?php echo $uwu->uaCode;?>');
        </script>
        <?php endforeach; ?>
    <?php foreach ($pre['post'] as $uwu): ?>
    <meta name="description" content="<?php echo $uwu->descripcion ?>">
    <meta name="keywords" content="<?php echo $uwu->keywords ?>">
    <meta name="author" content="<?php echo $uwu->author ?>">
    <?php endforeach; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo RUTAPUBLIC ?>/public/img/icono.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" id="link" href="<?php echo RUTAPUBLIC ?>/public/css/loader-style.css">

    <link href="<?php echo RUTAPUBLIC ?>/public/animate-load/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo RUTAPUBLIC ?>/public/animate-load/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo RUTAPUBLIC ?>/public/animate-load/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?php echo RUTAPUBLIC ?>/public/animate-load/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo RUTAPUBLIC ?>/public/animate-load/venobox/venobox.css" rel="stylesheet">
    <link href="<?php echo RUTAPUBLIC ?>/public/animate-load/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo RUTAPUBLIC ?>/public/animate-load/aos/aos.css" rel="stylesheet">
    
    <link href="<?php echo RUTAPUBLIC ?>/public/css/style.css" rel="stylesheet">
    <link href="<?php echo RUTAPUBLIC ?>/public/css/style-n.css" rel="stylesheet">
    <link href="<?php echo RUTAPUBLIC ?>/public/css/style-banners.css" rel="stylesheet">
    <title>Aldeas Infantiles SOS</title>
</head>
<style>
    #footer{
        margin-bottom: 0px;
    }
</style>
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

       <!-- ======= Header ======= -->
       <header id="header" class="fixed-top preloder">
    <div class="container-fluid">
        <nav class="nav-menu d-none d-lg-block">  
            <div class="row">
                <div class="col-md-2 d-flex align-items-center">
                    <a href="<?php echo RUTAPUBLIC; ?>/sos/index"  class=""><img src="<?php echo RUTAPUBLIC ?>/public/img/aldeas.png"height="70px" alt=""></a>
                </div>
                <div class="col-md-1 d-flex align-items-center">
                </div>
                <div class="col-md-2 d-flex align-items-center">
                    <li style="list-style: none;"><a href="<?php echo RUTAPUBLIC ?>/#crianza">Crianza Positiva</a>
                </div>
                <div class="col-md-2 d-flex align-items-center">
                    <li style="list-style: none;"><a href="<?php echo RUTAPUBLIC ?>/#embajadores">Embajadores SOS</a>
                </div>
                <div class="col-md-2 d-flex align-items-center">
                    <li class="drop-down" style="  list-style: none;"><a href="">Donativo</a>
                     <ul style="margin: 0;padding: 0;list-style: none;">
                        <li><a href="<?php echo RUTAPUBLIC ?>/#Donativos">Donativo Unico</a></li>
                        <li><a href="<?php echo RUTAPUBLIC ?>/#Donativos">Ayuda Recurrente</a></li>
                        <li><a href="<?php echo RUTAPUBLIC ?>/#Donativos">Bingo</a></li>
                    <ul>
                </div>
                <div class="col-md-2 d-flex align-items-start">
                   <a href="<?php echo RUTAPUBLIC ?>/index"> <img src="<?php echo RUTAPUBLIC ?>/public/img/logovoz.png" height="70px"></a>
                </div>
               
            
            </div> 
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v7.0" nonce="ghFFTBss"></script>

    <!-- ======= Banner ======= -->
    <section id="preguntas-banner" class="preguntas-banner preloder">
        <div class="container">
        </div>
    </section><!-- End Banner  -->


      <main id="main">
            <section class="breadcrumbs preloder">
              <div class="container">
              </div>
            </section>
              <section class="blog preloder" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 entries preloder"> <!-- Todo el contenido -->
                            <div class="entry">
                                <div class="container">
                                  <main>
                                    <div style="height: 10px; background-color:#00AFF0;"></div>
                                    <center>
                                    <img class="img-fluid" src="img/icono1.jpg" alt="">
                                        <h3 style="color:#00AFF0">Nuestros Videos mas recientes</h3>
                                    </center>
                                    <div style="height: 10px; background-color:#00AFF0 ; "></div>
                                </main>
                                <br>
                                <p >A continuación podras observar los videos mas recientes que tenemos en 
                                  <strong>Aldeas Infantiles SOS Guatemala.</strong> </p>
                                  <hr>
                                  <section class="why-us section-bg p-0" id="video" data-aos="fade-up" date-aos-delay="200">
                                   <div class="container" name="embajadores" id="embajadores">
                                            <div class="row">
                                            <?php foreach ($Vid['post'] as $video): ?>
                                              <div class="col-lg-6 video-box">
                                                 <img src="<?php echo RUTAPUBLIC."/public"."/".$video->folder.$video->src; ?>" class="img-fluid" alt="">
                                                 <a href="<?php echo $video->Urla ?>" class="venobox play-btn mb-4 vbox-item" data-vbtype="video" data-autoplay="true"></a>
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                          </div>
                                          </section>
                                    </div>  
                            </div>
                        </div>
      
                        <div class="col-lg-4 preloder"> <!-- Toda la publicidad --> 
                            <div class="sidebar">
                                <a class="twitter-timeline" data-lang="es" data-width="300" data-height="1000" href="https://twitter.com/AISOSGuatemala?s=20">Tweets Por Aldeas Infantiles SOS</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                <div class="fb-page" data-href="https://www.facebook.com/AISOSGT" data-tabs="timeline" data-width="300" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Dideduc-Guatemala-SUR-430710230300879/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Dideduc-Guatemala-SUR-430710230300879/">Dideduc Guatemala SUR</a></blockquote></div>
                            </div>
                      

                        <div>
                    </div>
                </div>
            </section>
      </main>

      <?php require RUTAAPP . '/vistas/includes/footer.php'; ?>  

      <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    
    <script src="https://kit.fontawesome.com/73f075235b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="<?php echo RUTAPUBLIC ?>/public/animate-load/jquery/jquery.min.js"></script>
    <script src="<?php echo RUTAPUBLIC ?>/public/animate-load/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo RUTAPUBLIC ?>/public/animate-load/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?php echo RUTAPUBLIC ?>/public/animate-load/php-email-form/validate.js"></script>
    <script src="<?php echo RUTAPUBLIC ?>/public/animate-load/venobox/venobox.min.js"></script>
    <script src="<?php echo RUTAPUBLIC ?>/public/animate-load/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?php echo RUTAPUBLIC ?>/public/animate-load/counterup/counterup.min.js"></script>
    <script src="<?php echo RUTAPUBLIC ?>/public/animate-load/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo RUTAPUBLIC ?>/public/animate-load/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo RUTAPUBLIC ?>/public/animate-load/aos/aos.js"></script>

    <script src="<?php echo RUTAPUBLIC ?>/public/js/loader-script.js"></script>
    <script src="<?php echo RUTAPUBLIC ?>/public/js/main.js"></script>
    <script src="<?php echo RUTAPUBLIC ?>/public/js/main-n.js"></script>
    <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <?php foreach ($mess['post'] as $messenger): ?>
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="<?php echo $messenger->page ?>"
        theme_color="<?php echo $messenger->color ?>"
        logged_in_greeting="<?php echo $messenger->messageL ?>"
        logged_out_greeting="<?php echo $messenger->messageO ?>">
        </div> 
    <?php endforeach; ?>
</body>
</html>