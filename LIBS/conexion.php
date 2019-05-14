<?php
/**
 *
 */
class Conexion {

  function __construct(){
    $this->bd = constant('bd');
    $this->usuarioBd = constant('usuarioBd');
    $this->pasword = constant('password');
    $this->pdo = null;
  }
  /** //////////////////////////////////////////////  */
            /** METODO CREA CONEXION BD*/
  /** //////////////////////////////////////////////  */
  public function conectar()  {

    if ($this->pdo == null) {
      try {

          $optiones = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES  => false
          ];
          $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=' . $this->bd , $this->usuarioBd , $this->pasword, $optiones);
          return $this->pdo;
      } catch (PDOException $e) {
          print "¡Error!: " . $e->getMessage() . "<br/>";
          die();
      }
    } else {
      return $this->pdo;
    }
  }

  /** //////////////////////////////////////////////  */
            /** METODO CERRA CONEXION BD*/
  /** //////////////////////////////////////////////  */
  public function cerrarCon(){
    $this->pdo = null;
  }

  /** //////////////////////////////////////////////  */
            /** METODO CERRA CONEXION BD*/
  /** //////////////////////////////////////////////  */

  /** //////////////////////////////////////////////  */
            /** ???????????????? */
  /** //////////////////////////////////////////////  */
  public function existeFinca($nombreF)  {
    $con = $this->conectar();
    $sql = "SELECT * FROM finca WHERE nombre = :nombre";
    $consulta = $con->prepare($sql);
    $consulta -> execute( array( ":nombre"=>$nombreF ) );
    $con = $this->cerrarCon();
    foreach ($consulta as $found) {
      return true;
    }
      return false;
  }

  /** //////////////////////////////////////////////  */
            /** ??????????????? */
  /** //////////////////////////////////////////////  */



}//clase

 ?>
