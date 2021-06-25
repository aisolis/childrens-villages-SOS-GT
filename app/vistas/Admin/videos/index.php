<?php require RUTAAPP . '/vistas/includes/headeradmin.php'; ?>

<body class="animsition">
    <div class="page-wrapper">
        <?php require RUTAAPP . '/vistas/includes/navbaradmin.php'; ?>

        <!-- PAGE CONTAINER-->
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30 ">

                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-25">Administrar Videos</h2>
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 m-t-30">

                            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                <div class="bg-overlay bg-overlay--blue"></div>
                                <h3>
                                    <i class="fas fa-forward"></i>Videos activos de Aldeas Infantiles SOS</h3>
                                <button class="au-btn-plus" data-toggle="modal" dismiss="modal" data-backdrop="false"
                                    data-target="#createmodalvid">
                                    <i class="zmdi zmdi-plus"></i>
                                </button>
                            </div>
                            <div class="row ml-2">
                                <?php if($Vid == 0 ):?>
                                <div class="d-flex justify-content-center">
                                    <h3>Nada que mostrar :c</h3>
                                </div>
                                <?php else:?>
                                <?php foreach ($Vid['post'] as $uwu): ?>
                                <div class="col-md-4 m-t-25" style="max-width: 32.333333% !important;">
                                    <div class="card">
                                        <img src="<?php echo RUTAPUBLIC."/public"."/".$uwu->folder.$uwu->src; ?>"
                                            style="height:150px" class="img-fluid" alt="">
                                        <a href="<?php echo $uwu->Urla;?>" class="venobox play-btn mb-4"
                                            data-vbtype="video" data-autoplay="true"></a>
                                        <div class="card-body">
                                            <button type="button" class="btn btn-warning ml-2 editvid"
                                                data-toggle="modal" dismiss="modal" data-backdrop="false" id="editarvid"
                                                data-whatever="<?php echo $uwu->id?>" data-target="#editmodalvid">
                                                <i class="zmdi zmdi-edit"></i>&nbsp; Editar
                                            </button>
                                            <button type="button" class="btn btn-danger deletevid" data-toggle="modal"
                                                dismiss="modal" data-backdrop="false" id="eliminarvid"
                                                data-whatever="<?php echo $uwu->id?>" data-target="#deletemodalvid">
                                                <i class="zmdi zmdi-delete"></i>&nbsp; Eliminar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
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
    <div class="modal fade" id="createmodalvid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo RUTAPUBLIC ?>/Admin/newvid" method="POST" autocomplete="off"
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
                                    <input type="file" id="preview2" title="Haga clic para agregar archivos" required
                                        name="imagen" class="file-path validate">
                                </div>
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Url</label>
                                <input type="text" class="form-control" placeholder="https://youtube.com/" name="url" minlength="1" maxlength="80"
                                    required>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Agregar video</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--create modal-->



    <!--modal edit-->
    <div class="modal fade" id="editmodalvid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar video Id:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo RUTAPUBLIC ?>/Admin/updatevid" method="POST" autocomplete="off"
                        enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col col-md-3" hidden>
                                <input type="text" id="text-id" name="id" placeholder="Ingrese el nombre del evento"
                                    name="evento" class="form-control">
                                <input type="text" id="rutapasadavid" name="rutapasada" class="form-control">
                            </div>

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
                                        name="imagen" required class="file-path validate">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Url</label>
                                <input type="text" class="form-control" placeholder="https://youtube.com/" id="url" minlength="1" maxlength="80"
                                    name="url" required>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Editar video</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--edit modal-->

    <!--modal delete-->
    <div class="modal fade" id="deletemodalvid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar video Id:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo RUTAPUBLIC; ?>/Admin/delvid" method="POST" autocomplete="off">
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

    <?php require RUTAAPP . '/vistas/includes/footeradmin.php'; ?>