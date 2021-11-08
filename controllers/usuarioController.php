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
          echo "<h1>Usuario Registrado exitosamente!!</h1>";
          echo "<script>Swal.fire('Bien!!','Usuario registrado exitosamente!!','success')</script>";
        }else{
          echo "<h1>Usuario no registrado, algo salio mal</h1>";
          echo "<script>Swal.fire('Error','Algo salio mal, usuario no registado','error')</script>";
        }
      }
    }

  }

?>