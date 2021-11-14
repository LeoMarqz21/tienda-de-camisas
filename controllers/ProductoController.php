<?php 


class productoController {
  
  /* public UsuarioController(){} */
  
  public function index(){
    require_once("./views/producto/destacados.php");        
  }
  
  public function gestion(){
    Utils::isAdmin();
    require_once("./models/producto.php");
    $product = new Product();
    $products = $product->getAll();
    require_once("./views/producto/gestion.php");
  }

  public function crear(){
    require_once("./views/producto/crear.php");
  }

  public function save(){
    if(isset($_POST)){
      echo "id categoria: " . $_POST['categoria_id'];
    }
  }
  
  public function delete(){
    Utils::isAdmin();
    echo $_POST['id'];
  }


  }

?>