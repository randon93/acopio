<?php /**
 *
 */
class Router {

  private $sesion;
  function __construct() {
    require_once "MODEL/OBJ/finca.php";
    $sesion = new Sesion();
    $this->validarSesion();
  }

  private function validarSesion(){
    if ( !isset( $_SESSION['USER'] ) ) {
      //var_dump(isset( $_SESSION['USER'] ));
      $this->sesionOff();
    }else{ //var_dump(isset( $_SESSION['USER'] ));
      $this->sesionOn();
    }
  }

  private function sesionOn(){//echo "----sesion On";
    $url = isset($_GET['url']) ? $_GET['url']: "recibidor";
    $url = rtrim($url, '/');
    $url = explode('/', $url);
   //echo $url[0];
  //  echo $url[1];
    $archivo = "CONTROLADOR/$url[0]Controlador.php";
    if ( file_exists($archivo) ) {
      require_once $archivo;
      $nom = "$url[0]Controlador";
      $ctr = new $nom;
      $ctr->CrearModelo($url[0]);
      if ( isset($url[1]) ) { //echo "<h1>BUSCO MEDTODO</h1>";
        $ctr->{$url[1]}();
      }else{//echo "BUSCO VISTA";
        require_once "CONTROLADOR/vistasControlador.php";
        $ctrV = new vistasControlador();
        $ctrV -> CrearModelo("vistas");
        //$ctrV->getCtrVista()->render($url[0]);
        $ctrV -> {$url[0]}();
      }
    }else {
      require_once "CONTROLADOR/vistasControlador.php";
      $nom = "vistasControlador";
      $ctr = new $nom;
      $ctr->error();
      // echo "<a href=".constant('URL').">HOME</a>";
    }
  }

  private function sesionOff(){
    $url = isset($_GET['url']) ? $_GET['url']: 'inicio';
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    require_once "CONTROLADOR/$url[0]Controlador.php";
    $nom = "$url[0]Controlador";
    $ctr = new $nom;
    $ctr -> CrearModelo($url[0]);
    // echo "<h1> $url[1] </h1>";
    if ( isset($url[1]) ) { //echo "******busco metodos";
      $ctr->{$url[1]}();
    }else{
      $ctr -> getCtrVista() -> renderI($url[0]);
    }
    return false;
  }

  public function accion()  {
    // code...
  }
}
 ?>
