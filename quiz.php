<!DOCTYPE html>
<html>

<head>

  <!-- Quiz.php's CCS file -->
  <link rel="stylesheet" href="QuizStyle.css">

  <title>Monday morning HTML Quiz</title>

</head>

<body>

  <h1>Section 1</h1>

  <!-- 1. Create an HTML document with:
  - title 'Monday morning HTML Quiz'
  - Page heading: 'Quiz'
  - paragraph: 'This document is for the Thursday afternoon quiz'
  - A numbered list with your answers to the remaining questions in sections 1 & 2

  2. What does HTML stand for?

  3. What is the purpose of HTML?

  4. Create a link to: www.example.com, that contains the text 'Click here'. Bonus point if the link opens in a new tab. -->

  <!-- Section 2: CSS
  5. What does it stand for?

  6. What is the purpose of CSS?

  7. Describe 2 ways of appling CSS rules to an HTML element.

  8. Create a CSS rule that causes text to appear red on a blue background for all paragraphs on the page. -->

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

  <h1>Section 3</h1>
  <p>Classes are important because they allow a programmer to group functions and variables into one contained object
    which won't interfere with another objects.</p>
  <p>Methods & functions</p>



  <!-- Section 3: Classes
      9. Why are classes considered helpful in application development?

      10. What 2 things does a class capture?

      11. Create a class that represents a Car.

      Provide 2 method signatures (not including the constructor - you choose the methods) that you feel would be helpful.
      Choose a few appropriate properties to model in your class.
      12. Show how your Car class may be instantiated and have one of its methods invoked (called). -->


  <!-- Form for Price Function within car.php -->
  <form class="" action="index.html" method="get">
    <input type="number" name="price" value="Submit">

    <br>

    <?php require 'car.php'; ?>

    <!-- Section 3: Variables / Flow control
        13. Create a loop that builds a 'bag' of all odd numbers between 0 and 100.
        <?php require 'oddBag.php' ?>

        14. Using your 'odd bag', determine the sum of these numbers.

        If the sum is greater than 2000, assign & output a result variable the message - "BIG"
        If equal to 2000 - "MEH"
        Otherwise - "SMALL"
        NB - bonus points are available if you organise your code into a class with an appropriate name & method etc. -->


        <!-- Section 4: Database Schemas
        15. What is a Schema, and what 3 core things does it consist of?

        16. How does a DB Schema map to (a) classes, and (b) instances of that class (objects)?

        17. Design a Schema that fits the following requirements:

        A car dealership requires an online showroom.
        They currently sell 3 makes of car - Audi, BMW, and Porsche.
        Each make has several models - Audi A3 & A4; BMW 323, 523 etc.
        The dealership has a number of salespeople.
        18. At the end of each month, it's important for the dealership to easily discover:

        Who was the 'best' salesman?
        What make of car was the most 'successful'?
        What model was the most 'successful'?
                -> Explain how they would find this out (SQL query if possible, or just describe in words).
                -> Any thoughts on 'best' / 'successful'? -->

<h1>Section 4</h1>

<p>A schema is a visual representation of a database. 3 core elements of a
  database schema include Tables, indexes and procedures.</p>

<p>In a schema map tables are corrspond to a class because the class do not change. An object is created from a class.</p>

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

  Who was the 'best' salesman?
  What make of car was the most 'successful'?
  What model was the most 'successful'?
          -> Explain how they would find this out (SQL query if possible, or just describe in words).
          -> Any thoughts on 'best' / 'successful'? -->

  <p>To identify the 'best' salesmen you need to identify the salesmen with the highest overall revenue for each month.
  To do this you would have to call the sale_price, the car_id and the sp_id from the Sales Table within the SQL database.
  Then you would multipul the car_id by the sales_price to find the total revenue for the dealership. Finally, you would
  divide the Total dealership revenue by the sp_id to work out the revenue for each sales person with the sales perso
  with the highest revenue being the most successful. You would then repeat this process for model by replacing sales_id
  with model.  </p>












</body>

</html>
