<?php /**
 *
 */
class loginControlador extends Controlador{

  function __construct()  {
    parent::__construct();
  }

    public function login()  {// echo "<h1>CONTROLADOR LOGIN</h1>";
      $user = $_POST['user'];
      $password = $_POST['password'];
      
      $user = $this->getCtrModel()->login($user, $password);
      if ( $user ) {
       $seccion = $_SESSION['USER']['seccion'];
       header("Location:  http://127.0.0.1/acopio/vistas/$seccion");
         //echo " -- ".$_SESSION['USER']['cedula'];
        // echo "<h1>".$_SESSION['TIPO']."</h1>";
      }else{
        echo "errorcito";
        // header('Location:  http://127.0.0.1/clinicaOdonto/vistas/error');
      }

    }

    public function cerrar()    {
      session_unset();
      session_destroy();
      header("Location:  http://127.0.0.1/acopio");
    }
}
 ?>
