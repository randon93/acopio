<?php /**
 *
 */
class RecibidorControlador extends Controlador{

  function __construct()  {
    parent::__construct();
  }

  public function registrarEntradaCafe() {
    if ( $_SESSION['TIPO'] == "RECIBIDOR" OR $_SESSION['TIPO'] == "ADMINISTRADOR" ) {
      $cantidadCafe = (int) $_POST['cantidad'];
      $procedencia = $_POST['proveedor'];
      if ( $cantidadCafe > 0 ) {
            $this->getCtrModel()->registrarEntradaCafe($cantidadCafe, $procedencia);
            header('Location:  http://127.0.0.1/acopio/vistas/recibidor');
        }else{
            $this->getCtrVista()->msj = "no se registro la entrada";
            header('Location:  http://127.0.0.1/acopio/vistas/error');
      }
      }else{
         header('Location:  http://127.0.0.1/acopio/vistas/error?msj=Tu sesion no tiene los suficientes previlegios para esta accion');
    }
    
  }

  public function almacenar()  {
    if ( $_SESSION['TIPO'] == "RECIBIDOR" OR $_SESSION['TIPO'] == "ADMINISTRADOR" ) {
        $entrada = $_POST['entrada'];
        $calidad = $_POST['calidad'];
        $cafe_tipo = $_POST['cafe_tipo'];
        $cantidad = $_POST['cantidad'];
        $c = $this->getCtrModel()->cantidadEntrada($entrada);
        // echo "<h1>$entrada -- $calidad -- $cafe_tipo -- $cantidad</h1>";
        if ( $cantidad > 0 AND $cantidad < $c['cant_cafe']) {
          if ( $this->getCtrModel()->almacenar($entrada, $calidad, $cafe_tipo, $cantidad) ) {
            header('Location:  http://127.0.0.1/acopio/vistas/recibidor');
          }
          // echo "<h1>hola</h1>";
        }else{
           header('Location:  http://127.0.0.1/acopio/vistas/error?msj=Ingresastes: '.$cantidad.'KG, cantidad no permitida');
        }
       
        // echo "<h1>hola</h1>";
    }
    else{
         header('Location:  http://127.0.0.1/acopio/vistas/error?msj=Tu sesion no tiene los suficientes previlegios para esta accion');
    }
  }

  public function aggFinca()  {
    if ( $_SESSION['TIPO'] == "ADMINISTRADOR" ) {
      $nombre = $_POST['nombre'];
      $direccion = $_POST['direccion'];
      $propietario = $_POST['propietario'];
      $this->getCtrModel()->aggFinca($nombre, $direccion, $propietario);
      header('Location:  http://127.0.0.1/acopio/vistas/recibidor');
    }else{
         header('Location:  http://127.0.0.1/acopio/vistas/error?msj=Tu sesion no tiene los suficientes previlegios para esta accion');
    }
  }

  public function aggCafe()  {
    if (  $_SESSION['TIPO'] == "ADMINISTRADOR" ) {
      $id = $_POST['id'];
      $descripcion = $_POST['descripcion'];
      $this->getCtrModel()->aggCafe($id, $descripcion);
      header('Location:  http://127.0.0.1/acopio/vistas/recibidor');
    }else{
         header('Location:  http://127.0.0.1/acopio/vistas/error?msj=Tu sesion no tiene los suficientes previlegios para esta accion');
    }
  }

  public function aggPaca()  {
    if ( $_SESSION['TIPO'] == "ADMINISTRADOR" ) {
      $id = $_POST['id'];
      $peso = $_POST['peso'];
      $material= $_POST['material'];
      $this->getCtrModel()->aggPaca($id, $peso, $material);
      header('Location:  http://127.0.0.1/acopio/vistas/recibidor');
    }else{
         header('Location:  http://127.0.0.1/acopio/vistas/error?msj=Tu sesion no tiene los suficientes previlegios para esta accion');
    }
  }

  public function procesar()  {
    if ( $_SESSION['TIPO'] == "PROCESOS" OR $_SESSION['TIPO'] == "ADMINISTRADOR" ) {
      $cantidad = $_POST['cantidad'];
      $entrada = $_POST['entrada'];
      $tipoP = $_POST['tipoP'];
      $this->getCtrModel()->procesar($cantidad,$entrada,$tipoP);
      header('Location:  http://127.0.0.1/acopio/vistas/recibidor');
    }else{
         header('Location:  http://127.0.0.1/acopio/vistas/error?msj=Tu sesion no tiene los suficientes previlegios para esta accion');
    }
  }


}
 ?>