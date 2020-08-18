<?php

class CTest {
    public $Price = 10;
    public $dataBag = [];

    public function __set($k, $v) {
        echo "__set is running $k, $v <br>";
        $this->dataBag[$k] = $v;
    }

    public function __get($k) {
        echo "__get is running <br>";
        return $this->dataBag[$k];
    }

}

$obj = new CTest();
echo $obj->Price . "<br>";
echo $obj->location . "<br>";
echo $obj->dataBag . "<br>";

?>