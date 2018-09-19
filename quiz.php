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





</body>

</html>
