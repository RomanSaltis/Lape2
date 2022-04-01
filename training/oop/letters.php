<?php

class Letters{

    const LETTERS = 'ABC';
    public $firstLetter;
    public $secondLetter;

    function __construct($fLetter = "", $sLetter = "")
    {
        $this->firstLetter = $fLetter;
        $this->secondLetter = $sLetter;
    }

    public function getFirst()
    {
        return $this->firstLetter;
    }
    public function getSecond()
    {
        return $this->secondLetter;
    }
    public function setFirst($character)
    {
        $this->firstLetter = $character;
    }

}

$show = new Letters("D", "G");
echo $show->getFirst();
echo $show->getSecond();

// $show->setFirst('A');
// echo $show->firstLetter. "\n";
// echo $show->getFirst();
// echo $show->getFirst(). "\n";
// echo $show->getSecond(). "\n";
// echo Letters::LETTERS. "\n";
// echo $show::LETTERS;

?>