<?php

  class Utils {

    public static function deleteSession($name){
        if(isset($_SESSION[$name])){
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }

    public static function isAdmin(){
      $isAdmin = false;
      if(!isset($_SESSION['admin'])) header("Location: " . base_url);
      else $isAdmin = true;
      return $isAdmin;
    }

    public static function showCAtegories(){
      require_once("./models/categoria.php");
      $category = new Category();
      $categories = $category->getAll();
      return $categories;
    }

  }

?>