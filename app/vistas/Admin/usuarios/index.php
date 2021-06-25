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
                        <h2 class="title-1 m-b-25">Administrar Usuarios</h2>
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 m-t-30">

                            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                <div class="bg-overlay bg-overlay--blue"></div>
                                <h3>
                                    <i class="fas fa-users"></i>Usuarios activos de Aldeas Infantiles
                                    SOS</h3>
                                <button class="au-btn-plus" data-toggle="modal" dismiss="modal" data-backdrop="false"
                                    data-target="#createmodaluser">
                                    <i class="zmdi zmdi-plus"></i>
                                </button>
                            </div>
                            <div class="row">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Nombre de usuario</th>
                                                <th class="text-left">Nombre</th>
                                                <th class="text-left">Correo</th>
                                                <th class="text-left">Contraseña</th>
                                                <th class="text-left">Perfil</th>
                                                <th class="text-left">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php if($pre == 0 ):?>
                                            <tr>
                                                <td>nada que mostrar</td>
                                                <td>nada que mostrar</td>
                                                <td>nada que mostrar</td>
                                                <td>nada que mostrar</td>
                                                <td>nada que mostrar</td>
                                                <td>nada que mostrar</td>
                                            </tr>
                                            <?php else:?>
                                            <?php foreach ($pre['post'] as $uwu): ?>
                                            <tr>
                                                <td class="align-middle text-center"><?php echo $uwu->NombreUsuario;?></td>
                                                <td><?php echo $uwu->Nombre." ".$uwu->Apellido;?></td>
                                                <td><?php echo $uwu->Correo;?></td>
                                                <td style="max-width: 250px;" class="text-truncate align-middle"><?php echo $uwu->pass;?></td>
                                                <td>
                                                    <?php 
                                                    
                                                            $path = RUTAPUBLIC."/"."public/admin/Profile/".$uwu->img;
                                                            $ext  = (new SplFileInfo($path))->getExtension();
                                                            if($ext == "jpg" or $ext == "png" or $ext == "jpeg" or $ext == "jiff" or $ext == "gif" or $ext == "PNG" or $ext == "JPG" or $ext == "webp"){
                                                                echo "<a href='$path' data-toggle='modal' dismiss='modal' data-backdrop='false' data-target='#pdf' data-whatever='$path'><img src=".RUTAPUBLIC."/public/img/imagen.jpg"." style='width:50px;'></a>";
                                                            }
                                                            else if($ext !== ""){
                                                                echo "extencion invalida";
                                                            }
                                                            else{
                                                                echo "nada por aqui :(";
                                                            }
                                                        ?>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="table-data-feature">
                                                        <button class="item edituser" data-placement="top"
                                                            title="Editar" data-toggle="modal" dismiss="modal"
                                                            data-backdrop="false" id="editaruser"
                                                            data-whatever="<?php echo $uwu->id?>"
                                                            data-target="#editmodaluser">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item deleteuser" data-placement="top"
                                                            title="Eliminar" data-toggle="modal" dismiss="modal"
                                                            data-backdrop="false" id="eliminaruser"
                                                            data-whatever="<?php echo $uwu->id?>"
                                                            data-target="#deletemodaluser">
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


    <!--create edit-->
    <div class="modal fade" id="createmodaluser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo RUTAPUBLIC ?>/Admin/newuser" method="POST" autocomplete="off"
                        enctype="multipart/form-data">
                        <div class="row form-group">
                        <div class="col-md-12 d-flex justify-content-center">
                                <label for="email-input" id="label" class="form-control-label">Perfil demo</label>
                            </div>
                            <div class="col-12 col-md-9 m-l-60">
                                <img src="<?php echo RUTAPUBLIC ?>/public/imagenes/demoimg.jpg" id="imagencreate"
                                    name="image" class="form-control" alt="">
                                <small class="help-block form-text">Preview de imágen</small>
                                <div class="progress mb-2">
                                    <div class="div" id="progre">
                                        <input type="text" class="form-control" aria-describedby="fileHelp"
                                            placeholder="no se ha cargado una imagen..." id="namefile2"
                                            readonly="readonly" name="ruta">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div role="button" id="cargar" class="btn btn-primary mr-2 m-l-60 mt-3 ">
                                    <i class="fa fa-search"></i> Buscar archivos
                                    <input type="file" id="preview2" title="Haga clic para agregar archivos" required
                                        name="imagen" class="file-path validate">
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 row form-group">
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Nombre del
                                    usuario</label>
                                <input type="text" class="form-control" placeholder="Ej: Riven" id="verficaruser" name="nick" minlength="1" maxlength="80"
                                    required>
                                    <small>¡Alerta! El nombre de usuario no debe existir previamente</small>
                            </div>
                            <div class="mt-2 col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Nombres</label>
                                <input type="text" class="form-control" placeholder="Ej: Mario Fernando" minlength="1" maxlength="80"
                                    name="nombre" required>
                            </div>
                        </div>
                        <div class="mt-2 row form-group">
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Apellidos</label>
                                <input type="text" class="form-control" placeholder="Ej: Rodriguez" name="apellidos" minlength="1" maxlength="80"
                                    required>
                            </div>
                            <div class="mt-2 col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Correo</label>
                                <input type="text" class="form-control" placeholder="Ej: admin@gmail.com" name="correo" minlength="1" maxlength="80" required>
                                    <small>¡Alerta! El correo no debe existir previamente</small>
                            </div>
                        </div>    
                        <div class="mt-2 row form-group">
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Contraseña</label>
                                <input type="password" autocomplete="on"  class="form-control" placeholder="*********" name="pass"
                                    required>
                            </div>
                        </div>                                  
                        <div class="form-row mb-2">
                            <div class="col-md-12 mt-3 d-flex justify-content-center">
                                <button type="submit" name="enviar" id="versub" class="btn btn-primary btn-lg">Agregar
                                    usuario</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    <!--create modal-->

    <!--modal edit-->
    <div class="modal fade" id="editmodaluser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar usuario Id:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo RUTAPUBLIC ?>/Admin/updateuser" method="POST" autocomplete="off"
                        enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col col-md-3" hidden>
                                <input type="text" id="text-id" name="id" placeholder="Ingrese el nombre del evento"
                                    name="evento" class="form-control">
                                <input type="text" id="rutapasadauser" name="rutapasada" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 d-flex justify-content-center">
                                <label for="email-input" id="label" class="form-control-label">Imágen Actual</label>
                            </div>
                            <div class="col-12 col-md-9 m-l-60">
                                <img src="" id="imagenedit" name="image" class="form-control" alt="">
                                <small class="help-block form-text">Preview de imágen</small>
                                <div class="progress mb-2">
                                    <div class="div" id="progre">
                                        <input type="text" class="form-control" aria-describedby="fileHelp"
                                            placeholder="no se ha cargado una imagen..." id="namefile"
                                            readonly="readonly" name="ruta">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div role="button" id="cargar" class="btn btn-primary mr-2 m-l-60 mt-3 ">
                                    <i class="fa fa-search"></i> Buscar archivos
                                    <input type="file" id="preview" title="Haga clic para agregar archivos"
                                        name="imagen" class="file-path validate">
                                </div>
                            </div>

                        </div>

                        <div class="mt-2 row form-group">
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Nombre del
                                    usuario</label>
                                <input type="text" class="form-control" placeholder="Ej: Riven" id="user" name="nick" minlength="1" maxlength="80"
                                    required>
                                    <small>¡Alerta! El nombre de usuario no debe existir previamente</small>
                            </div>
                            <div class="mt-2 col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Nombres</label>
                                <input type="text" class="form-control" placeholder="Ej: Mario Fernando" id="nom" minlength="1" maxlength="80"
                                    name="nombre" required>
                            </div>
                        </div>
                        <div class="mt-2 row form-group">
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Apellidos</label>
                                <input type="text" class="form-control" placeholder="Ej: Rodriguez" id="ape" name="apellidos" minlength="1" maxlength="80"
                                    required>
                            </div>
                            <div class="mt-2 col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Correo</label>
                                <input type="text" class="form-control" placeholder="Ej: admin@gmail.com" id="correoed" minlength="1" maxlength="80"
                                    name="correo" required>
                                    <small>¡Alerta! El correo no debe existir previamente</small>
                            </div>
                        </div>    
                        <div class="mt-2 row form-group">
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Contraseña</label>
                                <input type="password" autocomplete="on" value="<?php echo $_SESSION['pass'][5]?>" class="form-control" placeholder="*********" id="" name="pass"
                                    required>
                            </div>
                        </div>    
                        <div class="form-row mb-2">
                            <div class="col-md-12 mt-3 d-flex justify-content-center">
                                <button type="submit" name="enviar" id="sub" class="btn btn-primary btn-lg">Editar
                                    usuario</button>
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
    <div class="modal fade" id="deletemodaluser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Link Id:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo RUTAPUBLIC; ?>/Admin/deluser" method="POST" autocomplete="off">
                        <div class="row form-group">
                            <div class="col col-md-3" hidden>
                                <input type="text" id="id-del" name="id" placeholder="Ingrese el nombre del evento"
                                    name="evento" class="form-control">
                                <input type="text" id="rutapasadadelete" name="rutapasada" class="form-control">
                            </div>

                        </div>
                        <p id="error">¡No puedes deshacer esto!</p> 
                        <div class="card text-white bg-warning mt-3 p-2" >
                            <p id="textodel">Si aceptas todos los datos relaciones a esto desapareceran... ¿Continuar?</p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" id="sep" class="btn btn-success">¡Si!</button>
                            <button type="button" id="close" data-dismiss="modal" aria-label="Close"
                                class="btn btn-danger ml-3">Nope...</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--delete modal-->

    <!--iframe edit-->
    <div class="modal fade" id="pdf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="width: auto;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vista previa del Perfil</h5>
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

    <?php require RUTAAPP . '/vistas/includes/footeradmin.php'; ?>      