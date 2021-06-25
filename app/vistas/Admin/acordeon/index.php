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
                        <h2 class="title-1 m-b-25">Administrar Acordeones</h2>
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 m-t-30">

                            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                <div class="bg-overlay bg-overlay--blue"></div>
                                <h3>
                                    <i class="fas fa-bars"></i>Elementos del acordeón activos de Aldeas Infantiles
                                    SOS</h3>
                                <button class="au-btn-plus" data-toggle="modal" dismiss="modal" data-backdrop="false"
                                    data-target="#createmodalacord">
                                    <i class="zmdi zmdi-plus"></i>
                                </button>
                            </div>
                            <div class="row">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th class="text-left">Titulo</th>
                                                <th class="text-left">Contenido</th>
                                                <th class="text-center">Archivo</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($Acord == 0 ):?>
                                            <tr>
                                                <td>nada que mostrar</td>
                                                <td>nada que mostrar</td>
                                                <td>nada que mostrar</td>
                                            </tr>
                                            <?php else:?>
                                            <?php foreach ($Acord['post'] as $uwu): ?>
                                            <tr>
                                                <td class="align-middle"><?php echo $uwu->titulo;?></td>
                                                <td style="max-width: 250px;" class="text-truncate align-middle">
                                                    <?php echo $uwu->contenido;?></td>
                                                <td class="text-center"><?php 
                                                
                                                        $path = RUTAPUBLIC."/".$uwu->folder.$uwu->src;
                                                        $ext  = (new SplFileInfo($path))->getExtension();
                                                        if($ext == "jpg" or $ext == "png" or $ext == "jpeg" or $ext == "jiff" or $ext == "gif" or $ext == "PNG" or $ext == "JPG" or $ext == "webp"){
                                                            echo "<a href='$path' data-toggle='modal' dismiss='modal' data-backdrop='false' data-target='#pdf' data-whatever='$path'><img src=".RUTAPUBLIC."/public/img/imagen.jpg"." style='width:50px;'></a>";
                                                        }
                                                        else if($ext == "pdf" or $ext == "PDF"){
                                                            echo "<a href='$path' data-toggle='modal' dismiss='modal' data-backdrop='false' data-target='#pdf' data-whatever='$path'><img src=".RUTAPUBLIC."/public/img/PDF_file_icon.svg"." style='width:50px;'></a>";
                                                        }
                                                        else if($ext !== ""){
                                                            echo "extencion invalida";
                                                        }
                                                        else{
                                                            echo "nada que mostrar :)";
                                                        }
                                                    ?>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="table-data-feature">
                                                        <button class="item editacord" data-placement="top"
                                                            title="Editar" data-toggle="modal" dismiss="modal"
                                                            data-backdrop="false" id="editarsos"
                                                            data-whatever="<?php echo $uwu->id?>"
                                                            data-target="#editmodalacord">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item deleteacord" data-placement="top"
                                                            title="Eliminar" data-toggle="modal" dismiss="modal"
                                                            data-backdrop="false" id="eliminarsos"
                                                            data-whatever="<?php echo $uwu->id?>"
                                                            data-target="#deletemodalacord">
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
                            <div class="col-12 mx-auto mb-5">
                                <h1 class="text-green mb-4 text-center">Vista de Acordeones</h1>
                            </div>
                            <div class="col-10 mx-auto mb-5">
                                <div class="accordion" id="accordionExample">
                                    <?php $cont = 0; foreach ($Acord['post'] as $postacord): ?>
                                    <div class="card" style="margin-bottom:0px!important;">
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
                                            aria-labelledby="heading<?php echo $cont;?>"
                                            data-parent="#accordionExample">
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
    <div class="modal fade" id="createmodalacord" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Acordeon</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo RUTAPUBLIC ?>/Admin/newacord" method="POST" autocomplete="off"
                        enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col-md-12 d-flex justify-content-center">
                                <label for="email-input" id="label" class="form-control-label">Imágen demo</label>
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
                                    <input type="file" id="preview3" title="Haga clic para agregar archivos"
                                        name="imagen" class="file-path validate preview3">
                                </div>
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Titulo</label>
                                <input type="text" class="form-control" placeholder="Ej: Juntos salvamos a..." minlength="1" maxlength="50"
                                    id="titulocreate" name="titulo" required>
                            </div>
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label ">Contenido</label>
                                <input type="text" class="form-control" placeholder="Ej: Con nuestros esfuerzos..." minlength="1" maxlength="1000"
                                    id="contenidocreate" name="contenido" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Agregar al acordeón</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--create modal-->



    <!--modal edit-->
    <div class="modal fade" id="editmodalacord" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar acordeón Id:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo RUTAPUBLIC ?>/Admin/updateacord" method="POST" autocomplete="off"
                        enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col col-md-3" hidden>
                                <input type="text" id="text-id" name="id" placeholder="Ingrese el nombre del evento"
                                    name="evento" class="form-control">
                                <input type="text" id="rutapasadavid" name="rutapasada" class="form-control">
                                <input type="text" id="tounlink" name="unlink" class="form-control">
                            </div>

                            <div class="col-md-12 d-flex justify-content-center">
                                <label for="email-input" id="labelacord" class="form-control-label">Imágen
                                    Actual</label>
                            </div>
                            <div class="col-12 col-md-9 m-l-60">
                                <img src="" id="imagenedit" name="image" class="form-control" alt="">
                                <small class="help-block form-text">Preview de imágen</small>
                                <div class="progress mb-2">
                                    <div class="div" id="progre">
                                        <input type="text" class="form-control namefile2" aria-describedby="fileHelp"
                                            placeholder="no se ha cargado una imagen..." readonly="readonly"
                                            name="ruta">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div role="button" id="cargar" class="btn btn-primary mr-2 m-l-60 mt-3">
                                    <i class="fa fa-search"></i> Buscar archivos
                                    <input type="file" id="preview4" title="Haga clic para agregar archivos" style="width:37% !important"
                                        name="imagen" class="file-path validate">
                                </div>
                                <div role="button" id="deletearch" class="btn btn-danger mr-2 mt-3">
                                    <i class="fa fa-trash-alt"></i> Eliminar archivo
                                </div>
                            </div>
                            
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Titulo</label>
                                <input type="text" class="form-control" placeholder="Ej: Juntos salvamos a..." minlength="1" maxlength="50"
                                    id="tituloedit" name="titulo" required>
                            </div>
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Contenido</label>
                                <input type="text" class="form-control" placeholder="Ej: Con nuestros esfuerzos..." minlength="1" maxlength="1000"
                                    id="contenidoedit" name="contenido" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Editar acordeón</button>
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
    <div class="modal fade" id="deletemodalacord" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar acordeón Id:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo RUTAPUBLIC; ?>/Admin/delacord" method="POST" autocomplete="off">
                        <div class="row form-group">
                            <div class="col col-md-3" hidden>
                                <input type="text" id="text-id" name="id" placeholder="Ingrese el nombre del evento"
                                    name="evento" class="form-control">
                                <input type="text" id="rutaaeliminar" name="rutapasada" class="form-control">
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

    <?php require RUTAAPP . '/vistas/includes/footeradmin.php'; ?>