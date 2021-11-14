<?php

  class Category {
    private $id;
    private $nombre;
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
        $this->id = $id;
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

    public function getAll(){
        $categories = $this->db->query("SELECT * FROM categorias ORDER BY id DESC");
        return $categories;
    }

    public function save(){
        $result = false;
        $save = $this->db->query("INSERT INTO categorias (nombre) VALUES('{$this->getNombre()}')");
        if($save) $result = true;
        return $result;
    }

  }//final 

?>