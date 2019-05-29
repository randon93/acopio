<?php /**
 *
 */
class Controlador {

  private $model;
  private $vista;

  public function getVistaCtr()  {
    return $this->vista;
  }
  public function getModelCtr()  {
    return $this->model;
  }

  function __construct() {
    // echo " <br /> creando controlador padre";
    $this->loadView();
  }

  public function loadModel($modelName)  {
    $dir = "MODELO/$modelName"."Model.php";
    require_once $dir;
    $modelo = $modelName . "Model";
    //echo $modelo;
    $this->model = new $modelo;
  }

  public function loadView()  {
    $this->vista = new Vista();
  }
}
 ?>
