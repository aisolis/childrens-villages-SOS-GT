<!doctype html>
<html lang="en">

<head>
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
  <meta charset="utf-8">
  <?php foreach ($pre['post'] as $uwu): ?>
    <meta name="description" content="<?php echo $uwu->descripcion ?>">
    <meta name="keywords" content="<?php echo $uwu->keywords ?>">
    <meta name="author" content="<?php echo $uwu->author ?>">
    <?php endforeach; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="icon" href="<?php echo RUTAPUBLIC ?>/public/img/icono.png">
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
  <link href="<?php echo RUTAPUBLIC ?>/public/css/style.css" rel="stylesheet">
  <title>Soy tu voz</title>


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

  <section id="heroC">


    <!--FORM-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5">

        </div>
        <div class="col-md-7">

          <!--HEADER-->
          <div id="cabecera">
            <div class="titulo">
              <p>La mascarilla no nos callará</p>
            </div>
            <div class="subtittle">
              <p class="bluenormal">En lo que va del <span>2020</span></p>
              <p class="bluenormal" style="bottom:36px">Los indices de violencia</p>
              <p class="bluenormal" style="bottom:51px">han <span>aumentado un 40%</span></p>
            </div>
          </div>

          <!--HEADER-->
        </div>
      </div>
      
      
      <!--FORM-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">

          </div>

          <div class="col-md-7" id="form">  
              <div class="container d-flex justify-content-center">
                  <div class="row">
                      <div id="top" class="m-0 col-md-12 d-flex  text-center justify-content-center">
                          <p id="headerForm" class=" p-0 font-weight-bold">Gracias por ayudarnos.</p>
                    </div>
                    <div class="m-0 col-md-12 d-flex  text-center justify-content-center">
                          <p id="headerForm" class="font-weight-bold"><span id="black-text" class="font-weight-bold">LLena nuestro formulario y nos contactaremos contigo.</span></p>
                    </div>
                    <div id="bot" class="m-0 col-md-12 d-flex text-center justify-content-center">
                          <a id="tarjeta" href="https://yomeuno.com/guatemala/organizaciones/aldeas-infantiles-sos" target="_blank">Realizar una donación por tarjeta</a>
                    </div>
                  </div>
              </div>
            
           <form id="form1" action="<?php echo RUTAPUBLIC ?>/SOS/UploadContacto" method="POST" autocomplete="off" class="needs-validation" novalidate>
              <div class="form-row mb-2">
                <div class="col-md-6">
                  <!--Individual-->
                  <select class="form-control" id="empresa" name="Individual">
                      <option>Individual</option>
                      <option>Empresa</option>
                   </select>
                  <div class="valid-feedback">¡Gracias!</div>
                  <div class="invalid-feedback" data-validate="La opcion es necesaria">Complete el campo por favor.
                  </div>
                </div>

                <div class="col-md-6">
                  <!--Nombre-->
                  <input name="Nombre" type="text" class="form-control" id="Nombre" minlength="15" maxlength="70"
                    placeholder="Nombre del Donante" value="" onkeypress="return soloLetras(event)" id="miInput"
                    required>
                  <div class="valid-feedback">¡Gracias!</div>
                  <div class="invalid-feedback" data-validate="La opcion es necesaria">Complete el campo por favor.
                  </div>
                </div>
              </div>

              <div class="form-row mb-2">
                <div class="col-md-6">
                  <!--celular-->
                  <input name="celular" type="text" class="form-control" id="celular" minlength="8" maxlength="8"
                    placeholder="Celular" value="" onkeypress="return soloNumeros(event)" id="miInput" required>
                  <div class="valid-feedback">¡Gracias!</div>
                  <div class="invalid-feedback" data-validate="La opcion es necesaria">El campo debe tener 8 caracteres.
                  </div>
                </div>

                <div class="col-md-6">
                  <!--correo-->
                  <input name="correo" type="email" class="form-control" id="correo" minlength="15" maxlength="70"
                    placeholder="Correo Electrónico" value="" id="miInput"
                    required>
                  <div class="valid-feedback" id="emailOK">¡Gracias!</div>
                  <div class="invalid-feedback" data-validate="La opcion es necesaria">Campo vacio o formato incorrecto.
                  </div>
                </div>
              </div>

              <div class="form-row mb-2">
                <div class="col-md-6">
                  <!--tipo-->
                  <select class="form-control" id="combo" name="tipo">
                      <option value="destroyy">Ayuda Recurrente</option>
                      <option value="destroy">Donacion unica</option>
                      <option value="tooglein" name="tooglein">Bingo</option>
                   </select>
                  <div class="valid-feedback">¡Gracias!</div>
                  <div class="invalid-feedback" data-validate="La opcion es necesaria">Complete el campo por favor.
                  </div>
                </div>

                <div class="col-md-6" id="tooglen">
                  <!--donacion-->
                  <input name="donacion" type="text" class="form-control" id="donaciontoggle" minlength="2" maxlength="4"
                    placeholder="Cantidad a donar desde Q.30" onkeypress="return soloNumeros(event)" required>
                  <div class="valid-feedback">¡Gracias!</div>
                  <div class="invalid-feedback" data-validate="La opcion es necesaria">La donación debe ser de minimo 2
                    digitos.</div>
                </div>
              </div>
              <div id="here"></div>
              <div class="form-row mb-2">
                <div class="col-md-12 mt-3 d-flex justify-content-center">
                  <button type="submit" name="enviar" id="help" class="btn btn-primary btn-lg">¡Quiero Ayudar!</button>
                </div>
              </div>
          </div>

          </form>
        </div>
      </div>
      
    <!--FORM-->
    </div>
    </div>
    </div>
  </section>

  <?php require RUTAAPP . '/vistas/includes/footer.php'; ?>  
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
<script src="<?php echo RUTAPUBLIC ?>/public/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/js/load.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
  integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/73f075235b.js" crossorigin="anonymous"></script>
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
<script src="<?php echo RUTAPUBLIC ?>/public/js/main.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/js/jquery.dataTables.min.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/js/shortcut.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/js/indicators.js"></script>
<script src="<?php echo RUTAPUBLIC ?>/public/js/validaciones.js"></script>

