<?php /**
 *
 */
class Principal extends Modelo {

  function __construct()  {

  }

  public function buscarFincas() {
    $fincas = [];
    $con = $this->bd->conectar();
    $sql = "SELECT * FROM finca";
    $consultar = $con -> prepare($sql);
    $consultar-> execute();
    foreach ($consultar as $finca) {
      $fincaa = new Finca();
      $fincaa -> crear( ["nombre"=>$finca['nombre'], "id"=>$finca['id'], "propietario"=>$finca['propietario'], "direccion"=>$finca['direccion'] ]);
      array_push($fincas, $fincaa);
    }
    $con = $this->bd->cerrarCon();
    return $fincas;
  }

  public function buscarFinca($finca)  {
  
    $con = $this->bd->conectar();
    $sql = "SELECT * FROM finca WHERE nombre = :nombreF";
    $consultar = $con -> prepare($sql);
    $cosnultar -> execute( array( ":nombreF"=>$finca ) );
    foreach ($consultar as $finca) {
      if ( strcmp( $finca['nombre'], $finca ) = 0 ) {
        $fincaa = new Finca();
        $fincaa -> crear( ["nombre"=>$finca['nombre'], "id"=>$finca['id'], "propietario"=>$finca['propietario'], "direccion"=>$finca['direccion'] ]);
        $con = $this->bd->cerrarCon();
        return $fincaa;
      }
    }
    $con = $this->bd->cerrarCon();
    return null;
  }

  public function FunctionName()  {
    // code...
  }
}
 ?>
