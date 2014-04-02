<?php
/**
 * Created by PhpStorm.
 * User: Jose Carlos Rodríguez Díaz
 * Date: 16/03/14
 * Time: 1:45
 */

class Acceso_log {
    private $idaccesos;
    private $fecha_log;

    private $admin;


    public function __construct(){
        $args = func_get_args();
        $nargs = func_num_args();
        switch($nargs){
            case 2:
                $this->__construct1($args[0],$args[1]); // BD
                break;
        }
    }

    public function __construct1($idaccesos,$fecha_log){
        $this->__set("idaccesos",$idaccesos);
        $this->__set("fecha_log",$fecha_log);
    }

    public function __get($nombre){
        return $this->$nombre;
    }
    public function __set($nombre, $valor){
        $this->$nombre = $valor;
    }
    public function setAdmin(Admin $admin){
        $this->admin = $admin;
    }
} 