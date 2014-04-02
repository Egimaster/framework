<?php
require_once __DIR__.'/Controlador.php';

if(isset($_POST['cod']) || isset($_GET['cod'])){
    if(isset($_POST['cod']))
        $cod = $_POST['cod'];
    else
        $cod = $_GET['cod'];

    switch($cod){
        case 2:
            Controlador::cerrarSesion();
            break;
  
    }
}
