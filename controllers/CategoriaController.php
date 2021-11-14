<?php 

  require_once("./models/categoria.php");
  class categoriaController {
    

    public function index(){
      $category = new Category();
      $categories = $category->getAll();
        require_once("./views/categoria/index.php");
    }


    public function crear(){
      Utils::isAdmin();
      require_once("./views/categoria/crear.php");
    }

    public function save(){
      Utils::isAdmin();
      if(isset($_POST['nombre'])){
        $category = new Category();
        $category->setNombre($_POST['nombre']);
        if($category->save()) $_SESSION['category'] = 'saved';
      }
      header("Location: " . base_url . "categoria/index");
    }

    public function delete(){
      Utils::isAdmin();
      if(isset($_POST['id'])){
        echo "Id categoria: " . $_POST['id'];
      }
      header("Location: " . base_url . "categoria/index");
    }


  }

?>