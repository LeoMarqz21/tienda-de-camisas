<?php

  class Product {
      private $id;
      private $categoryId;
      private $name;
      private $description;
      private $price;
      private $stock;
      private $offer;
      private $date;
      private $image;
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
       * Get the value of categoryId
       */ 
      public function getCategoryId()
      {
            return $this->categoryId;
      }

      /**
       * Set the value of categoryId
       *
       * @return  self
       */ 
      public function setCategoryId($categoryId)
      {
            $this->categoryId = $this->db->real_escape_string($categoryId);

            return $this;
      }

      /**
       * Get the value of name
       */ 
      public function getName()
      {
            return $this->name;
      }

      /**
       * Set the value of name
       *
       * @return  self
       */ 
      public function setName($name)
      {
            $this->name = $this->db->real_escape_string($name);

            return $this;
      }

      /**
       * Get the value of description
       */ 
      public function getDescription()
      {
            return $this->description;
      }

      /**
       * Set the value of description
       *
       * @return  self
       */ 
      public function setDescription($description)
      {
            $this->description = $this->db->real_escape_string($description);

            return $this;
      }

      /**
       * Get the value of price
       */ 
      public function getPrice()
      {
            return $this->price;
      }

      /**
       * Set the value of price
       *
       * @return  self
       */ 
      public function setPrice($price)
      {
            $this->price = $this->db->real_escape_string($price);

            return $this;
      }

      /**
       * Get the value of stock
       */ 
      public function getStock()
      {
            return $this->stock;
      }

      /**
       * Set the value of stock
       *
       * @return  self
       */ 
      public function setStock($stock)
      {
            $this->stock = $this->db->real_escape_string($stock);

            return $this;
      }

      /**
       * Get the value of offer
       */ 
      public function getOffer()
      {
            return $this->offer;
      }

      /**
       * Set the value of offer
       *
       * @return  self
       */ 
      public function setOffer($offer)
      {
            $this->offer = $this->db->real_escape_string($offer);

            return $this;
      }

      /**
       * Get the value of date
       */ 
      public function getDate()
      {
            return $this->date;
      }

      /**
       * Set the value of date
       *
       * @return  self
       */ 
      public function setDate($date)
      {
            $this->date = $date;

            return $this;
      }

      /**
       * Get the value of image
       */ 
      public function getImage()
      {
            return $this->image;
      }

      /**
       * Set the value of image
       *
       * @return  self
       */ 
      public function setImage($image)
      {
            $this->image = $image;

            return $this;
      }

      /* ------------- */

      public function getAll(){
          $products = $this->db->query("SELECT * FROM productos ORDER BY id DESC");
          return $products;
      }

      public function save(){
            $result = false;
            $query = "INSERT INTO productos (categoria_id, nombre, descripcion, precio, stock, oferta, fecha, imagen) VALUES ('{$this->getCategoryId()}', '{$this->getName()}', '{$this->getDescription()}', '{$this->getPrice()}', '{$this->getStock()}', 'NULL', 'CURDATE()', '{$this->getImage()}')"; 
            $save = $this->db->query($query);
            if($save){
                  $result = true;
            }
            return $result;
      }

  }

?>