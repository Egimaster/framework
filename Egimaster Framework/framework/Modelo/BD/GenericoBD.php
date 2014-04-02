<?php
/**
 * Created by PhpStorm.
 * User: Jose Carlos Rodríguez Díaz
 * Date: 15/03/14
 * Time: 10:31
 */
require_once __DIR__.'/../Base/Acceso_log.php';

abstract class GenericoBD {
    protected static function conectar(){
        mysql_query("SET NAMES 'utf8'");
        mysql_set_charset('utf8');

        $conn = mysql_connect("localhost","root","") or die("problema en la conexión de base de datos");
        mysql_select_db("gestor",$conn)or die("problemas en la selección de base de datos");
        return $conn;
    }

    protected static function desconectar($conn){
        mysql_close($conn);
    }

    protected static function convertirArray($tipo, $rs){

		$objetos = array();
        switch($tipo){
            case 'Accesos';
                    while($fila = mysql_fetch_assoc($rs)){
                        $objetos[] = new Acceso_log($fila['idaccesos'],$fila['fecha_log']);
                    }
                    break;
          
        }
        return $objetos;

    }
}
