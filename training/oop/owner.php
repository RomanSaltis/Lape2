<?php
// include 'auto.php';
class Owner extends Auto
{
    public $ownerName = "Racer";

    public function getOwnerName()
    {
        return $this->ownerName. PHP_EOL;
    }
    public function getCarName()
    {
        echo "Owner->getCarName()". PHP_EOL;
        return $this->brand." ". $this->model." ".$this->color. PHP_EOL;
    }
    public function getFullInfo()
    {
        return $this->brand." ".$this->model." ".$this->color." owner is ".$this->ownerName;
    }
}

// $owner = new Owner("MB", "S","black");
// echo "Owner ".$owner->getOwnerName();
// echo $owner->getCarName();




?>