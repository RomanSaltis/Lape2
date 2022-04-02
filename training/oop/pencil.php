<?php

class Pencil{
    const LONG = 9 . ' cm';
    public $color;
    public $secColor;
    public $material;
    public $secMaterial;

    function __construct($tColor= "", $tsecColor = "")
    {
        $this->color = $tColor;
    }

    public function getColor(){
        return $this->color;
    }
    public function setColor($tempColor)
    {
        $this->color = $tempColor;
    }

}

$pencil = new Pencil('yellow');

echo $pencil::LONG . "\n";
// $pencil->setColor('black');
echo $pencil->getColor();

?>