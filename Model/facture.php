<?php

class Facture
{
    private $name;
    private $address;
    private $phone;
    private $campany;
    private $addressc;
    private $phonec;
    private $referance;
    private $date;
    private $clientn;

    public function getName()
    {
        return $this->name;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    
    
    public function getCampany()
    {
        return $this->campany;
    }
    public function getAddressc()
    {
        return $this->addressc;
    }
    public function getPhonec()
    {
        return $this->phonec;
    }
    
    public function getReferance()
    {
        return $this->referance;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function getClientn()
    {
        return $this->clientn;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }






    public function setCampany($campany)
    {
        $this->campany = $campany;
    }
    public function setPhonec($phonec)
    {
        $this->phonec = $phonec;
    }
    public function setAddressc($addressc)
    {
        $this->addressc = $addressc;
    }

    public function setReferance($referance)
    {
        $this->referance = $referance;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function setClientn($clientn)
    {
        $this->clientn = $clientn;
    }

    public function __construct($name , $phone , $address, $campany , $phonec , $addressc, $referance , $date, $clientn)
    {
        $this->name = $name;
        $this->phone= $phone;
        $this->address = $address;
        $this->campany = $campany;
        $this->phonec = $phonec;
        $this->addressc = $addressc;
        $this->referance = $referance;
        $this->date = $date;
        $this->clientn = $clientn;

    }
}
