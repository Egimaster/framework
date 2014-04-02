<?php include '/header.php'; ?>

  <body>
    <div id="wrap">
      <div id="top">

<?php include '/menu.php'; ?>

<?php include '/menu2.php'; ?>


      </div>
      <div id="left">
          <?php
            include 'datosUsuario.php';
          ?>

<?php include 'menuLateral.php'; ?>

          <!-- Contenedor Principal -->
          <div id="content">
            <div class="outer">
              <div class="inner">
                  <?php

                    if(isset($_GET['men'])){
                        switch($_GET['men']){
                            case 1:
                                echo "<span class='glyphicon glyphicon-ok-sign'></span> Cuadro subido correctamente";
                                break;
                            case 2;
                            case 3;
                                echo "<span class='glyphicon glyphicon-remove'></span> El cuadro no se ha subido";
                                break;
                            case 4:
                                echo "<span class='glyphicon glyphicon-ok-sign'></span> Cuadro modificado correctamente";
                                break;
                            case 5:
                                echo "<span class='glyphicon glyphicon-remove'></span> Problemas al crear Papel en base de datos";
                                break;
                            case 6:
                                echo "<span class='glyphicon glyphicon-remove'></span> Problemas al modificar el cuadro en base de datos";
                                break;
                        }

                        echo "<br/><br/><a href='index.php' class='btn btn-info'>Volver </a>";
                    }
                  ?>
              </div>
            </div>
          </div>
          <!-- Fin Contenedor Principal-->


      </div><!-- /#wrap -->

<?php include '/footer.php'; ?>