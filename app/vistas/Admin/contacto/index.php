<?php require RUTAAPP . '/vistas/includes/headeradmin.php'; ?>

<body class="animsition">
    <style>

    </style>
    <div class="page-wrapper">
        <?php require RUTAAPP . '/vistas/includes/navbaradmin.php'; ?>

        <!-- PAGE CONTAINER-->
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30 ">

                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-25">Administrar solicitudes de contacto</h2>
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 m-t-30">

                            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                <div class="bg-overlay bg-overlay--blue"></div>
                                <h3>
                                    <i class="fas fa-id-card"></i>Solicitudes de contacto de Aldeas Infantiles
                                    SOS</h3>
                            </div>
                            <div class="container">
      <div class="d-flex flex-wrap justify-content-between mt-3">
        <div class="num_rows">
		
				<div class="form-group">
				     	<!--		Show Numbers Of Rows 		-->
				     	<p>Filtrar:</p>
			 		<select class  ="form-control" name="state" id="maxRows">
						 
						 
						 <option value="10">10</option>
						 <option value="15">15</option>
						 <option value="20">20</option>
						 <option value="50">50</option>
						 <option value="70">70</option>
						 <option value="100">100</option>
            <option value="5000">Mostrar todas las filas</option>
						</select>
			 		
			  	</div>
        </div>
        <div class="tb_search">
            <p>Buscar entre todo:</p>
            <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Buscar..." class="form-control">
        </div>
      </div>
	  <div class="row">
		<div class="table-responsive table--no-card m-b-40">
			<table class="table table-borderless table-striped table-earning" id="table-id">
				<thead>
					<tr>
						<th class="text-left">Tipo</th>
						<th class="text-left">Nombre</th>
						<th class="text-left">celular</th>
						<th class="text-left">Correo</th>
						<th class="text-left">Donacion</th>
						<th class="text-right">Cantidad</th>
						<th>Estado</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php if($data == 0 ):?>
					<tr>
						<td>nada que mostrar</td>
						<td>nada que mostrar</td>
						<td>nada que mostrar</td>
						<td>nada que mostrar</td>
						<td>nada que mostrar</td>
						<td>nada que mostrar</td>
						<td>nada que mostrar</td>
						<td>nada que mostrar</td>
					</tr>
					<?php else:?>
					<?php foreach ($data['post'] as $uwu): ?>
					<tr>
						<?php if($uwu->state == "Pendiente"){$stabadge="badge badge-secondary"; $class="table-secondary";}else if($uwu->state == "En comunicación"){$stabadge="badge badge-info";$class="table-info";}else{$stabadge="badge badge-success"; $class="table-success";}?>
						<td class="<?php echo $class;?>"><?php echo $uwu->empresa;?></td>
						<td class="<?php echo $class;?>"><?php echo $uwu->nombre;?></td>
						<td class="<?php echo $class;?>"><?php echo $uwu->celular;?></td>
						<td class="text-right <?php echo $class;?>"><?php echo $uwu->correo;?>
						</td>
						<td class="text-center <?php echo $class;?>"><?php echo $uwu->tipo;?>
						</td>
						<td class="text-right <?php echo $class;?>">
							<?php if(is_numeric($uwu->cantidad) ){echo "Q.". number_format($uwu->cantidad);}else{echo $uwu->cantidad;}?>
						</td>
						<td class="text-center <?php echo $class;?>">
							<p class="<?php echo $stabadge?> font-weight-bold">
								<?php echo $uwu->state;?></p>
						</td>
						<td class="align-middle <?php echo $class;?>">
							<div class="table-data-feature">
								<button class="item" data-placement="top"
									title="enviar correo" data-toggle="modal" dismiss="modal"
									data-backdrop="false" id="sendmensaje"
									data-id="<?php echo $uwu->id?>"
									data-correo="<?php echo $uwu->correo?>"
									data-target=".bd-example-modal-lg">
									<i class="zmdi zmdi-mail-send"></i>
								</button>
								<button class="item editcon" data-placement="top" title="Editar"
									data-toggle="modal" dismiss="modal" data-backdrop="false"
									id="editarcon" data-whatever="<?php echo $uwu->id?>"
									data-target="#editmodalcon">
									<i class="zmdi zmdi-edit"></i>
								</button>
								<button class="item deletecon" data-placement="top"
									title="Eliminar" data-toggle="modal" dismiss="modal"
									data-backdrop="false" id="eliminarcon"
									data-whatever="<?php echo $uwu->id?>"
									data-target="#deletemodalcon">
									<i class="zmdi zmdi-delete"></i>
								</button>
							</div>
						</td>
					</tr>
					<?php endforeach; ?>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>

