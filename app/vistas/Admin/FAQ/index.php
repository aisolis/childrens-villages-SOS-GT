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
                        <h2 class="title-1 m-b-25">Administrar Acordeones FAQ</h2>
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 m-t-30">

                            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                <div class="bg-overlay bg-overlay--blue"></div>
                                <h3>
                                    <i class="fas fa-forward"></i>Elementos del acordeón FAQ activos de Aldeas
                                    Infantiles
                                    SOS</h3>
                                <button class="au-btn-plus" data-toggle="modal" dismiss="modal" data-backdrop="false"
                                    data-target="#createmodalfaq">
                                    <i class="zmdi zmdi-plus"></i>
                                </button>
                            </div>
                            <div class="row">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th class="text-left">Pregunta</th>
                                                <th class="text-left">Respuesta</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($pre == 0 ):?>
                                            <tr>
                                                <td>nada que mostrar</td>
                                                <td>nada que mostrar</td>
                                            </tr>
                                            <?php else:?>
                                            <?php foreach ($pre['post'] as $uwu): ?>
                                            <tr>
                                                <td class="align-middle"><?php echo $uwu->Pregunta;?></td>
                                                <td style="max-width: 250px;" class="text-truncate align-middle">
                                                    <?php echo $uwu->Respuesta;?></td>
                                                <td class="align-middle">
                                                    <div class="table-data-feature">
                                                        <button class="item editfaq" data-placement="top" title="Editar"
                                                            data-toggle="modal" dismiss="modal" data-backdrop="false"
                                                            id="editarfaw" data-whatever="<?php echo $uwu->id?>"
                                                            data-target="#editmodalfaq">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item deletefaq" data-placement="top"
                                                            title="Eliminar" data-toggle="modal" dismiss="modal"
                                                            data-backdrop="false" id="eliminarfaq"
                                                            data-whatever="<?php echo $uwu->id?>"
                                                            data-target="#deletemodalfaq">
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
                                <h1 class="text-green mb-4 text-center">Vista de Acordeones FAQ</h1>
                            </div>
                            <div class="col-10 mx-auto mb-5">
                                <div class="accordion" id="accordionExample">
                                    <?php $cont = 0; foreach ($pre['post'] as $postacord): ?>
                                    <div class="card" style="margin-bottom:0px!important;">
                                        <div class="card-header" id="heading<?php echo $cont;?>">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link btn-block text-left" type="button"
                                                    data-toggle="collapse" data-target="#collapse<?php echo $cont?>"
                                                    aria-expanded="true" aria-controls="collapse<?php echo $cont;?>">
                                                    <i class="fa fa-heart main"></i><i
                                                        class="fa fa-angle-double-right mr-3 main"></i><?php echo $postacord->Pregunta ?></button>
                                            </h5>
                                        </div>

                                        <div id="collapse<?php echo $cont;?>" class="collapse fade"
                                            aria-labelledby="heading<?php echo $cont;?>"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <?php echo $postacord->Respuesta; ?>
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
    <div class="modal fade" id="createmodalfaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <form action="<?php echo RUTAPUBLIC ?>/Admin/newpre" method="POST" autocomplete="off"
                        enctype="multipart/form-data">

                        <div class="row form-group">
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Pregunta</label>
                                <input type="text" class="form-control" placeholder="Ej: ¿como ayudo a...?" id="pregc" minlength="1" maxlength="50"
                                    name="pregunta" required>
                            </div>
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Contenido</label>
                                <input type="text" class="form-control" placeholder="Ej: Con nuestros esfuerzos..." minlength="1" maxlength="50"
                                    id="respc" name="respuesta" required>
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
    <div class="modal fade" id="editmodalfaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <form action="<?php echo RUTAPUBLIC ?>/Admin/updatepre" method="POST" autocomplete="off"
                        enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col col-md-3" hidden>
                                <input type="text" id="text-id" name="id" placeholder="Ingrese el nombre del evento"
                                    name="evento" class="form-control">
                                <input type="text" id="rutapasadavid" name="rutapasada" class="form-control">
                            </div>

                            <div class="row form-group">
                                <div class="col-12 col-md-9 m-l-60">
                                    <label for="email-input" id="label" class="form-control-label">Pregunta</label>
                                    <input type="text" class="form-control" placeholder="Ej: ¿como ayudo a...?" minlength="1" maxlength="50"
                                        id="preg" name="pregunta" required>
                                </div>
                                <div class="col-12 col-md-9 m-l-60">
                                    <label for="email-input" id="label" class="form-control-label">Contenido</label>
                                    <input type="text" class="form-control" placeholder="Ej: Con nuestros esfuerzos..." minlength="1" maxlength="50"
                                        id="resp" name="respuesta" required>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Editar FAQ</button>
                        </div>
                </div>

                </form>
            </div>
        </div>
    </div>
    </div>
    <!--edit modal-->

    <!--modal delete-->
    <div class="modal fade" id="deletemodalfaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar FAQ Id:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo RUTAPUBLIC; ?>/Admin/delpre" method="POST" autocomplete="off">
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