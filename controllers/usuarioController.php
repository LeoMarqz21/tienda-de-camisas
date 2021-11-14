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
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
        $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;

        if($nombre && $apellidos && $email && $password){
          $usuario = new Usuario();
          $usuario->setNombre($nombre);
          $usuario->setApellidos($apellidos);
          $usuario->setEmail($email);
          $usuario->setPassword($password);
  
          if($usuario->save()){
            $_SESSION['register'] = "complete";
          }else{
            $_SESSION['register'] = "failed";
          }
  
        }else{
          $_SESSION['register'] = "failed";
        }
      }
      header("Location: " . base_url . "usuario/registro");

    }

    public function login(){
      $result = false;
      if(isset($_POST)){
        $usuario = new Usuario();
        $usuario->setEmail($_POST['email']);
        $usuario->setPassword($_POST['password']);
        $login = $usuario->login();
        if($login && is_object($login)){
          $result = true;
          $_SESSION['identity'] = $login;
          if($login->rol == 'admin'){
            $_SESSION['admin'] = true;
          }
        }
        header("Location: " . base_url);
      }
      return $result;
    }

    public function logout(){
      if(isset($_SESSION['identity'])){
        Utils::deleteSession('identity');
      }
      if(isset($_SESSION['admin'])){
        Utils::deleteSession('admin');
      }
      header("Location: " . base_url);
    }

  } //fin de clase

?>