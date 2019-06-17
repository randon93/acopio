<?php /**
 *
 */
class vistasControlador extends Controlador{

  function __construct()  {
    parent::__construct();
  }

  public function RECIBIDOR()  { //echo "<h1>perras</h1>";
    $this->getCtrVista()->fincas = $this->getCtrModel()->listFincas();
    $this->getCtrVista()->entradas = $this->getCtrModel()->listEntradas();
    $this->getCtrVista()->calidades = $this->getCtrModel()->listCalidades();
    $this->getCtrVista()->cafes = $this->getCtrModel()->listCafes();
    $this->getCtrVista()->almacen = $this->getCtrModel()->listAlmacen();
    $this->getCtrVista()->buenos = $this->getCtrModel()->buenaCalidad();
    $this->getCtrVista()->malos = $this->getCtrModel()->malaCalidad();
    $this->getCtrVista()->tipoP = $this->getCtrModel()->tipoP();
    $this->getCtrVista()->almacenes = $this->getCtrModel()->almacenes();
    $this->getCtrVista()->render("recibidor");
  }

  public function tablas()  {
    $this->getCtrVista()->fincas = $this->getCtrModel()->listFincas();
    $this->getCtrVista()->entradas = $this->getCtrModel()->listEntradas();
    $this->getCtrVista()->proceso = $this->getCtrModel()->proceso();
    $this->getCtrVista()->renderD("recibidor","tabla");
  }

  public function PROCESOS()  {
    $this->getCtrVista()->fincas = $this->getCtrModel()->listFincas();
    $this->getCtrVista()->entradas = $this->getCtrModel()->listEntradas();
    $this->getCtrVista()->calidades = $this->getCtrModel()->listCalidades();
    $this->getCtrVista()->cafes = $this->getCtrModel()->listCafes();
    $this->getCtrVista()->render("proceso");
  }
  public function error()  {
    $this->getVistaCtr()->render("error");
  }

  public function inicioAdmin()  {
    $this->getVistaCtr()->render("inicioAdmin");
  }
}
 ?>
