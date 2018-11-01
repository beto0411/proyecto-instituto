<?php include_once 'includes/templates/header.php'; ?>
    <section class="seccion contenedor">
            <h2>Resumen Registro</h2>

    <?php if (isset($_POST['submit'])):
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $email = $_POST['email'];
      $regalo = $_POST['regalo'];
      $total_pedido = $_POST['total_pedido'];
      $fecha = date['Y-m-d H:i:s'];

      //Pedidos



      $boletos = $_POST['boletos'];
      $material = $_POST['pedido_material'];
      $libros = $_POST['pedido_libros'];

      include_once 'includes/funciones/funciones.php';
      $pedido = productos_json($boletos, $material, $libros);

      //Eventos
      $eventos = $_POST['registro'];
      $registro = eventos_json($eventos);

      try {
        require_once('includes/funciones/bd_conexion.php');
        $stmt = $conn->prepare("INSERT INTO alumnos(nombre_alumno, apellido_alumno, email_alumno, fecha_registro, pases_articulos, 	talleres_registrados, regalo,	total_pagado)
                                            VALUES(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total_pedido);
        $stmt->execute();

      } catch (\Exception $e) {
        echo $e->getMessage();
      }
      ?>


    <?php endif; ?>
    </section>
<?php include_once 'includes/templates/footer.php'; ?>
