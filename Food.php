<?php

class Food
{
    public $ingredients;
    public $type;
    public $weight;

    /**
     * Get the value of name
     */
    public function getIngredients()
    {
      return $this->ingredients;
    }
  
    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setIngredients($ingredients)
    {
      $this->ingredients = $ingredients;
  
      return $this;
    }
  
    /**
     * Get the value of services
     */
    public function getType()
    {
      return $this->type;
    }
  
    /**
     * Set the value of services
     *
     * @return  self
     */
    public function setType($type)
    {
      $this->type = $type;
  
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