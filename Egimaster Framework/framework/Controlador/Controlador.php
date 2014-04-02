<?php
/**
 * Created by PhpStorm.
 * User: Jose Carlos Rodríguez Díaz
 * Date: 11/03/14
 * Time: 20:21
 */


require_once __DIR__.'/../Modelo/Base/Admin.php';
require_once __DIR__.'/../Modelo/BD/AdminBD.php';


class Controlador {

    private static $ruta = "http://localhost/framework/";


    /* CERRAR SESIÓN */
    public static function cerrarSesion(){
        session_start();
        $admin = unserialize($_SESSION['admin']);
        $fecha = date('Y-m-d H:i:s');
        $fecha 	= date('Y-m-d H:i:s' ,(strtotime ("+1 Hours")));

        $mensaje = Acceso_logBD::ultimoAcceso($fecha,$admin);
        session_destroy();
        header('Location: '.self::$ruta.'Vista/index.php');
        exit;
    }


} 