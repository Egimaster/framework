<?php

require_once __DIR__ . '/../../Modelo/BD/AdminBD.php';

$mensaje = AdminBD::login($_POST['usuario'],$_POST['clave']);

    echo $mensaje;