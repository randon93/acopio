<?php /**
 *
 */
class vistaControlador extends Controlador{

  function __construct()  {
    parent::__construct();
  }

  public function recibidor()  {
    $this->getVistaCtr()->fincas = $this->getModelCtr()->listFincas();
    $this->getVistaCtr()->entradas = $this->getModelCtr()->listEntradas();
    $this->getVistaCtr()->calidades = $this->getModelCtr()->listCalidades();
    $this->getVistaCtr()->cafes = $this->getModelCtr()->listCafes();
    $this->getVistaCtr()->renderAdmin("recibidor");
  }

  public function error()  {
    $this->getVistaCtr()->render("error");
  }

  public function inicioAdmin()  {
    $this->getVistaCtr()->render("inicioAdmin");
  }
}
 ?>
