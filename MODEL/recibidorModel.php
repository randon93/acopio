<?php /**
 *
 */
class RecibidorModel extends Modelo {

  function __construct()  {
    // echo "<br />CREANDO MODELO RECIBIDRO";
    parent::__construct();
  }

  public function pr($finca)  {
    return $this->bd->existeFinca($finca);
  }

  public function registrarEntradaCafe($cantCafe,$procedencia)  {
    $con = $this->bd->conectar();
    $sql = "INSERT INTO entrada_cafe (cant_cafe,procedencia,fecha_ingreso) VALUES (:cant,:procedencia,:fecha)";
    $consultar = $con -> prepare($sql);
    $fecha_actual = date("Y/m/d H:i");echo $fecha_actual;
    $consultar -> execute( array( ":cant"=>$cantCafe, ":procedencia"=>$procedencia, ":fecha"=>$fecha_actual ) );

  }

  public function existo($tabla,$nombre)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("SELECT * FROM $tabla WHERE nombre = :nombre");
    $consultar -> execute(array(":nombre"=>$nombre));
    foreach ($consultar as $pro) {
      return true;
    }
    return false;
  }

  public function almacenar($entrada, $calidad, $cafe_tipo, $cantidad)  {
      $entradaCa = $this->infEntrada($entrada);
      $nuevaCantEntrada = $entradaCa['cantidad'] - $cantidad;
      $con = $this->bd->conectar();
      $consultar = $con -> prepare("INSERT INTO almacen (entrada, calidad, cafe_tipo, cantidad) VALUES (:entrada, :calidad, :cafe_tipo, :cantidad)");
      if ( $consultar -> execute( array( ":entrada"=>$entrada, ":calidad"=>$calidad, ":cafe_tipo"=>$cafe_tipo, ":cantidad"=>$cantidad ) ) ) {
        return $this->actualizarCantEntrada($nuevaCantEntrada, $entrada);
      }
    return false;
  }

  public function infEntrada($entrada)  {
    $con = $this->bd->conectar();
    $consulta = $con -> prepare("SELECT * FROM entrada_cafe WHERE id = :entrada ");
    $consulta -> execute(array(":entrada"=>$entrada));
    foreach ($consulta as $key) {
      return [ "id"=>$key['id'], "cantidad"=>$key['cant_cafe'], "proveedor"=>$key['procedencia'], "fecha"=>$key['fecha_ingreso'] ];
    }
    return false;
  }

  private function actualizarCantEntrada($cantNueva, $entrada)  {
    $con = $this->bd->conectar();
    $consulta = $con -> prepare("UPDATE entrada_cafe SET cant_cafe = :cantNueva WHERE id = :entrada");
    $consulta -> execute( array( ":cantNueva"=>$cantNueva, ":entrada"=>$entrada ) );
    if ( $consulta -> rowCount() ) {
      return true;
    }
    return false;
  }

  public function aggFinca($nombre, $direccion, $propietario)  {
    $con = $this->bd->conectar();
    $consultar = $con ->prepare("INSERT INTO `finca`(`nombre`, `direccion`, `propietario`) VALUES (:nombre, :direccion, :propietario)");
    $consultar -> execute( array(":nombre"=>$nombre, ":direccion"=>$direccion, ":propietario"=>$propietario) );
  }

  public function aggCafe($id, $descripcion)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("INSERT INTO `tipo_cafe`(`id`, `descripcion`) VALUES (:id, :descripcion)");
    $consultar -> execute( array(":id"=>$id, ":descripcion"=>$descripcion) );
  }

  public function aggPaca($id, $peso, $material)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("INSERT INTO `tipo_paca`(`id`, `peso`, `material`) VALUES (:id,:peso,:material)");
    $consultar -> execute( array(":id"=>$id, ":peso"=>$peso, ":material"=>$material) );
  }

}
 ?>
