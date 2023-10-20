<?php 
  
//   //variable declaration
//       $x = 5;
//       $y = 9;
//       $z = $x + $y;  
//       echo "The sum of $x and $y is =  $z";

//        //Variable with global scope
//     $a= 9;//global scope
//     function mytest(){
//       // using x inside this function will generate an error
//       echo "<p>Variable a inside function is: $a</p>";
//       echo "<br>";

//     }


//     //local variable declaration
//     function test(){
//       $b = 4;//local variable
//       echo "<p>Variable b inside function is: $b</p>";
//     }
//     test();
//     echo "This is the value of a : $b";

//     mytest();
//     echo "This is the value of a : $a";
//   //global variable
//   $c = 5;
//   $d = 10;

//   function myTest1() {
//   global $c, $d;
//   $e = $c + $d;
//   }

//   myTest1();

//   echo $y;

//  //global-index
//   $f = 8;
//   $g = 7;
//   function myTest2() {
//     $GLOBALS['h'] = $GLOBALS['f'] + $GLOBALS['g'];
//   }
//   myTest2();
//   echo $h;

//   // //echo with variables
//   $text1 = "This is php";
//   $text2 = "This is programming";

//   echo "<h3>".$text1."</h3>";
//   print "<h3>".$text2."</h3>";

//   //string
// $x = "Hey it's me";
// $y = 'Hey its me';

// echo $x;
// echo "<br>";
// echo $y;
// echo "<br>";

// //var dump
// $z = 12345;
// $a = 124.45;

// var_dump($z);
// var_dump($a);
// //array
// $road = array ( "lalbag ","Posta","Azimpur"); 

// var_dump($road);

//   public function __construct($floor,$unit){
//     $this->floor = $floor;
//     $this->unit = $unit;
//   }

//   public function calculation(){
//     return "My Home is a" . $this->floor. "floor".$this->unit."unit";
    
//   }
  

// $myHome = new home("5 ","4");
// echo $myHome->calculation();

// //Null
// $x = "Hey' there";
// $x = null;
// echo $x;

// return string length
// echo strlen("Hello world!");


// //type of variable
// $x = 5985;
// var_dump(is_int($x));
// $y = 10.365;
// var_dump(is_float($y));

// //numeric value is finite or infinite
// $z = 1.9e411;
// var_dump($z);

// / // value is not a number
// $a = acos(8);
// var_dump($a);
// //Check if the variable is numeric
// $b = 4856;
// var_dump(is_numeric($b));

// // // Cast float to int
// $c = 23465.768;
// $int_cast = (int)$c;
// echo $int_cast;

// //math
// echo(pi());

// //argument lowest higest value
// echo(min(0, 150, 30, 20, -8, -200)); 
// echo(max(0, 150, 30, 20, -8, -200));

// //absulete positiv value
// echo(abs(-6.5));
// echo(sqrt(4));
// round
// echo(round(0.7));
// //random number
// echo(rand());
// with range by rand
// echo(rand(10, 100));

// // constant with sensitivity
// define("GREETING","hey looking for me");
// echo GREETING;
// // without sensitivity
// define("GREETING", "Welcome to W3Schools.com!", true);
// echo greeting;
// constant array
// define("road",[
//   "lalbag","posta","azimpur"]);
// echo road[0];
// //defin
// define("bag","yellowBag");

// function store(){
//   echo bag;
// }
// store();
// // if..else statement
// $x = date("H");

// if($x >"10"){
//   echo "Have a good day";
// }else{
//   echo "good morning";
  
// }

// $t = date("H");

// if ($t < "10") {
//   echo "Have a good morning!";
// } elseif ($t < "20") {
//   echo "Have a good day!";
// } else {
//   echo "Have a good night!";
// }
// //switch case
// switch
// $favdish = "meat";
// switch($favdish){
//   case "meat":
//   echo "favorite dish is meate";
//   break;
//   case "fish";
//   echo "It's good for health";
//   break;
//   default:
//   echo "your favorite dis none of them";
    
// }

// // loops
// $a = 1;
// while($a <= 5){
//   echo "this is the string: $a <br>";
//   $a++;
// }

// $b = 1;
// do{
//   echo "this is a number: $b <br>";
//   $b++;
// }while($b <= 5);

// for ($c=0; $c<=5; $c++){
//   echo $c;
// }

// //foreach
// $age = array("rahul"=>"29","tamim"=>"25","arif"=>"27");

// foreach($age as $value){
//   echo "$value <br>";
// }

// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach($age as $x => $val) {
//   echo "$x = $val<br>";
// }
// break
// for ($x = 0; $x < 10; $x++) {
//   if ($x == 4) {
//     break;
//   }
//   echo "The number is: $x <br>";
// }
// //continue
// for ($x = 0; $x < 10; $x++) {
//   if ($x == 4) {
//     continue;
//   }
//   echo "The number is2: $x <br>";
// }
//namespace
namespace App\classes;

class Student {
  public $name = "Mahabub";
}


  ?>