<?php

class Auto
{
    const WHEELS = 4;
    protected $brand;
    protected $model;
    protected $color;

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
    protected function getCarName()
    {
        echo "Auto->getCarName()". PHP_EOL;
        return $this->brand." ". $this->model." ".$this->color. PHP_EOL;
    }

}

class Owner extends Auto
{
    public static $bestCar = "2020";
    protected $ownerName = "Racer";

    public function getOwnerName()
    {
        return $this->ownerName. PHP_EOL;
    }   

    public function getAutoAndOwner()
    {
        return "Owner is ".$this->getOwnerName()." and his car is ". $this->getCarName();
    }
    public static function getBestCarDate()
    {
        return self::$bestCar;
    }
}

echo Owner::$bestCar."\n";
echo Owner::getBestCarDate();








?>