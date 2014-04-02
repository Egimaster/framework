<?php
/**
 * Created by PhpStorm.
 * User: Jose Carlos Rodríguez Díaz
 * Date: 16/03/14
 * Time: 0:43
 */
require_once __DIR__.'/GenericoBD.php';
require_once __DIR__.'/../Base/Admin.php';

class adminBD extends GenericoBD{
    public static function login($usuario, $clave){
        $conn = parent::conectar();
        $query = "SELECT * FROM admin WHERE usuario = '$usuario' && clave = '$clave'";
        $rs = mysql_query($query,$conn);
        if(mysql_num_rows($rs)>0){
            session_start();
            $fila = mysql_fetch_assoc($rs);
            $admin = new Admin($fila['idusuario'],$fila['usuario'],$fila['imagen'],$fila['clave']);

            $_SESSION['admin'] = serialize($admin);

            return true;
        }else{
            return false;
        }
    }
    
} 