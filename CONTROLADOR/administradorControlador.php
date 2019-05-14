<?php /**
 *
 */
class AdministradorControlador extends Controlador{

  function __construct()  {
    parent::__construct();
    $this->loadModel('administrador');
  }

  public function registrarFinca()  {

    $nombre = $_POST['nombre'];
    $propietario = $_POST['propietario'];
    $direccion = $_POST['direccion'];
    if ( $this->getModelCtr()->registrarFinca($nombre, $propietario, $direccion) ) {
      echo " <br /><h1>exito</h1><br /> ";
    }else {
        echo " <br /><h1>NO exito</h1><br /> ";
    }

  }
  
}
 ?>
