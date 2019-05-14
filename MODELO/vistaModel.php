<?php /**
 *
 */
class VistaModel extends Modelo{

  function __construct()  {
    parent::__construct();
  }

  public function listFincas()  {
    $array =[];
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("SELECT * FROM finca");
    $consultar -> execute();
    foreach ( $consultar as $finc) {
      $fi = new Finca();
      $fi -> crear( [ "nombre"=>$finc['nombre'], "direccion"=>$finc['direccion'], "propietario"=>$finc['propietario'], "id"=>$finc['id'] ] );
      array_push($array, $fi);
    }
    return $array;
  }

  public function listEntradas()  {
    $array=[];
    $con = $this->bd->conectar();
    $consultar =  $con -> prepare("SELECT cant_cafe, procedencia, fecha_ingreso, id FROM entrada_cafe ORDER BY fecha_ingreso DESC");
    $consultar -> execute();
    foreach ($consultar as $entrada) {
      $entra = [ "cantidad"=>$entrada['cant_cafe'], "proveedor"=>$this->nombreFinca($entrada['procedencia']), "fecha"=>$entrada['fecha_ingreso'], "id"=>$entrada['id'] ];
      array_push($array, $entra);
    }
    return $array;
  }

  public function nombreFinca($id)  {
    $con = $this->bd->conectar();
    $consu = $con->prepare("SELECT nombre FROM finca WHERE id = $id");
    $consu -> execute();
    foreach ($consu as $k) {
        return $k['nombre'];
    }
  }

  public function listCalidades()  {
    $con = $this->bd->conectar();
    $consulta = $con -> prepare("SELECT * FROM calidad");
    $consulta -> execute();
    $array = [];
    foreach ($consulta as $calidad) {
      $cali = [ "id"=>$calidad['id'], "nombre"=>$calidad['descripcion'] ];
      array_push($array, $cali);
    }
    return $array;
  }
  public function listCafes()  {
    $con = $this->bd->conectar();
    $cosnulta = $con -> prepare("SELECT * FROM tipo_cafe");
    $cosnulta -> execute();
    $array = [];
    foreach ($cosnulta as $tipo) {
      $cafe = [ "id"=>$tipo['id'], "nombre"=>$tipo['descripcion'] ];
      array_push($array, $cafe);
    }
    return $array;
  }
}
 ?>
