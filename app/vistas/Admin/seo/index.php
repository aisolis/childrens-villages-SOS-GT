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
                        <h2 class="title-1 m-b-25">Administrar configuraciones de SEO (Search Engine Optimizer)</h2>
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 m-t-30">

                            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                <div class="bg-overlay bg-overlay--blue"></div>
                                <h3>
                                    <i class="fas fa-tags"></i>Configuraciones de Seo activas de Aldeas Infantiles
                                    SOS</h3>
                            </div>
                            <div class="row">

                                <div class="col-lg-6 mt-3 ml-2" style="max-width: 48% !important;">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="<?php echo RUTAPUBLIC?>/public/img/mess.svg" class="mb-1 mr-2"
                                                width="20px"><strong> Messenger chat</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="<?php echo RUTAPUBLIC; ?>/Admin/updatemess" method="POST"
                                                autocomplete="off" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="hf-email" class=" form-control-label">Id</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <?php foreach ($foot['post'] as $uwu): ?>
                                                        <input type="text" id="idpage" name="idfb"
                                                            value="<?php echo $uwu->page?>"
                                                            placeholder="1234854418646154" minlength="1" maxlength="15" class="form-control">
                                                        <span class="help-block">Id página de facebook</span>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="hf-email"
                                                            class=" form-control-label">Mensaje</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="mensajelog" id="inuser" minlength="1" maxlength="80"
                                                            class="form-control"><?php echo $uwu->messageL?></textarea>
                                                        <span class="help-block">Mensaje para usuarios logueados</span>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="hf-email"
                                                            class=" form-control-label">Mensaje</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="mensajeout" id="ousers" minlength="1" maxlength="80"
                                                            class="form-control"><?php echo $uwu->messageO?></textarea>
                                                        <span class="help-block">Mensaje para usuarios NO
                                                            logueados</span>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="hf-email" class=" form-control-label">Color</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input name="color" id="color" minlength="1" maxlength="7" value="<?php echo $uwu->color?>"
                                                            class="form-control" data-jscolor="">
                                                        <span class="help-block">Color del chat</span>
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Actualizar
                                            </button>
                                        </div>
                                        </form>

                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3 ml-2" style="max-width: 48% !important;">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="<?php echo RUTAPUBLIC?>/public/img/google.svg" class="mb-1 mr-2"
                                                width="20px"><strong>Google Analythics</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="<?php echo RUTAPUBLIC; ?>/Admin/updateuacode" method="POST"
                                                autocomplete="off" class="form-horizontal">
                                                <?php foreach ($Analy['post'] as $uwu): ?>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="hf-email"
                                                            class=" form-control-label">UA-code</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="uacode" name="uacode"
                                                            value="<?php echo $uwu->uaCode?>"
                                                            placeholder="UA-168133576-4"  minlength="1" maxlength="14" class="form-control">
                                                        <span class="help-block">Google Analythics UA-Code</span>
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Actualizar
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="row">

                                <div class="col-lg-12 mt-3 ml-2" style="max-width: 98% !important;">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="<?php echo RUTAPUBLIC?>/public/img/google.svg" class="mb-1 mr-2"
                                                width="20px"><strong> Meta tags de página de contacto</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="<?php echo RUTAPUBLIC; ?>/Admin/updatetagcon" method="POST"
                                                autocomplete="off" class="form-horizontal">
                                                <?php foreach ($data['post'] as $uwu): ?>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="hf-email" class=" form-control-label">Tags</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">

                                                        <input type="text" value="<?php echo $uwu->keywords ?>"
                                                            name="tagsdecontacto" id="tagscontacto" class="tagsin"
                                                            data-role="tagsinput" />
                                                        <span class="help-block">Tags de contacto</span>
                                                    </div>
                                                </div>


                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="hf-email" class=" form-control-label">Descripcion de
                                                            la página</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="descripcionContacto" id="descCON" minlength="1" maxlength="300"
                                                            class="form-control"><?php echo $uwu->descripcion ?></textarea>
                                                        <span class="help-block">Descripción</span>
                                                    </div>
                                                </div>

                                                <?php endforeach; ?>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Actualizar
                                            </button>
                                        </div>
                                        </form>

                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-12 mt-3 ml-2" style="max-width: 98% !important;">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="<?php echo RUTAPUBLIC?>/public/img/google.svg" class="mb-1 mr-2"
                                                width="20px"><strong> Meta tags de página de FAQ (Frequently Asked
                                                Questions)</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="<?php echo RUTAPUBLIC; ?>/Admin/updatetagFAQ" method="POST"
                                                autocomplete="off" class="form-horizontal">
                                                <?php foreach ($SOS['post'] as $uwu): ?>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="hf-email" class=" form-control-label">Tags</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" name="tagsdefaq"
                                                            value="<?php echo $uwu->keywords ?>" id="tagsfaq"
                                                            class="tagsin" data-role="tagsinput" />
                                                        <span class="help-block">Tags de las FAQ</span>
                                                    </div>
                                                </div>


                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="hf-email" class=" form-control-label">Descripcion de
                                                            la página</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="descripcionfaq" id="descfaq" minlength="1" maxlength="300"
                                                            class="form-control"><?php echo $uwu->descripcion ?></textarea>
                                                        <span class="help-block">Descripción</span>
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Actualizar
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-12 mt-3 ml-2" style="max-width: 98% !important;">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="<?php echo RUTAPUBLIC?>/public/img/google.svg" class="mb-1 mr-2"
                                                width="20px"><strong> Meta tags de página del index</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="<?php echo RUTAPUBLIC; ?>/Admin/updatetagindex" method="POST"
                                                autocomplete="off" class="form-horizontal">
                                                <?php foreach ($Acord['post'] as $uwu): ?>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="hf-email" class=" form-control-label">Tags</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" name="tagsdeindex"
                                                            value="<?php echo $uwu->keywords ?>" id="tagsindex"
                                                            class="tagsin" data-role="tagsinput" />
                                                        <span class="help-block">Tags del index</span>
                                                    </div>
                                                </div>


                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="hf-email" class=" form-control-label">Descripcion de
                                                            la página</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="descripcionindex" id="descindex" minlength="1" maxlength="300"
                                                            class="form-control"><?php echo $uwu->descripcion ?></textarea>
                                                        <span class="help-block">Descripción</span>
                                                    </div>
                                                </div>

                                                <?php endforeach; ?>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Actualizar
                                            </button>
                                        </div>
                                        </form>

                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-12 mt-3 ml-2" style="max-width: 98% !important;">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="<?php echo RUTAPUBLIC?>/public/img/google.svg" class="mb-1 mr-2"
                                                width="20px"><strong> Meta tags de página de videos</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="<?php echo RUTAPUBLIC; ?>/Admin/updatetagvideo" method="POST"
                                                autocomplete="off" class="form-horizontal">
                                                <?php foreach ($mess['post'] as $uwu): ?>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="hf-email" class=" form-control-label">Tags</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" name="tagsdevideos"
                                                            value="<?php echo $uwu->keywords ?>" id="tagsvideos"
                                                            class="tagsin" data-role="tagsinput" />
                                                        <span class="help-block">Tags de los videos</span>
                                                    </div>
                                                </div>


                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="hf-email" class=" form-control-label">Descripcion de
                                                            la página</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="descripcionvideos" id="descvideos" minlength="1" maxlength="300"
                                                            class="form-control"><?php echo $uwu->descripcion ?></textarea>
                                                        <span class="help-block">Descripción</span>
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Actualizar
                                            </button>
                                        </div>
                                        </form>


                                    </div>
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
                                <input type="text" class="form-control" placeholder="Ej: Videos" id="" name="nombre"
                                    required>
                            </div>
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">URL</label>
                                <input type="text" class="form-control" placeholder="Ej: https://algo.com" id=""
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
                                                    class="fa fa-heart" id="icono"></i></button>
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
                                <input type="text" class="form-control" placeholder="Ej: Videos" id="nombreURL"
                                    name="nombre" required>
                            </div>
                            <div class="col-12 col-md-9 m-l-60">
                                <label for="email-input" id="label" class="form-control-label">URL</label>
                                <input type="text" class="form-control" placeholder="Ej: https://algo.com" id="linkURL"
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
                                                    class="" id="icono"></i></button>
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
                                <button type="submit" name="enviar" id="envi" class="btn btn-primary btn-lg">Editar
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
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar To-do Id:</h5>
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