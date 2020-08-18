<?php

class Animal {

    public function __construct($weightValue = 0) {
        $this -> weight = $weightValue;
        echo "Object created <br>";
    }

    public $weight = 1;

    function makeNoise() {
        echo "Animal: ...RRR <br>";
    }

    public function setWeight($value) {
        if ($value > 0) {
            $this->weight = $value;
        }
    }

    public function __destruct() {
        echo "Object destroyed.";
    }
}

$obj = new Animal();
$obj->weight = 10;
  
echo $obj->weight . "<br>";
echo $obj->MakeNoisE(); // 類別中的方法不分大小寫

$obj -> location = "Taichung" . "<br>";
echo $obj->location;

$obj->setWeight(7);
echo $obj->weight . "<br>";

$obj = null;

?>