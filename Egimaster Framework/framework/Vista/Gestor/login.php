<?php
      session_start();
      if(isset($_SESSION['admin']))
        header('Location: http://localhost/framework/Vista/Gestor/index.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="msapplication-TileColor" content="" />
    <meta name="msapplication-TileImage" content="" />
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/lib/magic/magic.css">
    <link rel="stylesheet" href="assets/css/estilos.css">

      <script>
          function crearObjeto(){

              try
              {
                  xmlhttp = new XMLHttpRequest();

              }
              catch (a)
              {
                  try {
                      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                      alert("objeto creado en internet explorer antiguo");
                  }
                  catch (b) {
                      xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                  }
              }

          }
          function login(){
              usuario = document.getElementById('usuario').value;
              clave = document.getElementById('clave').value;

              crearObjeto();

              xmlhttp.onreadystatechange = function(){

                  if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
                  {
                      procesarLogin(xmlhttp.responseText);
                  }
              }

              xmlhttp.open("POST", "http://localhost/framework/Controlador/AJAX/login.php", true);
              xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=utf-8');
              xmlhttp.send("usuario="+usuario+"&clave="+clave);
          }

          function procesarLogin(mensaje){
                if(mensaje){
                    window.location.replace("http://localhost/framework/Vista/Gestor/index.php");
                }else{
                    document.getElementById("error").innerHTML="Usuario o Clave incorrecta";
                    document.getElementById("error").className="alert alert-danger";
                }
          }
      </script>
  </head>
  <body class="login">
    <div class="container">
      <div class="text-center">
        <!-- <img src="../img/logo.gif" width="200" alt="epikuroarte login"> -->
      </div>
      <div class="tab-content">
        <div id="login" class="tab-pane active">
          <form class="form-signin">
            <p class="text-muted text-center">
              Usuario y Contraseña para logearse
            </p>
            <input type="text" placeholder="Usuario" id="usuario" class="form-control">
            <input type="password" placeholder="Password" id="clave" class="form-control">
            <input type="button" onclick="login();" class="btn btn-lg btn-primary btn-block" value="Entrar"><br/>
              <div class="alert alert-danger errorOculto" id="error"></div>
          </form>

        </div>


      </div>
      <div class="text-center">
        <ul class="list-inline">

          <li> <a class="text-muted" href="../../index.php" >Volver a Inicio</a>  </li>
        </ul>
      </div>
    </div><!-- /container -->
    <script src="assets/lib/jquery.min.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.js"></script>

  </body>
</html>
