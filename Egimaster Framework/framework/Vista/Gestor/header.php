<?php
session_start();
if(!$_SESSION['admin']){
    header('Location: http://localhost/framework/Vista/plantilla.php ');
    exit;
}else{
    require_once __DIR__.'/../../Modelo/Base/Admin.php';
    $admin = unserialize($_SESSION['admin']);
    $admin->getAccesos();
    $ultAcceso = $admin->__get('accesos')[0]->__get('fecha_log');
    $meses = array('ene','feb','mar','abr','may','jun','jul','ago','sep','oct','nov','dic');

    $hour = substr($ultAcceso, 11,2);
    $min = substr($ultAcceso,14,2);
    $mes = substr($ultAcceso,5,2);
    if($mes < 10)
        $mes = substr($mes,1,1);
    $dia = substr($ultAcceso,8,2);
    $fechaFinal = $dia."-".$meses[$mes-1]." ".$hour.":".$min;

}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestor</title>

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="msapplication-TileColor" content="">
    <meta name="msapplication-TileImage" content="">
    <meta charset="utf-8"/>

    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/lib/Font-Awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.min.css">
    <link rel="stylesheet" href="assets/css/theme.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/lib/html5shiv/html5shiv.js"></script>
    <script src="assets/lib/respond/respond.min.js"></script>
    <![endif]-->
    <script src="assets/lib/modernizr-build.min.js"></script>

</head>