<!--		Start Pagination -->
			<div class='pagination-container'>
				<nav>
				  <ul class="pagination">
				   <!--	Here the JS Function Will Add the Rows -->
				  </ul>
				</nav>
			</div>
      <div class="rows_count">Mostrando 11 a 20 de 91 entradas</div>

</div> <!-- 		End of Container -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2020 Aldeas infantiles todos los derechos reservados. Versión 1.2</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
    </div>

    </div>


    <!--modal edit-->
    <div class="modal fade" id="editmodalcon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Solicitud Id:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo RUTAPUBLIC ?>/Admin/updatecon" method="POST" autocomplete="off"
                        enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col col-md-3" hidden>
                                <input type="text" id="text-id" name="id" placeholder="Ingrese el nombre del evento"
                                    name="evento" class="form-control">
                                <input type="text" id="rutapasadavid" name="rutapasada" class="form-control">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-md-6">
                                <!--Individual-->
                                <select class="form-control" id="empresa" name="Individual">
                                    <option>Individual</option>
                                    <option>Empresa</option>
                                </select>
                                <div class="valid-feedback">¡Gracias!</div>
                                <div class="invalid-feedback" data-validate="La opcion es necesaria">Complete el campo
                                    por favor.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!--Nombre-->
                                <input name="Nombre" type="text" class="form-control" id="Nombre" minlength="15"
                                    maxlength="70" placeholder="Nombre del Donante" value=""
                                    onkeypress="return soloLetras(event)" id="miInput" required>
                                <div class="valid-feedback">¡Gracias!</div>
                                <div class="invalid-feedback" data-validate="La opcion es necesaria">Complete el campo
                                    por favor.
                                </div>
                            </div>
                        </div>

                        <div class="form-row mb-2">
                            <div class="col-md-6">
                                <!--celular-->
                                <input name="celular" type="text" class="form-control" id="celular" minlength="8"
                                    maxlength="8" placeholder="Celular" value="" onkeypress="return soloNumeros(event)"
                                    id="miInput" required>
                                <div class="valid-feedback">¡Gracias!</div>
                                <div class="invalid-feedback" data-validate="La opcion es necesaria">El campo debe tener
                                    8 caracteres.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!--correo-->
                                <input name="correo" type="email" class="form-control" id="correo" minlength="15"
                                    maxlength="70" placeholder="Correo Electrónico" value=""
                                    onkeypress="return soloLetras(event)" id="miInput" required>
                                <div class="valid-feedback" id="emailOK">¡Gracias!</div>
                                <div class="invalid-feedback" data-validate="La opcion es necesaria">Campo vacio o
                                    formato incorrecto.
                                </div>
                            </div>
                        </div>

                        <div class="form-row mb-2">
                            <div class="col-md-6">
                                <!--tipo-->
                                <select class="form-control" id="combo" name="tipo">
                                    <option value="destroyy">Ayuda Recurrente</option>
                                    <option value="destroy">Donacion Unica</option>
                                    <option value="tooglein" name="tooglein">Bingo</option>
                                </select>
                                <div class="valid-feedback">¡Gracias!</div>
                                <div class="invalid-feedback" data-validate="La opcion es necesaria">Complete el campo
                                    por favor.
                                </div>
                            </div>

                            <div class="col-md-6" id="tooglen">
                                <!--donacion-->
                                <input name="donacion" type="text" class="form-control" id="donaciontoggle"
                                    minlength="2" maxlength="4" placeholder="Cantidad a donar desde Q.30"
                                    onkeypress="return soloNumeros(event)" required>
                                <div class="valid-feedback">¡Gracias!</div>
                                <div class="invalid-feedback" data-validate="La opcion es necesaria">La donación debe
                                    ser de minimo 2
                                    digitos.</div>
                            </div>
                        </div>
                        <div id="here"></div>
                        <div class="form-row mb-2">
                            <div class="col-md-6">
                                <!--donacion-->
                                <select class="form-control" name="state" id="estado">
                                    <option value="Pendiente">Pendiente</option>
                                    <option value="En comunicación">En comunicación</option>
                                    <option value="Completado">Completado</option>
                                </select>
                                <div class="valid-feedback">¡Gracias!</div>
                                <div class="invalid-feedback" data-validate="La opcion es necesaria">El estado es
                                    necesario</div>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-md-12 mt-3 d-flex justify-content-center">
                                <button type="submit" name="enviar" id="help" class="btn btn-primary btn-lg">Editar
                                    solicitud</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    <!--edit modal-->

    <!--modal delete-->
    <div class="modal fade" id="deletemodalcon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar solicitud Id:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo RUTAPUBLIC; ?>/Admin/delcon" method="POST" autocomplete="off">
                        <div class="row form-group">
                            <div class="col col-md-3" hidden>
                                <input type="text" id="text-id" name="id" placeholder="Ingrese el nombre del evento"
                                    name="evento" class="form-control">
                                <input type="text" id="rutapasadadelete" name="rutapasada" class="form-control">
                            </div>

                        </div>
                        ¡No puedes deshacer esto!
                        <div class="card text-white bg-warning mt-3 p-2">
                            Si aceptas todos los datos relaciones a esto desapareceran... ¿Continuar?
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">¡Si!</button>
                            <button type="button" data-dismiss="modal" aria-label="Close"
                                class="btn btn-danger ml-3">Nope...</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--delete modal-->

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enviar correo a solicitud Id:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                    <form action="<?php echo RUTAPUBLIC; ?>/Admin/send" method="POST" autocomplete="off">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" name="correoto" id="staticEmail">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">De:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" required id="correo" name="correode" placeholder="admin@admin.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Mensaje</label>
                        <div class="col-sm-10">
                            <textarea id='edit' name="mensaje" style="margin-top: 30px;"> <?php 
                            echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
                            <html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office' style='width:100%;font-family:arial, 'helvetica neue', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0'>
                             <head> 
                              <meta charset='UTF-8'> 
                              <meta content='width=device-width, initial-scale=1' name='viewport'> 
                              <meta name='x-apple-disable-message-reformatting'> 
                              <meta http-equiv='X-UA-Compatible' content='IE=edge'> 
                              <meta content='telephone=no' name='format-detection'> 
                              <title>Aldeas Infantiles</title> 
                              <style type='text/css'>
                            @media only screen and (max-width:600px) {p, ul li, ol li, a { font-size:14px!important; line-height:150%!important } h1 { font-size:28px!important; text-align:center; line-height:120%!important } h2 { font-size:20px!important; text-align:center; line-height:120%!important } h3 { font-size:18px!important; text-align:center; line-height:120%!important } h1 a { font-size:28px!important } h2 a { font-size:20px!important } h3 a { font-size:18px!important } .es-menu td a { font-size:12px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class='gmail-fix'] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button { font-size:13px!important; display:inline-block!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
                            #outlook a {
                                padding:0;
                            }
                            .ExternalClass {
                                width:100%;
                            }
                            .ExternalClass,
                            .ExternalClass p,
                            .ExternalClass span,
                            .ExternalClass font,
                            .ExternalClass td,
                            .ExternalClass div {
                                line-height:100%;
                            }
                            .es-button {
                                mso-style-priority:100!important;
                                text-decoration:none!important;
                            }
                            a[x-apple-data-detectors] {
                                color:inherit!important;
                                text-decoration:none!important;
                                font-size:inherit!important;
                                font-family:inherit!important;
                                font-weight:inherit!important;
                                line-height:inherit!important;
                            }
                            .es-desk-hidden {
                                display:none;
                                float:left;
                                overflow:hidden;
                                width:0;
                                max-height:0;
                                line-height:0;
                                mso-hide:all;
                            }
                            .es-button-border:hover {
                                border-color:transparent transparent transparent transparent!important;
                                background:transparent!important;
                                border-style:solid solid solid solid!important;
                            }
                            .es-button-border:hover a.es-button {
                                background:#ffd300!important;
                                border-color:#ffd300!important;
                            }
                            </style> 
                             </head> 
                             <body style='width:100%;font-family:arial, 'helvetica neue', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0'> 
                              <div class='es-wrapper-color' style='background-color:#FFFFFF'> 
                               <!--[if gte mso 9]>
                                        <v:background xmlns:v='urn:schemas-microsoft-com:vml' fill='t'>
                                            <v:fill type='tile' color='#ffffff'></v:fill>
                                        </v:background>
                                    <![endif]--> 
                               <table class='es-wrapper' width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top'> 
                                 <tr style='border-collapse:collapse'> 
                                  <td valign='top' style='padding:0;Margin:0'> 
                                   <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
                                     <tr style='border-collapse:collapse'> 
                                      <td class='es-info-area' align='center' style='padding:0;Margin:0'> 
                                       <table bgcolor='#ffffff' class='es-content-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='left' style='padding:0;Margin:0;padding-top:10px;padding-bottom:10px'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='center' valign='top' style='padding:0;Margin:0;width:600px'> 
                                               <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr style='border-collapse:collapse'> 
                                                  <td align='left' class='es-infoblock es-m-txt-c' style='padding:0;Margin:0;line-height:14px;font-size:12px;color:#CCCCCC'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:14px;color:#CCCCCC'>Put your preheader text here</p></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                       </table></td> 
                                     </tr> 
                                   </table> 
                                   <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
                                     <tr style='border-collapse:collapse'> 
                                      <td align='center' bgcolor='#ffffff' style='padding:0;Margin:0;background-color:#FFFFFF'> 
                                       <table bgcolor='#ffffff' class='es-content-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='left' style='padding:0;Margin:0'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='center' valign='top' style='padding:0;Margin:0;width:600px'> 
                                               <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr style='border-collapse:collapse'> 
                                                  <td align='center' style='padding:0;Margin:0;position:relative'><a target='_blank' href='https://www.aldeasinfantiles.org.gt/getmedia/815aa73f-880f-4dde-941b-bf0ee0032254/LOGOTIPO-EMPRESAS-FINAL-2018-01-(003)_3.jpg?width=917&height=801&ext=.jpg' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:14px;text-decoration:underline;color:#333333'><img class='adapt-img' src='https://hpadzo.stripocdn.email/content/guids/bannerImgGuid/images/63121598051390580.png' alt='Aldeas Infantiles SOS - Soy su voz' title='Aldeas Infantiles SOS - Soy su voz' width='100%' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></a></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='left' style='Margin:0;padding-bottom:10px;padding-top:20px;padding-left:20px;padding-right:20px;background-color:#F7F7F7' bgcolor='#f7f7f7'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='center' valign='top' style='padding:0;Margin:0;width:560px'> 
                                               <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr style='border-collapse:collapse'> 
                                                  <td align='center' style='padding:0;Margin:0'><h2 style='Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#333333'>Soy su voz - Contacto</h2></td> 
                                                 </tr> 
                                                 <tr style='border-collapse:collapse'> 
                                                  <td align='center' style='padding:0;Margin:0;padding-top:5px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:13px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:20px;color:#666666'><strong>¡Hola! recientemente haz rellenado nuestro formulario de contacto y estamos aquí para responderte, gracias por contribuir a los niños de Guatemala.</strong></p></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='left' style='Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px;background-color:#F2F2F8' bgcolor='#f2f2f8'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='left' style='padding:0;Margin:0;width:560px'> 
                                               <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr style='border-collapse:collapse'> 
                                                  <td align='left' style='padding:0;Margin:0;padding-top:10px;padding-left:15px;padding-right:15px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333'>coloca aqui tu mensaje</p></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='left' style='padding:0;Margin:0'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='center' valign='top' style='padding:0;Margin:0;width:600px'> 
                                               <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr style='border-collapse:collapse'> 
                                                  <td align='center' style='padding:0;Margin:0;font-size:0px'><img class='adapt-img' src='https://hpadzo.stripocdn.email/content/guids/CABINET_c9ebb83f223bb5eb64a2d2cee61452c1/images/51071598052146862.png' alt style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic' width='600' height='153'></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                       </table></td> 
                                     </tr> 
                                   </table></td> 
                                 </tr> 
                               </table> 
                              </div>  
                             </body>
                            </html>";
                            ?></textarea>
                        </div>
                    </div>

                        
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-info">¡Enviar!</button>
                            <button type="button" data-dismiss="modal" aria-label="Close"
                                class="btn btn-danger ml-3">Nope...</button>
                        </div>
                    </form>
                </div>
    </div>
  </div>
</div>
    <script>CKEDITOR.replace('mensaje')</script>
    <?php require RUTAAPP . '/vistas/includes/footeradmin.php'; ?>