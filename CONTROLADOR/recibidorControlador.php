<?php /**
 *
 */
class RecibidorControlador extends Controlador{

  function __construct()  {s
    parent::__construct();
  }

  public function registrarEntradaCafe() {
    $cantidadCafe = (int) $_POST['cantidad'];
    $procedencia = $_POST['proveedor'];
    if ( $cantidadCafe > 0 ) {
          $this->getModelCtr()->registrarEntradaCafe($cantidadCafe, $procedencia);
          header('Location:  http://127.0.0.1/acopio/vista/recibidor');
    }else{
          header('Location:  http://127.0.0.1/acopio/vista/error');
    }
  }

  public function almacenar()  {
    $entrada = $_POST['entrada'];
    $calidad = $_POST['calidad'];
    $cafe_tipo = $_POST['cafe_tipo'];
    $cantidad = $_POST['cantidad'];
    echo "<h1>$entrada -- $calidad -- $cafe_tipo -- $cantidad</h1>";
    if ( $cantidad > 0 ) {
      if ( $this->getModelCtr()->almacenar($entrada, $calidad, $cafe_tipo, $cantidad) ) {
        header('Location:  http://127.0.0.1/acopio/vista/recibidor');
      }
      echo "<h1>hola</h1>";
    }
    echo "<h1>hola</h1>";
  }


}
 ?>
