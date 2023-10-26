<?php 

class Home{

    public $name = "RAhul"; 
    public $unit;

    public function houseName(){

        echo "Home name is:".$this->name;

    }
    public function houseUnit(){


    }
    
}

$houseOne = new Home;
echo  $houseOne->name;
echo  $houseOne->houseName();


?>