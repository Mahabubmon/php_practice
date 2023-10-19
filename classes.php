<?php 
  
  //variable declaration
      $x = 5;
      $y = 9;
      $z = $x + $y;  
      echo "The sum of $x and $y is =  $z";

       //Variable with global scope
    $a= 9;//global scope
    function mytest(){
      // using x inside this function will generate an error
      echo "<p>Variable a inside function is: $a</p>";
      echo "<br>";

    }
  ?>