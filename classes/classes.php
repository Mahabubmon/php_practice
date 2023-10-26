<?php 

class Home{

    public $name = "RAhul"; 
    public $unit;

    public function houseName(){

        echo "Home name is:".$this->name."<br/>";

    }
    public function houseUnit($value){
        echo "Home unit is about:".$this->unit=$value;

    }
    
}

$houseOne = new Home;
echo  $houseOne->name;
echo  $houseOne->houseName();
echo  $houseOne->houseUnit("50");


?>