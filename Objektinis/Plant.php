<?php
//klases pavadinimas turi buti = file name
class Plant{
        public $name;
        public $is_yearling;

        function __construct($name = "", $is_yearling = false){
                $this->name = $name;
                $this->is_yearling = $is_yearling;
        }
        //get ir set naudojame, kad pasiekti private objektą iš skliaustų išorės
        function getName(){

        }

        function setName(){

        }

        function intro(){
                echo "<br>I am ".$this->name." plant, and I am" .$this->is_yearling."<br>";
        }

        public static function classDescription()
        {
                echo "<br> sita klase skirta augalams <br>";
        }

}


?>