<script>
    $(document).ready(function(){
      $('#combo').change(function(){           
        var x = 0;  
        var ciudad = $(this).val()        
        if(ciudad == "tooglein"){
          $('#donaciontoggle').remove();
          $('#tooglen').append('<select class="form-control" id="new" name="donacion"><?php for($i = 1; $i < 12; $i++){ if ($i<2){$valor = $i*35; echo "<option>".$i." inscripcion Q.".$valor."</option>";}else if($i<11){$valor = $i*35; echo "<option>".$i." inscripciones Q.".$valor."</option>";}else if($i>10){$otro="Otro"; echo "<option value=".$otro.">Otro</option>";}} ?></select>');

          $('#new').change(function(){           
          var uwu = $(this).val()        
          if(uwu == "Otro"){
            $('#here').append('<div class="form-row mb-2" id="new2"><div class="col-md-6"><input type="text" name="openyoureyes" value="1" style="display:none"></div><div class="col-md-6"><input name="donacionOtro" type="text" class="form-control" id="donaciontoggle" minlength="2" maxlength="4"placeholder="Escriba la cantidad de inscripciones que desee comprar" value="" onkeypress="return soloNumeros(event)" required><div class="valid-feedback">¡Gracias!</div><div class="valid-feedback" id="emailOK">¡Gracias!</div><div class="invalid-feedback" data-validate="La opcion es necesaria">Campo vacio o formato incorrecto.</div></div></div>');
          }
          });
        }
        else if(ciudad == "destroyy"){
          $('#new').remove();
          $('#new2').remove();
          if($('#donaciontoggle').length > 0){
           
          }
          else{
               $('#tooglen').append('<input name="donacion" type="text" class="form-control" id="donaciontoggle" minlength="2" maxlength="4"placeholder="Cantidad a donar desde Q.30" value="" onkeypress="return soloNumeros(event)" required>');
          }
          
        } 
        else if(ciudad == "destroy"){
          $('#new').remove();
          $('#new2').remove();
          if($('#donaciontoggle').length > 0){
           
          }
          else{
               $('#tooglen').append('<input name="donacion" type="text" class="form-control" id="donaciontoggle" minlength="2" maxlength="4"placeholder="Cantidad a donar desde Q.30" value="" onkeypress="return soloNumeros(event)" required>');
          }
        }
        });
    });
  </script>
</body>

</html>