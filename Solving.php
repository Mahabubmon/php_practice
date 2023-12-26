<?php
abstract class Vehicle
{
    protected $mechine;
    protected $wheel;
    protected $body;

    public function __construct($mechine, $wheel, $body)
    {
        $this->mechine = $mechine;
        $this->wheel = $wheel;
        $this->body = $body;
    }
    abstract public function getModel();

    public function getMechine()
    {
        return $this->mechine;
    }

    public function getWheel()
    {
        return $this->wheel;
    }

    public function getBody()
    {
        return $this->body;
    }

}

class Car extends Vehicle
{
    protected $model;

    public function __construct($mechine, $wheel, $body, $model)
    {
        parent::__construct($mechine, $wheel, $body);
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;

    }
}

$myCar = new Car("4V", "Four", "Steel", "Sedan");

echo "Mechine: " . $myCar->getMechine() . "<br>";
echo "Wheel: " . $myCar->getWheel() . "<br>";
echo "Body: " . $myCar->getBody() . "<br>";
echo "Model: " . $myCar->getModel() . "<br>";

echo "Car Model: " . $myCar->getModel() . "<br>";


?>