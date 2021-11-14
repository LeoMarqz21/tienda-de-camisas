<?php

  class Usuario {

      private $id;
      private $nombre;
      private $apellidos;
      private $email;
      private $password;
      private $rol;
      private $imagen;
      private $db;

      public function __construct(){
          $this->db = Database::connect();
      }

      /**
       * Get the value of id
       */ 
      public function getId()
      {
            return $this->id;
      }

      /**
       * Set the value of id
       *
       * @return  self
       */ 
      public function setId($id)
      {
            $this->id = $this->db->real_escape_string($id);
            return $this;
      }

      /**
       * Get the value of nombre
       */ 
      public function getNombre()
      {
        return $this->nombre;
      }

      /**
       * Set the value of nombre
       *
       * @return  self
       */ 
      public function setNombre($nombre)
      {
            $this->nombre = $this->db->real_escape_string($nombre);
            return $this;
      }

      /**
       * Get the value of apellidos
       */ 
      public function getApellidos()
      {
        return $this->apellidos;
      }

      /**
       * Set the value of apellidos
       *
       * @return  self
       */ 
      public function setApellidos($apellidos)
      {
            $this->apellidos = $this->db->real_escape_string($apellidos);
            return $this;
      }

      /**
       * Get the value of email
       */ 
      public function getEmail()
      {
        return $this->email;
      }

      /**
       * Set the value of email
       *
       * @return  self
       */ 
      public function setEmail($email)
      {
            $this->email = $this->db->real_escape_string($email);
            return $this;
      }

      /**
       * Get the value of password
       */ 
      public function getPassword()
      {
        return $this->password;
      }

      public function getEncryptedPassword(){
        return password_hash($this->db->real_escape_string($this->password),PASSWORD_BCRYPT, ['cost'=>4]);
      }

      /**
       * Set the value of password
       *
       * @return  self
       */ 
      public function setPassword($password)
      {
            $this->password = $password;
            return $this;
      }

      /**
       * Get the value of rol
       */ 
      public function getRol()
      {
        return $this->rol;
      }

      /**
       * Set the value of rol
       *
       * @return  self
       */ 
      public function setRol($rol)
      {
            $this->rol = $this->db->real_escape_string($rol);
            return $this;
      }

      /**
       * Get the value of imagen
       */ 
      public function getImagen()
      {
        return $this->imagen;
      }

      /**
       * Set the value of imagen
       *
       * @return  self
       */ 
      public function setImagen($imagen)
      {
            $this->imagen = $this->db->real_escape_string($imagen);
            return $this;
      }

      /* db */

      public function save(){
          $query = "INSERT INTO usuarios (nombre, apellidos, email, password, rol, imagen) VALUES('{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}','{$this->getEncryptedPassword()}', 'user', 'null')";
          $resultado = false;
          $save = $this->db->query($query);
          if($save){
            $resultado = true;
          }
          return $resultado;
      }

      public function login(){
        $result = false;
        $query = "SELECT * FROM usuarios WHERE email='{$this->getEmail()}'";
        $login = $this->db->query($query);
        if($login && $login->num_rows == 1){
          $usuario = $login->fetch_object();
          $verify = password_verify($this->getPassword(), $usuario->password);
          if($verify){
            $result = $usuario;
          }
        }
        return $result;
      }
  }

?>