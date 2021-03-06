<?php /**
 *
 */
class loginModel extends Modelo{

  function __construct()  { //echo "creando login model";
    parent::__construct();
  }

  public function login($user, $password)  { 
      $sql = "SELECT * FROM administrador WHERE cedula = :cedula";
      
      $con = $this->bd->conectar();
      $consulta = $con -> prepare($sql);
      $consulta -> execute( array(":cedula"=>$user) );
      foreach ($consulta as $paciente) {
        if ( strcmp($paciente['PASSWORD'], $password) == 0 ) {       
           
            $personita = [ "cedula"=>$paciente['cedula'], "seccion"=>$paciente['seccion'], "nombre"=>$paciente['nombre'], "correo"=>$paciente['correo'] ];            
            $_SESSION['TIPO'] = $paciente['seccion'];
            $_SESSION['USER']  = $personita;            
            $con = $this->cerrarCon();
            return TRUE;
          
        }
      }//echo "NO LOGIE HPS";
      $con = $this->cerrarCon();
      return FALSE;
    
  }


  public function buscarAdmin($cedula)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("SELECT * FROM administrador WHERE cedula = $cedula");
    $consultar -> execute();
    foreach ($consultar as $value) {
      $con = $this->cerrarCon();
      return TRUE;
    }
    $con = $this->cerrarCon();
    return false;
  }

  
}
 ?>
