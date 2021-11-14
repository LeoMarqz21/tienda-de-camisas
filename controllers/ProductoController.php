<?php 

  class productoController {
    
    /* public UsuarioController(){} */

    public function index(){
      require_once("./views/producto/destacados.php");        
    }

    public function gestion(){
      require_once("./views/producto/gestion.php");
    }
  }

?>