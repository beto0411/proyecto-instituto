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

      ?>

      <pre>
       <?php var_dump($pedido); ?>
     </pre>

     <hr>

       <pre>
        <?php var_dump($registro); ?>
      </pre>
    <?php endif; ?>
    </section>
<?php include_once 'includes/templates/footer.php'; ?>
