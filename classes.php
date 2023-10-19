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


    //local variable declaration
    function test(){
      $b = 4;//local variable
      echo "<p>Variable b inside function is: $b</p>";
    }
    test();
    echo "This is the value of a : $b";

    mytest();
    echo "This is the value of a : $a";
  //global variable
  $c = 5;
  $d = 10;

  function myTest1() {
  global $c, $d;
  $e = $c + $d;
  }

  myTest1();

  echo $y;

 //global-index
  $f = 8;
  $g = 7;
  function myTest2() {
    $GLOBALS['h'] = $GLOBALS['f'] + $GLOBALS['g'];
  }
  myTest2();
  echo $h;

  // //echo with variables
  $text1 = "This is php";
  $text2 = "This is programming";

  echo "<h3>".$text1."</h3>";
  print "<h3>".$text2."</h3>";


  ?>