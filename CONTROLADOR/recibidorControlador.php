<?php /**
 *
 */
class RecibidorControlador extends Controlador{

  function __construct()  {
    parent::__construct();
  }

  public function registrarEntradaCafe() {
    $cantidadCafe = (int) $_POST['cantidad'];
    $procedencia = $_POST['proveedor'];
    if ( $cantidadCafe > 0 ) {
          $this->getModelCtr()->registrarEntradaCafe($cantidadCafe, $procedencia);
          header('Location:  http://127.0.0.1/acopio/vistas/recibidor');
    }else{
          $this->getVistaCtr()->msj = "no se registro la entrada";
          header('Location:  http://127.0.0.1/acopio/vistas/error');
    }
  }

  public function almacenar()  {
    $entrada = $_POST['entrada'];
    $calidad = $_POST['calidad'];
    $cafe_tipo = $_POST['cafe_tipo'];
    $cantidad = $_POST['cantidad'];
    // echo "<h1>$entrada -- $calidad -- $cafe_tipo -- $cantidad</h1>";
    if ( $cantidad > 0 ) {
      if ( $this->getModelCtr()->almacenar($entrada, $calidad, $cafe_tipo, $cantidad) ) {
        header('Location:  http://127.0.0.1/acopio/vistas/recibidor');
      }
      // echo "<h1>hola</h1>";
    }
    // echo "<h1>hola</h1>";
  }

  public function aggFinca()  {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $propietario = $_POST['propietario'];
    $this->getCtrModel()->aggFinca($nombre, $direccion, $propietario);
    header('Location:  http://127.0.0.1/acopio/vistas/recibidor');
  }

  public function aggCafe()  {
    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    $this->getCtrModel()->aggCafe($id, $descripcion);
    header('Location:  http://127.0.0.1/acopio/vistas/recibidor');
  }

  public function aggPaca()  {
    $id = $_POST['id'];
    $peso = $_POST['peso'];
    $material= $_POST['material'];
    $this->getCtrModel()->aggPaca($id, $peso, $material);
    header('Location:  http://127.0.0.1/acopio/vistas/recibidor');
  }


}
 ?>
