  <?php

  class Car
  {
    private $door;
    private $wheel;
    private $boot;
    private $engine;
    private $price;

    public function __construct($door, $wheel, $boot, $engine, $price)
    {
      $this->door = $door;
      $this->wheel = $wheel;
      $this->boot = $boot;
      $this->engine = $engine;
      $this->price = $price;
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
    public function setPrice()
    {
      $this->price = $_GET['price'];
      return $this->price;
    }
  }

  $car = new Car(1, 2, 3, 4, 5);
  var_dump($car);

  ?>
