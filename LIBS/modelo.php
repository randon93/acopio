<?php /**
 *
 */
 require_once ('conexion.php');
class Modelo{

  function __construct()  {
    // echo "<BR />CREANDO MODELO PADRE";
    $this->bd = new Conexion();
  }
}
 ?>
