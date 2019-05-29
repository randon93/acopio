<?php /**
 *
 */
class Vista{

  function __construct() {
    // echo "<br /> CREANDO VISTA PADRE";
  }

  public function render($vista)  {
    if ( file_exists("VISTA/$vista.php") ) {
      define('VISTA', $vista);
      require_once "VISTA/plantilla.php";
    }else {
      require_once "VISTA/error.php";
    }
  }
}
 ?>
