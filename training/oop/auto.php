<?php

class Auto
{
    const WHEELS = 4;
    public $brand;
    public $model;
    public $color;

    function __construct($tBrand = "", $tModel = "", $tColor = "")
    {
        $this->brand = $tBrand;
        $this->model = $tModel;
        $this->color = $tColor;
    }

    public function getBrand()
    {
        return $this->brand;
    }
    public function getModel()
    {
        return $this->model;;
    }
    public function setBrand($tempBrand)
    {
        $this->brand = $tempBrand;
    } 

}

$autoObj = new Auto("MB", "S", "black");

echo $autoObj->getBrand(). "\n";
echo $autoObj->getModel(). "\n";

// echo Auto::WHEELS. " wheels";

// constant:
// echo $autoObj::WHEELS;
// echo Auto::WHEELS;

// echo $autoObj->brand."\n"; 
// $autoObj->brand = "Opel";
// echo $autoObj->brand."\n";
// echo $autoObj->brand. "\n";

// $autoObj->setBrand("Opel");
// echo $autoObj->brand. "\n";
// echo $autoObj->getBrand()."\n";
// $autoObj->setBrand("Kia");
// echo $autoObj->getBrand(). "\n";
// echo $autoObj->brand. "\n";




?>