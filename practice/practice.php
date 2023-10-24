<!-- <?php 
  
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
//function
// function addNumbers(int $a, int $b){
//   return $a + $b;
// }

// echo addNumbers(5 , "5 days");

// //with striction
// declare(stric_types=1);
// function sumation(int $a, int $b){
//   return $a + $b;
// }

// echo sumation(5 , "5 days");

// declare (strict_types=1);

// function setHeight(int $minheight = 500 ){

//   echo "the min height is : $minheight<br>";
// }
// // setHeight(300);
// setHeight();


// declare (strict_types=1);
// function sum(int $x, int $y){
//   $z = $x + $y;
//   return $z;

// }
// echo "45 + 45 " . sum(45,45) . "<br>";
// echo "50 + 50 " . sum(50,50) . "<br>";

// function add_five(&$value) {
//   $value += 5;
// }

// $num = 2;
// add_five($num);
// echo $num;
//array
// $road = array("lalbag","posta","Azimpur");
// echo "my home".$road[0].",".$road[1].".";
// $arrlength = count($road);


// for($x = 0; $x < $arrlength; $x++){
//   echo $road[$x];
//   echo "<br>";
// }

// //foreach array
// $age = array("rahul"=>"30","tamim"=>"24","arif"=>"27");

// foreach($age as $X => $x_value){
//   echo "Key=" .$x . "value=". $x_value;
//   echo "<br>";
// }

// for ($row = 0; $row < 4; $row++) {
//   echo "<p><b>Row number $row</b></p>";
//   echo "<ul>";
//   for ($col = 0; $col < 3; $col++) {
//     echo "<li>".$cars[$row][$col]."</li>";
//   }
//   echo "</ul>";
// }


// $cars = array(
//   array("toyota",20,30),
//   array("Alion",15,45),
//   array("corolla",46,70),
// );

// echo $cars[0][0]."In stock". $cars[0][1]."sold".$cars[0][2]."<br>";

//multidimensional array for
// for($row = 0; $row < 4; $row++){
//   echo "<p>this is the Row number .$row. </p>";
//     echo"<ul>";
//     for($col = 0; $col < 3; $col++){
//       echo "<li>". $cars[$row][$col] ."</li>";
//     } 
//   echo "</ul>";
// }


 <html>
     <body>

     <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
       Name: <input type="text" name="fname">
       <input type="submit">
     </form>

   // <?php
     //if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // collect value of input field
      // $name = $_REQUEST['fname'];
       //if (empty($name)) {
         //echo "Name is empty";
       //} else {
        // echo $name;
       //}
     //} -->


  

//form     
<html>
<!-- <body>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body> -->
</html> 

<?php 
//  $name = $email = $gender = $comment = $website = "";


//  if($_SERVER["REQUEST_METHOD"]=="POST"){
//   $name = test_input($_POST["name"]);
//   $email = test_input($_POST["email"]);
//   $website = test_input($_POST["website"]);
//   $comment = test_input($_POST["comment"]);
//   $gender = test_input($_POST["gender"]);
//  }

//  function test_input($data){
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;

//  }
// define variables and set to empty values
 $nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail:
<input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Website:
<input type="text" name="website">
<span class="error"><?php echo $websiteErr;?></span>
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">

</form>


$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed";
}

//the e-mail address is not well-formed
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}

//Validate URL
$website = test_input($_POST["website"]);
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  $websiteErr = "Invalid URL";
}

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?>


//Name: <input type="text" name="name" value="<?php echo $name;?>">

//E-mail: <input type="text" name="email" value="<?php echo $email;?>">

//Website: <input type="text" name="website" value="<?php echo $website;?>">

Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other -->

//date formate
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

//time formate
echo "The time is " . date("h:i:sa");


$d= strtotime("8:38pm October 24 2023");
echo "created date is" . date("Y-m-d h:i:sa", $d);

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";