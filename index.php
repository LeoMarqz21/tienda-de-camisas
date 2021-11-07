<?php
  
  require_once("autoload.php");
  require_once("./config/parameters.php");
  require_once("./views/layout/header.php");
  require_once("./views/layout/sidebar.php");

  function shoow_error(){
    $error = new errorController();
    $error->index();
  }
  
  if(isset($_GET['controller'])){
      $nombre_controlador = $_GET['controller'] . 'Controller';
  }else if(!isset($_GET['controller']) && !isset($_GET['action'])){
      $nombre_controlador = controller_default;
      $controlador = new $nombre_controlador();
  }else{
    shoow_error();
    exit();
  }

  if(class_exists($nombre_controlador)){
      $controlador = new $nombre_controlador();

      if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
          $action = $_GET['action'];
          $controlador->$action();
      }else if(!isset($_GET['controller']) && !isset($_GET['action'])){
        $action = action_default;
        $controlador->$action();
    }else{
        shoow_error();
      }
  }else{
    shoow_error();
  }

  require_once("./views/layout/footer.php");

?>