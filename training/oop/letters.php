<?php

class Letters{

    const LETTERS = 'ABC';
    public $firstLetter;
    public $secondLetter;

    function __construct($fLetter = "", $sLetter = "")
    {
        echo "constructor attack ".PHP_EOL;
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
    public function getAll(){
        echo "getAll ".$this->getFirst()." and ". $this->getSecond();
    }

}

$show = new Letters("D", "G");
echo $show->getAll(). PHP_EOL;
// echo $show->getFirst();
// echo $show->getSecond();

class MyLetters extends Letters
{

}

$myletters = new MyLetters("V", "P");
echo " extendet class ".$myletters->getAll();



?>