<div class="media user-media">
    <div class="user-media-toggleHover">
        <span class="fa fa-user"></span>
    </div>
    <div class="user-wrapper">
        <a class="user-link" href="">
            <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo $admin->__get('imagen'); ?>">
            <span class="label label-danger user-label"><?php echo $admin->__get('idusuario'); ?></span>
        </a>
        <div class="media-body">
            <h5 class="media-heading"><?php echo $admin->__get('usuario'); ?></h5>
            <ul class="list-unstyled user-info">
                <li> <a href="">Administrador</a>  </li>
                <li>Último acceso :
                    <br>
                    <small>
                        <i class="fa fa-calendar"></i>&nbsp;<?php echo $fechaFinal; ?></small>
                </li>
            </ul>
        </div>
    </div>
</div>