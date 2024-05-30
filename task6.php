<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
 
<div ><?php
echo"<h3><b><i>Associative array<b><i>:</h3>";
$food=array(
  "Ahamed"=>"Smarties","Joe"=>"Pingles","Cassie"=>"Marmite crisps","Ben"=>"Mr Kiplings cakes"
  ) ;
?>
</div>
<div>
<div class="container">
   <div class="alert alert-success">
 <?php?>
 <div class="container">
  <h2>Task6</h2>
  <p >Use an associative array to store information about 4 students and their favourite foods</p> 
  <p>Use a foreach loop to print 4 HTML paragraphs, which state “x likes y” foods</p>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>name</th>
        <th>food</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      foreach($food as$key => $value){
        echo "
        <tr> 
        <td>$key</td>
        <td>$value</td>
        </tr>";
      }
      ?>
    </tbody>
  </table>
</div>
  </div>
  <div>
  <div class="container">
   <div class="alert alert-success">
    <p>
    2.
Write a PHP script to check whether a number is positive, negative or zero.
Instructions:
•You can use if else conditions.
•You should use appropriate PHP Operators.
•Also check if it not a numeric value.
    </p>
   </div>

  <div>
  <div class="container">
   <div class="alert alert-success">
    <?php
   function checkNumber($num) {
    if ($num > 0) {
        echo "$num is positive.";
    } elseif ($num < 0)
     {
        echo "$num is negative.";
    } elseif($num==0) {
        echo "$num is zero.";}
      else {
          echo "it not a numeric value.";
        }

    }

  // Test cases
  $num1 = 10;
  $num2 = -5;
  $num3 = 0;
  $num4 = true;
  
  checkNumber($num1); // Output: 10 is positive.
  echo "<br>";
  checkNumber($num2); // Output: -5 is negative.
  echo "<br>";
  checkNumber($num3); // Output: 0 is zero.
  echo "<br>";
  checkNumber($num4);
    ?>
  </div>
  </body>
</html>
<?php
