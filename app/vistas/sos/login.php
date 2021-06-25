<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aldeas infantiles SOS Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo RUTAPUBLIC ?>/public/img/icono.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo RUTAPUBLIC ?>/public/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo RUTAPUBLIC ?>/public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo RUTAPUBLIC ?>/public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo RUTAPUBLIC ?>/public/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo RUTAPUBLIC ?>/public/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo RUTAPUBLIC ?>/public/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo RUTAPUBLIC ?>/public/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo RUTAPUBLIC ?>/public/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo RUTAPUBLIC ?>/public/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo RUTAPUBLIC ?>/public/css/util2.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTAPUBLIC ?>/public/css/main2.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('<?php echo RUTAPUBLIC ?>/public/imagenes/fondo.jpeg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="<?php echo RUTAPUBLIC ?>/sos/iniciarSesion" method="post" autocomplete="off">
					<div class="p-l-155 p-b-20">
						<img src="<?php echo RUTAPUBLIC ?>/public/img/icono.png"></img>
					</div>
					<span class="login100-form-title p-b-59 p-l-40">
						Aldeas Infantiles
					</span>

					<div class="wrap-input100 validate-input" data-validate="Ingrese su usuario">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="correo" placeholder="Usuario">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ups, la contraseña es vital">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn d-flex justify-content-center">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Ingresar
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="<?php echo RUTAPUBLIC ?>/public/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo RUTAPUBLIC ?>/public/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo RUTAPUBLIC ?>/public/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo RUTAPUBLIC ?>/public/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo RUTAPUBLIC ?>/public/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo RUTAPUBLIC ?>/public/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo RUTAPUBLIC ?>/public/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo RUTAPUBLIC ?>/public/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo RUTAPUBLIC ?>/public/js/mainuwu.js"></script>

</body>
</html>