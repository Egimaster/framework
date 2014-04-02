<?php require_once __DIR__.'/../../Configuracion/conf.php'; ?>

<!-- #menu -->
<ul id="menu" class="">
    <li class="nav-header">Menu</li>
    <li class="nav-divider"></li>
    <li class="active">
        <a href="index.php">
            <i class="fa fa-square-o"></i>
              <span class="link-title">
            Gestor
            </span>
        </a>
    </li>
    <li class="">

        <a href="javascript:;">
            <i class="fa fa-dashboard"></i>
            <span class="link-title">Cuadros</span>
            <span class="fa arrow"></span>
        </a>
        <ul>
            <li class="">
                <a href="<?php echo $ruta?>Vista/Gestor/crearCuadro.php ">
                    <i class="fa fa-angle-right"></i>&nbsp;Subir Cuadro
                </a>
            </li>
            <li class="">
                <a href="<?php echo $ruta?>Vista/Gestor/modificarCuadro.php">
                    <i class="fa fa-angle-right"></i>&nbsp;Editar Cuadro
                </a>
            </li>

            <li class="">
                <a href="#">
                    <i class="fa fa-angle-right"></i>&nbsp;Tipo de cuadro
                </a>
                <ul>
                    <li class="">
                        <a href="alterne.html">
                            <i class="fa fa-angle-right"></i>&nbsp;Añadir Original o Copia
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo $ruta?>Vista/Gestor/editarTipo.php">
                            <i class="fa fa-angle-right"></i>&nbsp;Editar Tipo
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="alterne.html">
                    <i class="fa fa-angle-right"></i>&nbsp;Eliminar Cuadro
                </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="fa fa-tasks"></i>
              <span class="link-title">
              Eventos
            </span>
            <span class="fa arrow"></span>
        </a>
        <ul>
            <li class="">
                <a href="icon.html">
                    <i class="fa fa-angle-right"></i>&nbsp;Crear evento</a>
            </li>
            <li class="">
                <a href="button.html">
                    <i class="fa fa-angle-right"></i>&nbsp;Modificar Evento</a>
            </li>
            <li class="">
                <a href="progress.html">
                    <i class="fa fa-angle-right"></i>&nbsp;Eliminar Evento</a>
            </li>

        </ul>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="fa fa-pencil"></i>
              <span class="link-title">
            Forms
	  </span>
            <span class="fa arrow"></span>
        </a>
        <ul>
            <li class="">
                <a href="form-general.html">
                    <i class="fa fa-angle-right"></i>&nbsp;General</a>
            </li>
            <li class="">
                <a href="form-validation.html">
                    <i class="fa fa-angle-right"></i>&nbsp;Validation</a>
            </li>
            <li class="">
                <a href="form-wysiwyg.html">
                    <i class="fa fa-angle-right"></i>&nbsp;WYSIWYG</a>
            </li>
            <li class="">
                <a href="form-wizard.html">
                    <i class="fa fa-angle-right"></i>&nbsp;Wizard &amp; File Upload</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="table.html">
            <i class="fa fa-table"></i>
            <span class="link-title">Tables</span>
        </a>
    </li>
    <li class="nav-divider"></li>
    <li>
        <a href="../../Controlador/puente.php?cod=2">
            <i class="fa fa-sign-in"></i>
              <span class="link-title">
    Cerrar Sesión
    </span>
        </a>
    </li>

</ul><!-- /#menu -->
</div><!-- /#left -->