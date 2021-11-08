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
        $usuario = new Usuario();
        $usuario->setNombre($_POST['nombre']);
        $usuario->setApellidos($_POST['apellidos']);
        $usuario->setEmail($_POST['email']);
        $usuario->setPassword($_POST['password']);

        if($usuario->save()){
          $_SESSION['register'] = "complete";
        }else{
          $_SESSION['register'] = "failed";
        }

      }else{
        $_SESSION['register'] = "failed";
        header("Location: " . base_url . "usuario/registro");
      }
      header("Location: " . base_url . "usuario/registro");

    }

  }

?>