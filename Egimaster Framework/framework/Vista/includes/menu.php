<?php
    session_start();
    require_once __DIR__.'/../../Configuracion/conf.php';
?>
<nav class="navbar navbar-default " role="navigation">
    <!-- El logotipo y el icono que despliega el menú se agrupan
         para mostrarlos mejor en los dispositivos móviles -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target=".navbar-ex1-collapse">
            <span class="sr-only">Desplegar navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"></a>
    </div>

    <!-- Agrupar los enlaces de navegación, los formularios y cualquier
         otro elemento que se pueda ocultar al minimizar la barra -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo $ruta;?>"><span class="glyphicon glyphicon-home"></span> &nbsp;Galería</a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-time"></span> &nbsp;
                    Eventos <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><span class="glyphicon glyphicon-tag marginLeft"></span>Option  </a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-tags marginLeft"></span>Option  </a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-folder-close marginLeft"></span>Option</a></li>
                    <?php if(isset($_SESSION['admin'])){ ?>
                        <li class="divider"></li>
                        <li><a href="#"><span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Option</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-minus-sign"></span> &nbsp;Option</a></li>
                    <?php } ?>
                </ul>
            </li>
            <li><a href="#"> <span class="glyphicon glyphicon-envelope"></span> &nbsp;Option</a></li>
        </ul>
        <?php if(isset($_SESSION['admin'])){ ?>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user"></span> &nbsp;
                    Admin <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo $ruta; ?>Vista/Gestor/index.php"><span class="glyphicon glyphicon-lock"></span> &nbsp;Gestor</a></li>
                    <li><a href="<?php echo  $ruta ?>Controlador/puente.php?cod=2"><span class="glyphicon glyphicon-off"></span> &nbsp;Cerrar Sesión</a></li>
                </ul>
            </li>
        </ul>
        <?php } ?>
    </div>
</nav>
