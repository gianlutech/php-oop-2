<?php

class Product
{
    public $name;
    public $code;
    public $price;
    public $quantity;
    public $brand;
    public $description;
    public $picture;
    public $animal;


    public function __construct($name, $code, $price, $quantity, $brand, $description, $picture, $animal)
    {
      $this->setName($name);
      $this->setCode($code);
      $this->setPrice($price);
      $this->setQuantity($quantity);
      $this->setBrand($brand);
      $this->setDescription($description);
      $this->setPicture($picture);
      $this->setAnimal($animal);
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
      $this->name = $name;
  
      return $this;
    }
  
    /**
     * Get the value of services
     */
    public function getCode()
    {
      return $this->code;
    }
  
    /**
     * Set the value of services
     *
     * @return  self
     */
    public function setCode($code)
    {
      $this->code = $code;
  
      return $this;
    }
    /**
     * Get the value of services
     */
    public function getPrice()
    {
      return $this->price;
    }
  
    /**
     * Set the value of services
     *
     * @return  self
     */
    public function setPrice($price)
    {
      $this->price = $price;
  
      return $this;
    }
    /**
     * Get the value of services
     */
    public function getQuantity()
    {
      return $this->quantity;
    }
  
    /**
     * Set the value of services
     *
     * @return  self
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
  
      return $this;
    }
    /**
     * Get the value of services
     */
    public function getBrand()
    {
      return $this->brand;
    }
  
    /**
     * Set the value of services
     *
     * @return  self
     */
    public function setBrand($brand)
    {
      $this->brand = $brand;
  
      return $this;
    }
    /**
     * Get the value of services
     */
    public function getDescription()
    {
      return $this->description;
    }
  
    /**
     * Set the value of services
     *
     * @return  self
     */
    public function setDescription($description)
    {
      $this->description = $description;
  
      return $this;
    }
    /**
     * Get the value of services
     */
    public function getPicture()
    {
      return $this->picture;
    }
  
    /**
     * Set the value of services
     *
     * @return  self
     */
    public function setPicture($picture)
    {
      $this->picture = $picture;
  
      return $this;
    }
    /**
     * Get the value of services
     */
    public function getAnimal()
    {
      return $this->animal;
    }
  
    /**
     * Set the value of services
     *
     * @return  self
     */
    public function setAnimal($animal)
    {
      $this->animal = $animal;
  
      return $this;
    }
}