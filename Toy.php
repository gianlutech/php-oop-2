<?php

class Toy
{
    public $color;
    public $material;
    public $height;
    public $width;
    public $weight;

    public function __construct($color, $material, $height, $width, $weight)
    {
      $this->setName($color);
      $this->setCode($material);
      $this->setPrice($height);
      $this->setQuantity($width);
      $this->setBrand($weight);
      
    }

    /**
     * Get the value of name
     */
    public function getColor()
    {
      return $this->color;
    }
  
    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setColor($color)
    {
      $this->color = $color;
  
      return $this;
    }
  
    /**
     * Get the value of services
     */
    public function getMaterial()
    {
      return $this->material;
    }
  
    /**
     * Set the value of services
     *
     * @return  self
     */
    public function setMaterial($material)
    {
      $this->material = $material;
  
      return $this;
    }
    /**
     * Get the value of services
     */
    public function getHeight()
    {
      return $this->height;
    }
  
    /**
     * Set the value of services
     *
     * @return  self
     */
    public function setHeight($height)
    {
      $this->height = $height;
  
      return $this;
    }
    /**
     * Get the value of services
     */
    public function getWidth()
    {
      return $this->width;
    }
  
    /**
     * Set the value of services
     *
     * @return  self
     */
    public function setWidth($width)
    {
      $this->width = $width;
  
      return $this;
    }
    /**
     * Get the value of services
     */
    public function getWeight()
    {
      return $this->weight;
    }
  
    /**
     * Set the value of services
     *
     * @return  self
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
  
      return $this;
    }
}