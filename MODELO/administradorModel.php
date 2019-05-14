<?php /**
 *
 */
class AdministradorModel extends Modelo{

  function __construct()  {
    parent::__construct();
  }

  public function registrarFinca($nombre, $direccion, $propietario)  {
    if ( !$this->bd->existeFinca($nombre) ) {
      $con = $this->bd->conectar();
      $sql = "INSERT INTO finca (nombre, direccion, propietario) VALUES (:nombre, :direccion, :propietario)";
      $consulta = $con -> prepare($sql);
      $consulta -> execute( array( "nombre"=>$nombre, ":direccion"=>$direccion, ":propietario"=>$propietario ) );
      return $this->bd->existeFinca($nombre);
    }else {
      return false;
    }
  }
}
 ?>
