<?php /**
 *
 */
class Finca{
    private $nombre;
    private $direccion;
    private $id;
    private $propietario;

  function __construct() {
    // echo "CREANDO FINCA";
  }

  public function crear($finca)  {
  $this->nombre = $finca['nombre'];
  $this->direccion = $finca['direccion'];
  $this->id = $finca['id'];
  $this->propietario = $finca['propietario'];
  }

  public function getNombre()  {
    return $this->nombre;
  }

  public function getDireccion()  {
    return $this->direccion;
  }

  public function getId()  {
    return $this->id;
  }

  public function getPropietario()  {
    return $this->propietario;
  }
}
 ?>
