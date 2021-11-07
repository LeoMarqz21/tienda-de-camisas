<?php 

  class usuarioController {
    
    /* public UsuarioController(){} */

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