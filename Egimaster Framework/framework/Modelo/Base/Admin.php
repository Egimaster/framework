<?php
/**
 * Created by PhpStorm.
 * User: Jose Carlos Rodríguez Díaz
 * Date: 16/03/14
 * Time: 1:01
 */
require_once __DIR__.'/../BD/Acceso_logBD.php';

class Admin {
    private $idusuario;
    private $usuario;
    private $imagen;
    private $clave;

    private $accesos;

    public function __construct(){
        $args = func_get_args();
        $nargs = func_num_args();
        switch($nargs){
            case 4:
                $this->__construct1($args[0],$args[1],$args[2],$args[3]); // Login
                break;
        }
    }

    public function __construct1($idusuario,$usuario,$imagen,$clave){
        $this->__set("idusuario",$idusuario);
        $this->__set("usuario",$usuario);
        $this->__set("imagen",$imagen);
        $this->__set("clave",$clave);

    }

    public function __get($nombre){
        return $this->$nombre;
    }
    public function __set($nombre, $valor){
        $this->$nombre = $valor;
    }
    public function getAccesos(){
        if(!$this->accesos){
            $this->setAccesos(Acceso_logBD::getAccesosAdmin($this));
        }
		foreach($this->accesos as $acceso){
			$acceso->setAdmin($this);
		}
       
        return $this->accesos;
    }
    public function setAccesos($accesos){
        $this->accesos = $accesos;
    }
} 