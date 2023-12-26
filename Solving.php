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


}


?>