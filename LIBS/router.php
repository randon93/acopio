<?php
//require_once 'controllers/errores.php';

class Router{

  function __construct(){
     // echo "<p>Nueva App</p>";

     $url = isset($_GET['url']) ? $_GET['url']: null;
     $url = rtrim($url, '/');
     $url = explode('/', $url);
 //var_dump($url);
     if(empty($url[0])){
            $archivoController = 'controlador/InicioControlador.php';
            require_once $archivoController;
            $controller = new InicioControlador();
            $controller->loadModel('inicio');
            $controller->getVistaCtr()->render('inicio');
            return false;
        }

     // var_dump($url);
     $archivoController = 'controlador/' . $url[0] . 'Controlador.php';

     if(file_exists($archivoController)){//echo "existo";
         require_once $archivoController;
         $contr = $url[0] . "Controlador";
         $controller = new $contr;
         $controller->loadModel($url[0]);
         if(isset($url[1])){
             $controller->{$url[1]}();
         }else {
           $controller->error();
         }
     }else{ //echo "no escisto";
          $archivoController = 'controlador/vistaControlador.php';
          require_once $archivoController;
          $controller = new vistaControlador();
          $controller->loadModel('inicio');
          $controller->getVistaCtr()->render('inicio');

     }
 }
}

?>
