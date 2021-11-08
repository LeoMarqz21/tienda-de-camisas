<?php 

  require_once("./Models/usuario.php");

  class usuarioController {
    

    public function index(){
        echo "controlador usuario, Accion indice";
    }

    public function registro(){
      require_once("./views/usuario/registro.php");
    }

    public function saved(){
      if(isset($_POST)){
        print_r($_POST);
      }
    }

  }

?>