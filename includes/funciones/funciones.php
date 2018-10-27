<?php
  function productos_json(&$boletos, &$material = 0, &$libros = 0){
    $dias = array (0 => 'un_dia', 1 => 'pase_completo', 2 => 'pase_2dias' );
    $total_boletos = array_combine($dias, $boletos);
    $json = array ();


    foreach ($total_boletos as $key => $boletos) {
      if ((int) $boletos > 0 ) {
        $json[$key] = (int) $boletos;
      }
    } //endforeach

    $material = (int) $material;
    if ($material > 0 ):
      $json['materiales'] = $material;
    endif;

    $libros = (int) $libros;
    if ($libros > 0 ):
      $json['libros'] = $libros;
    endif;

    return json_encode($json);
  }


//Funcion eventos_json

function eventos_json (&$eventos){
  $eventos_json = array ();

  foreach ($eventos as $evento):
    $eventos_json['eventos'][] = $evento;
  endforeach;

  return json_encode($eventos_json);
}

 ?>
