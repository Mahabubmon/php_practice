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


?>