<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="<?php echo RUTAPUBLIC ?>/Admin/index">
                            <img src="<?php echo RUTAPUBLIC ?>/public/img/aldeas.png" alt="sos" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                <ul class="list-unstyled navbar__list">
                        <li class="tab-index">
                            <a href="<?php echo RUTAPUBLIC ?>/Admin/index">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="tab-Slider">
                            <a href="<?php echo RUTAPUBLIC ?>/Admin/Slider">
                                <i class="fas fa-sliders"></i>Slider</a>
                        </li>
                        <li class="tab-videos">
                            <a href="<?php echo RUTAPUBLIC ?>/Admin/videos">
                                <i class="fas fa-forward"></i>Videos</a>
                        </li>
                        <li class="tab-sos">
                            <a href="<?php echo RUTAPUBLIC ?>/Admin/sos">
                                <i class="fa fa-id-badge"></i>Embajadores SOS</a>
                        </li>
                        <li class="tab-acordeon">
                            <a href="<?php echo RUTAPUBLIC ?>/Admin/acordeon">
                                <i class="fas fa-bars"></i>Acordeón</a>
                        </li>
                        <li class="tab-usuarios">
                            <a class="js-arrow" href="<?php echo RUTAPUBLIC ?>/Admin/usuarios">
                                <i class="fas fa-users"></i>Usuarios</a>
                        </li>
                        <li class="has-sub tab-contacto" >
                            <a class="js-arrow" href="<?php echo RUTAPUBLIC ?>/Admin/contacto">
                                <i class="fas fa-id-card"></i>Contacto</a>
                        </li>
                        <li class="has-sub tab-links">
                            <a class="js-arrow" href="<?php echo RUTAPUBLIC ?>/Admin/links">
                                <i class="fas fa-link"></i>Links</a>
                        </li>
                        <li class="has-sub tab-seo">
                            <a class="js-arrow" href="<?php echo RUTAPUBLIC ?>/Admin/seo">
                                <i class="fas fa-tags"></i>SEO</a>
                        </li>
                        <li class="has-sub tab-FAQ">
                            <a class="js-arrow" href="<?php echo RUTAPUBLIC ?>/Admin/FAQ">
                                <i class="fas fa-question-circle"></i>FAQ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="<?php echo RUTAPUBLIC ?>/Admin/index">
                    <img src="<?php echo RUTAPUBLIC ?>/public/img/aldeas.png" alt="sos" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="tab-index">
                            <a href="<?php echo RUTAPUBLIC ?>/Admin/index">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="tab-Slider">
                            <a href="<?php echo RUTAPUBLIC ?>/Admin/Slider">
                                <i class="fas fa-sliders"></i>Slider</a>
                        </li>
                        <li class="tab-videos">
                            <a href="<?php echo RUTAPUBLIC ?>/Admin/videos">
                                <i class="fas fa-forward"></i>Videos</a>
                        </li>
                        <li class="tab-sos">
                            <a href="<?php echo RUTAPUBLIC ?>/Admin/sos">
                                <i class="fa fa-id-badge "></i>Embajadores SOS</a>
                        </li>
                        <li class="tab-acordeon">
                            <a href="<?php echo RUTAPUBLIC ?>/Admin/acordeon">
                                <i class="fas fa-bars"></i>Acordeón</a>
                        </li >
                        <li class="tab-usuarios">
                            <a class="js-arrow" href="<?php echo RUTAPUBLIC ?>/Admin/usuarios">
                                <i class="fas fa-users"></i>Usuarios</a>
                        </li>
                        <li class="has-sub tab-contacto" >
                            <a class="js-arrow" href="<?php echo RUTAPUBLIC ?>/Admin/contacto">
                                <i class="fas fa-id-card"></i>Contacto</a>
                        </li>
                        <li class="has-sub tab-links">
                            <a class="js-arrow" href="<?php echo RUTAPUBLIC ?>/Admin/links">
                                <i class="fas fa-link"></i>Links</a>
                        </li>
                        <li class="has-sub tab-seo">
                            <a class="js-arrow" href="<?php echo RUTAPUBLIC ?>/Admin/seo">
                                <i class="fas fa-tags"></i>SEO</a>
                        </li>
                        <li class="has-sub tab-FAQ">
                            <a class="js-arrow" href="<?php echo RUTAPUBLIC ?>/Admin/FAQ">
                                <i class="fas fa-question-circle"></i>FAQ</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST" style="visibility: hidden">
                                <input class="au-input au-input--xl" value="<?php echo $_SESSION['id_usuario'][1]?>" id="codigousuario" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button" >
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img class="profile" src="<?php echo RUTAPUBLIC ?>/public/admin/Profile/<?php echo $_SESSION['img'][4]?>" alt="img" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['Nombre'][2]?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img class="profile" src="<?php echo RUTAPUBLIC ?>/public/admin/Profile/<?php echo $_SESSION['img'][4]?>" alt="img" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['Nombre'][2]?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['Correo'][3]?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo RUTAPUBLIC ?>/usuarios/salir">
                                                    <i class="zmdi zmdi-power"></i>Cerrar sesión</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->