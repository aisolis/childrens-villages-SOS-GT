<?php require RUTAAPP . '/vistas/includes/headeradmin.php'; ?>
<body class="animsition">
    <div class="page-wrapper">
        <?php require RUTAAPP . '/vistas/includes/navbaradmin.php'; ?>

        <!-- PAGE CONTAINER-->


        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30 ">

                <div class="row m-t-25 d-flex justify-content-center">
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c1">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                    <div class="text center pb-5">
                                        <h2><?php echo $SOS?></h2>
                                        <span>Embajadores SoS</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c2">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-fast-forward"></i>
                                    </div>
                                    <div class="text pb-5">
                                        <h2><?php echo $Vid?></h2>
                                        <span>Videos publicados</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c3">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-accounts-add"></i>
                                    </div>
                                    <div class="text pb-3">
                                        <h2><?php echo $mess?></h2>
                                        <span>Solicitudes de contacto</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c4">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-comment-text"></i>
                                    </div>
                                    <div class="text pb-3">
                                        <h2><?php echo $pre?></h2>
                                        <span>Preguntas Frecuentes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c5">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon  mr-5">
                                        <i class="zmdi zmdi-view-carousel"></i>
                                    </div>
                                    <div class="text pb-3 mr-5">
                                        <h2><?php echo $data?></h2>
                                        <span>Slider</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c6">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-bookmark"></i>
                                    </div>
                                    <div class="text pb-3">
                                        <h2><?php echo $foot?></h2>
                                        <span>Links en footer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c7">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-comments"></i>
                                    </div>
                                    <div class="text pb-3 mr-5">
                                        <h2><?php echo $Acord?></h2>
                                        <span>Acordeón</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                <div class="bg-overlay bg-overlay--blue"></div>
                                <h3>
                                    <i class="zmdi zmdi-account-calendar"></i>To do <?php echo $_SESSION['Nombre'][2]?>
                                </h3>
                                <button class="au-btn-plus" data-toggle="modal" dismiss="modal" data-backdrop="false"
                                    data-target="#exampleModal">
                                    <i class="zmdi zmdi-plus"></i>
                                </button>
                            </div>
                            <div class="au-task js-list-load">
                                <div class="au-task__title">
                                    <p>Tareas para <?php echo $_SESSION['Nombre'][2]?></p>
                                </div>
                                <?php if($todo == 0 ):?>
                                <div class="d-flex justify-content-center">
                                    <h3>Nada que mostrar :c</h3>
                                </div>
                                <?php else:?>
                                <?php foreach ($todo['post'] as $list):?>
                                
                                <div class="div-col-12 au-task-list js-scrollbar3">
                                    <div
                                        class="au-task__item au-task__item--<?php if($list->estado == "Pendiente"){$class="danger";}else if($list->estado == "Completado"){$class="success";}else{$class="primary";}echo $class?> ">
                                        <div class="au-task__item-inner">
                                            <h5 class="task">
                                                <a href="#"><?php echo $list->nombre?></a>
                                            </h5>
                                            <span class="time"><?php echo $list->fecha." ".$list->hora?></span>
                                        </div>
                                    </div>
                                    <div class="mb-5 d-flex justify-content-end">
                                        <button class="au-btn-edit" data-toggle="modal" dismiss="modal"
                                            data-backdrop="false" id="editartodo" data-whatever="<?php echo $list->id?>"
                                            data-target="#editmodal">
                                            <i class="zmdi zmdi-edit"></i>
                                        </button>
                                        <button class=" ml-3 au-btn-delete" data-toggle="modal" dismiss="modal"
                                            data-whatever="<?php echo $list->id?>" data-backdrop="false"
                                            data-target="#deletemodal">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <div class="au-task__footer">
                                    <button class="au-btn au-btn-load js-load-btn">Cargar Más</button>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-25">Solicitudes mas Recientes</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>Tipo</th>
                                        <th>Nombre</th>
                                        <th>Celular</th>
                                        <th>Correo</th>
                                        <th class="text-right">Cantidad</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($Analy == 0 ):?>
                                    <tr>
                                        <td>nada que mostrar</td>
                                        <td>nada que mostrar</td>
                                        <td>nada que mostrar</td>
                                        <td>nada que mostrar</td>
                                        <td>nada que mostrar</td>
                                        <td>nada que mostrar</td>
                                    </tr>
                                    <?php else:?>
                                    <?php foreach ($Analy['post'] as $uwu): ?>
                                    <tr>
                                        <?php if($uwu->state == "Pendiente"){$stabadge="badge badge-secondary"; $class="table-secondary";}else if($uwu->state == "En comunicación"){$stabadge="badge badge-info";$class="table-info";}else{$stabadge="badge badge-success"; $class="table-success";}?>
                                        <td class="<?php echo $class;?>"><?php echo $uwu->empresa;?></td>
                                        <td class="<?php echo $class;?>"><?php echo $uwu->nombre;?></td>
                                        <td class="<?php echo $class;?>"><?php echo $uwu->celular;?></td>
                                        <td class="text-right <?php echo $class;?>"><?php echo $uwu->correo;?></td>
                                        <td class="text-right <?php echo $class;?>"><?php if(is_numeric($uwu->cantidad) ){echo "Q.". number_format($uwu->cantidad);}else{echo $uwu->cantidad;}?></td>
                                        <td class="text-right <?php echo $class;?>">
                                            <p class="<?php echo $stabadge?> font-weight-bold"><?php echo $uwu->state;?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!--modal-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="false">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar al To-do</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo RUTAPUBLIC ?>/Admin/todo" method="POST" autocomplete="off">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Nombre del
                                                evento</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="nombre" minlength="1" maxlength="80"
                                                placeholder="Ingrese el nombre del evento" name="evento"
                                                class="form-control">
                                            <small class="help-block form-text">Nombre del evento</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Fecha y hora</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input name="fecha" type="date" class="form-control" id="fecha" required>
                                            <small class="help-block form-text">Ingrese la fecha</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Fecha y hora</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="hora" class="form-control" id="Entrada"
                                                style="height:34px !important;" required>
                                                <?php
                                                                for ($i=0; $i<=23; $i++){
                                                                    if($i<=11){echo '<option value="'.$i.':00 de la mañana">'.$i.':00 de la mañana</option>';}
                                                                    else if($i==12){echo '<option value="'.$i.':00 del medio día">'.$i.':00 del medio día</option>';}
                                                                    else if($i>=13 and $i<=18){
                                                                        echo '<option value="'.$i.':00 de la tarde">'.$i.':00 de la tarde</option>';
                                                                    }
                                                                    else{
                                                                        echo '<option value="'.$i.':00 de la noche">'.$i.':00 de la noche</option>';
                                                                    }
                                                                
                                                                }
                                                        ?>
                                            </select>
                                            <small class="help-block form-text">Ingrese la hora</small>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Agregar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--modal-->

                <!--modal edit-->
                <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="false">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar To-do Id:</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo RUTAPUBLIC ?>/Admin/updateTodo" method="POST"
                                    autocomplete="off">
                                    <div class="row form-group">
                                        <div class="col col-md-3" hidden>
                                            <input type="text" id="text-id" name="id" minlength="1" maxlength="80"
                                                placeholder="Ingrese el nombre del evento" name="evento"
                                                class="form-control">
                                        </div>
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Nombre del
                                                evento</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="nametodo" name="nombre" minlength="1" maxlength="80"
                                                placeholder="Ingrese el nombre del evento" name="evento"
                                                class="form-control">
                                            <small class="help-block form-text">Nombre del evento</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Fecha y hora</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input name="fecha" type="date" class="form-control" id="editfecha"
                                                required>
                                            <small class="help-block form-text">Ingrese la fecha</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Fecha y hora</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="hora" class="form-control" id="edithora"
                                                style="height:34px !important;" required>
                                                <?php
                                                                for ($i=0; $i<=23; $i++){
                                                                    if($i<=11){echo '<option value="'.$i.':00 de la mañana">'.$i.':00 de la mañana</option>';}
                                                                    else if($i==12){echo '<option value="'.$i.':00 del medio día">'.$i.':00 del medio día</option>';}
                                                                    else if($i>=13 and $i<=18){
                                                                        echo '<option value="'.$i.':00 de la tarde">'.$i.':00 de la tarde</option>';
                                                                    }
                                                                    else{
                                                                        echo '<option value="'.$i.':00 de la noche">'.$i.':00 de la noche</option>';
                                                                    }
                                                                
                                                                }
                                                        ?>
                                            </select>
                                            <small class="help-block form-text">Ingrese la hora</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Estado</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select class="form-control" name="estado" id="estadoSel">
                                                <option>Pendiente</option>
                                                <option>En proceso</option>
                                                <option>Completado</option>
                                            </select>
                                            <small class="help-block form-text">Ingrese la fecha</small>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--edit modal-->

                <!--modal delete-->
                <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                <form action="<?php echo RUTAPUBLIC ?>/Admin/deletetodo" method="POST"
                                    autocomplete="off">
                                    <div class="row form-group">
                                        <div class="col col-md-3" hidden>
                                            <input type="text" id="text-id" name="id" minlength="1" maxlength="80"
                                                placeholder="Ingrese el nombre del evento" name="evento"
                                                class="form-control">
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

    <?php require RUTAAPP . '/vistas/includes/footeradmin.php'; ?>