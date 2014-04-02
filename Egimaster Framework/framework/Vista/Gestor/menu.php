<?php require_once __DIR__.'/../../Configuracion/conf.php'; ?>
<!-- .navbar -->
<nav class="navbar navbar-inverse navbar-static-top">
    <!-- Brand and toggle get grouped for better mobile display -->
    <header class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Gestor</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    </header>
    <div class="topnav">
        <div class="btn-toolbar">
            <div class="btn-group">
                <a data-placement="bottom" data-original-title="Mostrar / Ocultar Menú" data-toggle="tooltip" class="btn btn-success btn-sm" id="changeSidebarPos">
                    <i class="fa fa-expand"></i>
                </a>
            </div>

            <div class="btn-group">
                <a href="../../Controlador/puente.php?cod=2" data-toggle="tooltip" data-original-title="Cerrar Sesión" data-placement="bottom" class="btn btn-metis-1 btn-sm">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </div>
    </div><!-- /.topnav -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">

        <!-- .nav -->
        <ul class="nav navbar-nav">
            <li> <a href="<?php echo $ruta;?>"><span class="glyphicon glyphicon-home"></span> &nbsp;Menú 1</a>  </li>
            <li> <a href="<?php echo $ruta;?>"><span class="glyphicon glyphicon-time"></span> &nbsp;Menú 2</a>  </li>
            <li> <a href="<?php echo $ruta;?>"><span class="glyphicon glyphicon-envelope"></span> &nbsp; Menú 3</a>  </li>

            <li class='dropdown '>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Estadística
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li> <a href="<?php echo $ruta;?>">Validator W3C HTML5</a>  </li>
                    <li> <a href="<?php echo $ruta;?>">Validator W3C CSS3</a>  </li>
                    <li> <a href="<?php echo $ruta;?>">Google Analytics</a>  </li>
                </ul>
            </li>
        </ul><!-- /.nav -->
    </div>
</nav><!-- /.navbar -->