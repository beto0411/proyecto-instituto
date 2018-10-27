<?php
  try {
    require_once('includes/funciones/bd_conexion.php');
    $sql = " SELECT * FROM docentes";

    $resultado = $conn->query($sql);
  } catch (\Exception $e) {
    echo $e->getMessage();
  }
 ?>
<!--Esta parte fuera del while-->
<section class="invitados contenedor seccion">
 <h2>Docentes</h2>
   <ul class="lista-invitados clearfix">
<!--#Esta parte fuera del while-->
   <?php
      while ($docentes = $resultado->fetch_assoc()) { ?>

            <li>
                <div class="invitado">
                  <a class="invitado-info" href="#invitado <?php echo $docentes ['id_docente']; ?>">
                      <img src="img/<?php echo $docentes['url_imagen']  ?> "alt="imagen invitado">
                      <p><?php echo $docentes['nombre_docente'] . " " . $docentes['apellido_docente'] ?></p>
                  </a>
                </div>
            </li>

  <!--Colorbox-->
          <div style="display:none;">
                <div class="invitado-info" id="invitado" <?php echo $docentes['id_docente']; ?> >
                    <h2> <?php echo $decentes['nombre_docente'] . " " . $docentes['apellido_docente'] ?> </h2>
                  <img src="img/<?php echo $docentes['url_imagen'] ?> " alt="imagen invitado">
                    <p> <?php echo $docentes['descripcion'] ?> </p>
                </div>
          </div>
  <!--#Colorbox-->
      <?php } ?>    <!--Fin del while-->

      <!--Esta parte fuera del while-->
      </ul>
    </section><!--invitados-->
      <!--#Esta parte fuera del while-->


 <?php
  $conn->close();
  ?>
