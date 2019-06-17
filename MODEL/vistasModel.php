<?php /**
 *
 */
class VistasModel extends Modelo{

  function __construct()  { //echo "creando vista model";
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

  public function listAlmacen()  {
    $con = $this->bd->conectar();
    $consulta = $con -> prepare("SELECT * FROM almacen a INNER JOIN entrada_cafe e ON a.entrada = e.id");
    $consulta -> execute();
    $array = [];
    foreach ($consulta as $calidad) {
      $cali = [ "id"=>$calidad['id'], "entrada"=>$calidad['entrada'], "calidad"=>$calidad['calidad'], "cafe_tipo"=>$calidad['cafe_tipo'], "cantidad"=>$calidad['cantidad'], "procedencia"=>$calidad['procedencia'] ];
      array_push($array, $cali);
    }
    return $array;
  }

  public function almacenes()  {
     $con = $this->bd->conectar();
    $consulta = $con -> prepare("SELECT * FROM almacen");
    $consulta -> execute();
    $array = [];
    foreach ($consulta as $calidad) {
      $cali = [ "id"=>$calidad['id'], "entrada"=>$calidad['entrada'], "calidad"=>$calidad['calidad'], "cafe_tipo"=>$calidad['cafe_tipo'], "cantidad"=>$calidad['cantidad'] ];
      array_push($array, $cali);
    }
    return $array;
  }



  public function malaCalidad()  {
    $con = $this->bd->conectar();
    $malos = [];
    $consultar = $con -> prepare("SELECT *, SUM(a.cantidad) as total FROM almacen a INNER JOIN entrada_cafe e ON a.entrada = e.id WHERE a.calidad = '2' GROUP BY e.procedencia ORDER BY procedencia DESC");
    $consultar -> execute();
    foreach ($consultar as $malo) {
      $ma = [ "id"=>$malo['id'], "entrada"=>$malo['entrada'], "calidad"=>$malo['calidad'], "cafe_tipo"=>$malo['cafe_tipo'], "cantidad"=>$malo['cantidad'], "procedencia"=>$malo['procedencia'], "total"=>$malo['total'] ];
      array_push($malos, $ma);
    }
   
    return $malos;
  }

  public function buenaCalidad()  {
    $con = $this->bd->conectar();
    $beunos = [];
    $consultar = $con -> prepare("SELECT *, SUM(a.cantidad) as total FROM almacen a INNER JOIN entrada_cafe e ON a.entrada = e.id WHERE a.calidad = '1' GROUP BY e.procedencia ORDER BY procedencia DESC");
    $consultar -> execute();
    foreach ($consultar as $malo) {
       $ma = [ "id"=>$malo['id'], "entrada"=>$malo['entrada'], "calidad"=>$malo['calidad'], "cafe_tipo"=>$malo['cafe_tipo'], "cantidad"=>$malo['cantidad'], "procedencia"=>$malo['procedencia'], "total"=>$malo['total'] ];
      array_push($beunos, $ma);
    }
    
    return $beunos;
  }

  public function tipoP()  {
    $con = $this->bd->conectar();
    $beunos = [];
    $consultar = $con -> prepare("SELECT * FROM tipo_secado");
    $consultar -> execute();
    foreach ($consultar as $malo) {
       $ma = [ "id"=>$malo['id'], "nombre"=>$malo['nombre'], "tiempo"=>$malo['tiempo'] ];
      array_push($beunos, $ma);
    }
    
    return $beunos;
  }

  public function proceso()  {
    $con = $this->bd->conectar();
    $beunos = [];
    $consultar = $con -> prepare("SELECT * FROM secado_limpieza");
    $consultar -> execute();
    foreach ($consultar as $malo) {
       $ma = [ "id"=>$malo['id'], "tipo"=>$malo['tipo'], "cantidad"=>$malo['cant_cafe'], "entrada"=>$malo['cafe_almacen'] ];
      array_push($beunos, $ma);
    }
    
    return $beunos;
  }
}
 ?>
