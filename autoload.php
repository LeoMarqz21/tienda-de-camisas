<?php 
  
  function controllers_autoload($class){
      require_once("controllers/" . $class . ".php");
  }

  spl_autoload_register('controllers_autoload');
  
?>