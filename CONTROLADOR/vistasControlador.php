<?php /**
 *
 */
class vistasControlador extends Controlador{

  function __construct()  {
    parent::__construct();
  }

  public function recibidor()  { //echo "<h1>perras</h1>";
    $this->getCtrVista()->fincas = $this->getCtrModel()->listFincas();
    $this->getCtrVista()->entradas = $this->getCtrModel()->listEntradas();
    $this->getCtrVista()->calidades = $this->getCtrModel()->listCalidades();
    $this->getCtrVista()->cafes = $this->getCtrModel()->listCafes();
    $this->getCtrVista()->render("recibidor");
  }

  public function error()  {
    $this->getVistaCtr()->render("error");
  }

  public function inicioAdmin()  {
    $this->getVistaCtr()->render("inicioAdmin");
  }
}
 ?>
