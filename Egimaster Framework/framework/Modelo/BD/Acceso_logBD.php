<?php
/**
 * Created by PhpStorm.
 * User: Jose Carlos Rodríguez Díaz
 * Date: 16/03/14
 * Time: 1:47
 */

require_once __DIR__.'/GenericoBD.php';

class Acceso_logBD extends GenericoBD{
    public static function getAccesosAdmin(Admin $admin){
        $conn = parent::conectar();
        $query = "SELECT * FROM acceso_log WHERE idusuario = '".$admin->__get('idusuario')."' order by idaccesos DESC limit 1";
        $rs = mysql_query($query,$conn);
        $accesos = parent::convertirArray('Accesos',$rs);

        parent::desconectar($conn);
        return $accesos;
    }
    public static function ultimoAcceso($fecha, $admin){
        $conn = parent::conectar();

        $query = "INSERT INTO acceso_log(fecha_log,idusuario) VALUES('$fecha','".$admin->__get('idusuario')."')";
        $rs = mysql_query($query,$conn);
    }
} 