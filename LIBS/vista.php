<?php /**
 *
 */
class Vista{

  function __construct() {
    // echo "<br /> CREANDO VISTA PADRE";
  }

  public function render($vista)  {
    if ( file_exists("VISTA/INICIO/$vista.php") ) {
      //define('VISTA', $vista);
      require_once "VISTA/INICIO/inicio.php";
    }else {
      require_once "VISTA/error.php";
    }
  }

  public function renderAdmin($vista){
    echo $vista;
    if ( file_exists("VISTA/ADMINISTRADOR/$vista/$vista.php") ) {
      define('VISTA', $vista);
      require_once "VISTA/plantillaAdmin.php";
    }else {
      require_once "VISTA/error.php";
    }
  }
}
 ?>
