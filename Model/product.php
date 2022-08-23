<?php

class Product
{
    private $description;
    private $unit;
    private $quantity;
    private $referancep;
   
    
   
    public function getDescription()
    {
        return $this->description;
    }
    public function getUnit()
    {
        return $this->unit;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }


    public function getReferancep()
    {
        return $this->referancep;
    }


    

    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function setReferancep($referancep)
    {
        $this->referancep = $referancep;
    }


   
    
  
    public function __construct($description , $unit , $quantity , $referancep)
    {
        $this->description = $description;
        $this->unit = $unit;
        $this->quantity = $quantity;
        $this->referancep = $referancep;
      


    }
}
