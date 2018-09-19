<!DOCTYPE html>
<html>

<head>

  <!-- Quiz.php's CCS file -->
  <link rel="stylesheet" href="QuizStyle.css">
  <!-- The Title require in Section 1 -->
  <title>Monday morning HTML Quiz</title>

</head>

<body>

  <!-- The Start of Section 1 & 2 -->

  <h1>Section 1</h1>

  <h1>Quiz</h1>
  <p>This document is for the Thursday afternoon quiz.</p>
  <ol>
    <li>What does HTML stand for?
      Hyper Text Markup Language
    </li>
    <li>To give structure to a webpage.</li>
    <li><a href="http://example.com/"target="_blank">Click to go to Example.com!</a></li>
    <li>What does it stand for? Custom Style Sheet</li>
    <li>CSS is the language used for describing the presentation of Web pages to the browser.</li>
    <li>CSS can be applied internally into the HTML by being directly placed within the header tags within the HTML.
      CSS can also be applied externally by linking to a seperate CSS file also within the HTML header tags.</li>
  </ol>

  <!-- The Start of Section 3 -->

  <h1>Section 3</h1>
  <p>Classes are important because they allow a programmer to group functions and variables into one contained object
    which won't interfere with another objects.</p>
  <p>Methods & functions</p>

  <!-- The car.php code  orginally written in a seperate file. -->

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

  <!-- Form for Price Function within car.php function used for testing.-->
    <form class="" action="index.html" method="get">
    <input type="number" name="price" value="Submit">

    <!-- The oddBag.php code also orginally written in a seperate file. -->

    <?php

      for ($i=1; $i<=99; $i+=2)
      {
              $bag [] = $i;
          }

      echo array_sum($bag);

        if ($bag >= 2001) {
          echo "Big Bag";
        }
        elseif ($bag = 2000) {
          echo "Meh";
        }
        elseif ($bag <= 1999) {
          echo "Small";
        }

    ?>

    <!-- The Start of Section 4 -->

    <h1>Section 4</h1>

    <p>A schema is a visual representation of a database. 3 core elements of a
      database schema include Tables, indexes and procedures.</p>

    <p>In a schema map tables are corrspond to a class because the class do not change. An object is created from a class.</p>

    <!-- The Database Schema Design -->

    <h2>Schema Design</h2>

    <h2>Car</h2>
    <ol>
      <li>car_id</li>
      <li>model</li>
      <li>engine</li>
      <li>RRP</li>
    </ol>

    <h2>Salesperson</h2>
    <ol>
      <li>sp_id</li>
      <li>name</li>
      <li>email</li>
    </ol>

    <h2>Sales</h2>
    <ol>
      <li>sale_price</li>
      <li>car_id</li>
      <li>sp_id</li>
    </ol>

    <!-- How to work out the best salesperson -->

    <p>To identify the 'best' salesmen you need to determine the salesmen with the highest overall revenue for each month.
      To do this you would have to call the sale_price, the car_id and the sp_id from the Sales Table within the SQL database.
      Then you would multiply the car_id by the sales_price to find the total revenue for the dealership. Finally, you would
      divide the Total dealership revenue by the sp_id to work out the revenue for each salesperson with the sales person with the
      highest revenue being the most successful. You would then repeat this process for the model by replacing sales_id with model. </p>


</body>

</html>
