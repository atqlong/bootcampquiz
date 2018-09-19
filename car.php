<?php

  class Car
  {
    private $door;
    private $wheel;
    private $boot;
    private $engine;

    public function __construct($door, $wheel, $boot, $engine)
    {
        $this->door = $door;
        $this->wheel = $wheel;
        $this->boot = $boot;
        $this->engine = $engine;
    }
    public function getDoor()
    {
      return $this->door;
    }
    public function getWheel()
    {
      return $this->wheel;
    }
    public function getBoot()
    {
      return $this->boot;
    }
    public function getEngine()
    {
      return $this->engine;
    }
  }

  $car = new Car();
  echo $car;
  
 ?>
