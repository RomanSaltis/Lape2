<?php

class Auto
{
    const WHEELS = 4;
    public $brand;
    public $model;
    public $color;

    function __construct($tBrand = "", $tModel = "", $tColor = "")
    {
        echo "Auto Constructor". PHP_EOL;
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
    public function getCarName()
    {
        echo "Auto->getCarName()". PHP_EOL;
        return $this->brand." ". $this->model." ".$this->color. PHP_EOL;
    }

}

?>