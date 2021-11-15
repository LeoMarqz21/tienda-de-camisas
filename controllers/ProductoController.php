<?php 

require_once("./models/producto.php");


class productoController {
  
  /* public UsuarioController(){} */
  
  public function index(){
    $product = new Product();
    $products = $product->getAll();
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
    Utils::isAdmin();
    if(isset($_POST)){
      $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
      $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
      $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
      $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
      $categoria_id = isset($_POST['categoria_id']) ? $_POST['categoria_id'] : false;
      $nombre_img = $_FILES["imagen"]["name"];
      $tipo_img = $_FILES['imagen']['type'];
      $tamano_img = $_FILES['imagen']['size']; //$_SERVER['DOCUMENT_ROOT']
      $directorio = $_SERVER['DOCUMENT_ROOT'] . "/tienda_master/uploads/";
      if($nombre && $descripcion && $precio && $stock && $categoria_id && $nombre_img != null && $tamano_img < 200000){
        if (($tipo_img == "image/gif")||($tipo_img == "image/jpeg")||($tipo_img == "image/jpg")||($tipo_img == "image/png")){
          $ruta = base_url . "uploads/" . $nombre_img;
           $product = new Product();
           $product->setCategoryId($categoria_id);
           $product->setName($nombre);
           $product->setDescription($descripcion);
           $product->setPrice($precio);
           $product->setStock($stock);
           $product->setOffer("null");
           $product->setImage($ruta);
           $save = $product->save();
           if($save){
             move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio . $nombre_img);
           }
           header("Location: " . base_url);
      }
    }
  
  }
}
  
  public function delete(){
    Utils::isAdmin();
    echo $_POST['id'];
  }


}

?>