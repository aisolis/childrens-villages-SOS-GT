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
                        <h2 class="title-1 m-b-25">Administrar links del footer</h2>
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 m-t-30">

                            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                <div class="bg-overlay bg-overlay--blue"></div>
                                <h3>
                                    <i class="fas fa-forward"></i>Footer links activos de Aldeas Infantiles
                                    SOS</h3>
                                <?php if(count($foot['post'])>3):?>
                                <?php else:?>
                                <button class="au-btn-plus" data-toggle="modal" dismiss="modal" data-backdrop="false"
                                    data-target="#createmodallink">
                                    <i class="zmdi zmdi-plus"></i>
                                </button>
                                <?php endif; ?>

                            </div>
                            <div class="row">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Icono</th>
                                                <th class="text-left">Nombre</th>
                                                <th class="text-left">Link</th>
                                                <th class="text-left">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php if($foot == 0 ):?>
                                            <tr>
                                                <td>nada que mostrar</td>
                                                <td>nada que mostrar</td>
                                                <td>nada que mostrar</td>
                                                <td>nada que mostrar</td>
                                            </tr>
                                            <?php else:?>
                                            <?php foreach ($foot['post'] as $uwu): ?>
                                            <tr>
                                                <td class="align-middle text-center">
                                                    <?php $xd = $uwu->icono;  $sicono = str_ireplace(" iconpicker-component", "", $xd); echo "<i class='$sicono';></i>";  ?>
                                                </td>
                                                <td><?php echo $uwu->nombre;?></td>
                                                <td><?php echo $uwu->url;?></td>
                                                <td class="align-middle">
                                                    <div class="table-data-feature">
                                                        <button class="item editlink" data-placement="top"
                                                            title="Editar" data-toggle="modal" dismiss="modal"
                                                            data-backdrop="false" id="editarlink"
                                                            data-whatever="<?php echo $uwu->id?>"
                                                            data-target="#editmodallink">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item deletelink" data-placement="top"
                                                            title="Eliminar" data-toggle="modal" dismiss="modal"
                                                            data-backdrop="false" id="eliminarlink"
                                                            data-whatever="<?php echo $uwu->id?>"
                                                            data-target="#deletemodallink">
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
    <div class="modal fade" id="createmodallink" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar link al footer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo RUTAPUBLIC ?>/Admin/newlink" method="POST" autocomplete="off"
                        enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col col-md-3" hidden>
                                <input type="text" id="text-id" name="id" placeholder="Ingrese el nombre del evento"
                                    name="evento" class="form-control">
                                <input type="text" id="rutapasadavid" name="rutapasada" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Nombre del
                                    link</label>
                                <input type="text" class="form-control" placeholder="Ej: Videos" minlength="1" maxlength="50" name="nombre"
                                    required>
                            </div>
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">URL</label>
                                <input type="text" class="form-control" placeholder="Ej: https://algo.com" minlength="1" maxlength="50"
                                    name="url" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Icono</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary iconpicker-component"><i
                                                    class="fa fa-heart"></i></button>
                                            <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                                                data-selected="fa-car" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Icono</span>
                                            </button>
                                            <button style="display:none" class="btn btn-default action-create">Create
                                                instances</button>
                                            <input value="" name="icon" style="display:none;" id="inputicon"
                                                type="text" />
                                            <div class="dropdown-menu"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-md-12 mt-3 d-flex justify-content-center">
                                <button type="submit" name="enviar" id="envi" class="btn btn-primary btn-lg">Agregar
                                    Link</button>
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
    <div class="modal fade" id="editmodallink" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar link Id:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo RUTAPUBLIC ?>/Admin/updatelink" method="POST" autocomplete="off"
                        enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col col-md-3" hidden>
                                <input type="text" id="text-id" name="id" placeholder="Ingrese el nombre del evento"
                                    name="evento" class="form-control">
                                <input type="text" id="rutapasadavid" name="rutapasada" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Nombre del
                                    link</label>
                                <input type="text" class="form-control" placeholder="Ej: Videos" id="nombreURL" minlength="1" maxlength="50"
                                    name="nombre" required>
                            </div>
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">URL</label>
                                <input type="text" class="form-control" placeholder="Ej: https://algo.com" id="linkURL" minlength="1" maxlength="50"
                                    name="url" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">Icono</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary iconpicker-component"><i
                                                    class="" id="iconoE"></i></button>
                                            <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                                                data-selected="fa-car" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Icono</span>
                                            </button>
                                            <button style="display:none" class="btn btn-default action-create">Create
                                                instances</button>
                                            <input value="" name="icon" style="display:none;" id="inputicono"
                                                type="text" />
                                            <div class="dropdown-menu"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-md-12 mt-3 d-flex justify-content-center">
                                <button type="submit" name="enviar" id="editi" class="btn btn-primary btn-lg">Editar
                                    Link</button>
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
    <div class="modal fade" id="deletemodallink" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <form action="<?php echo RUTAPUBLIC; ?>/Admin/dellink" method="POST" autocomplete="off">
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