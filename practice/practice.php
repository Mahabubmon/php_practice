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



    //  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    //    Name: <input type="text" name="fname">
    //    <input type="submit">
    //  </form>

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

// <form action="welcome.php" method="post">
// Name: <input type="text" name="name"><br>
// E-mail: <input type="text" name="email"><br>
// <input type="submit">
// </form>


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
//  $nameErr = $emailErr = $genderErr = $websiteErr = "";
// $name = $email = $gender = $comment = $website = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["name"])) {
//     $nameErr = "Name is required";
//   } else {
//     $name = test_input($_POST["name"]);
//   }

//   if (empty($_POST["email"])) {
//     $emailErr = "Email is required";
//   } else {
//     $email = test_input($_POST["email"]);
//   }

//   if (empty($_POST["website"])) {
//     $website = "";
//   } else {
//     $website = test_input($_POST["website"]);
//   }

//   if (empty($_POST["comment"])) {
//     $comment = "";
//   } else {
//     $comment = test_input($_POST["comment"]);
//   }

//   if (empty($_POST["gender"])) {
//     $genderErr = "Gender is required";
//   } else {
//     $gender = test_input($_POST["gender"]);
//   }
// }

// <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

// Name: <input type="text" name="name">
// <span class="error">* <?php //echo $nameErr;?></span>
// <br><br>
// E-mail:
// <input type="text" name="email">
// <span class="error">* <?php //echo $emailErr;?></span>
// <br><br>
// Website:
// <input type="text" name="website">
// <span class="error"><?php //echo $websiteErr;?></span>
// <br><br>
// Comment: <textarea name="comment" rows="5" cols="40"></textarea>
// <br><br>
// Gender:
// <input type="radio" name="gender" value="female">Female
// <input type="radio" name="gender" value="male">Male
// <input type="radio" name="gender" value="other">Other
// <span class="error">* <?php //echo $genderErr;?></span>
// <br><br>
// <input type="submit" name="submit" value="Submit">

// </form>


// $name = test_input($_POST["name"]);
// if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
//   $nameErr = "Only letters and white space allowed";
// }

// //the e-mail address is not well-formed
// $email = test_input($_POST["email"]);
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//   $emailErr = "Invalid email format";
// }

// //Validate URL
// $website = test_input($_POST["website"]);
// if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
//   $websiteErr = "Invalid URL";
// }

// // define variables and set to empty values
// $nameErr = $emailErr = $genderErr = $websiteErr = "";
// $name = $email = $gender = $comment = $website = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["name"])) {
//     $nameErr = "Name is required";
//   } else {
//     $name = test_input($_POST["name"]);
//     // check if name only contains letters and whitespace
//     if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
//       $nameErr = "Only letters and white space allowed";
//     }
//   }

//   if (empty($_POST["email"])) {
//     $emailErr = "Email is required";
//   } else {
//     $email = test_input($_POST["email"]);
//     // check if e-mail address is well-formed
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//       $emailErr = "Invalid email format";
//     }
//   }

//   if (empty($_POST["website"])) {
//     $website = "";
//   } else {
//     $website = test_input($_POST["website"]);
//     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
//     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
//       $websiteErr = "Invalid URL";
//     }
//   }

//   if (empty($_POST["comment"])) {
//     $comment = "";
//   } else {
//     $comment = test_input($_POST["comment"]);
//   }

//   if (empty($_POST["gender"])) {
//     $genderErr = "Gender is required";
//   } else {
//     $gender = test_input($_POST["gender"]);
//   }
// }



//Name: <input type="text" name="name" value="<?php //echo $name;?>">

//E-mail: <input type="text" name="email" value="<?php //echo $email;?>">

//Website: <input type="text" name="website" value="<?php //echo $website;?>">

Comment: <textarea name="comment" rows="5" cols="40"><?php //echo $comment;?></textarea>

Gender:
<input type="radio" name="gender"
<?php //if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php //if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php //if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other -->

//date formate
<!-- echo "Today is " . date("Y/m/d") . "<br>";
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


//fclose,fgets
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);


//accessing a file
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

//append text
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile); -->


<!-- upload file -->
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>


<?php 
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]
["name"]);
$uploadOk = 1;
$imageFileType =
strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])){
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false){
    echo "File is an image - " . $check["mine"] . ".";
    $uploadOk = 1;
  }else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


?>

<?php 
//complete upload_file
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>


<?php 
//cookie
$cookie_name = "user";
$cookie_value = " Jon Doe";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30),"/");

?>

<html>
  <body>
    <?php 
    if(!isset($_COOKIE[$cookie_name])){
      echo "Cookie named '" . $cookie_name . "' is not set!";
    }else {
      echo "Cookie '". $cookie_name ."' is not set!";
      echo "Value is:" . $_COOKIE[$cookie_name];
    }
    
    ?>
  </body>
</html>

//modification of cookie
<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>

//delete cookie 
<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>


<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>


<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
print_r($_SESSION);
?>

</body>
</html>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>


<table>
  <tr>
    <td>Filter name</td>
    <td>Filter Id</td>
  </tr>

<?php 
 foreach (filter_list() as $id =>$filter)
{
  echo '<tr><td>' . $filter . '</td><td>' . filter_d($filter). '</td><tr>';
}
?>
</table>

<?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>

<?php
$int = 122;
$min = 1;
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  echo("Variable value is not within the legal range");
} else {
  echo("Variable value is within the legal range");
}
?>


<?php
$str = "<h1>Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?>

<?php
//call back function
function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>

<?php
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  // Calling the $format callback function
  echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");
?>
<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
?>


<?php 
$coder = aray ("Rahul","Arif","Tamim");
next($coder);
echo "The current position key is:".key($coder);

?>
<?php 
$coder = aray (
    "Rahul"=>"30",
    "Arif"=>"45",
    "Tamim"=>"20"
            );
krsort($coder );
foreach($coder as $key=>$value){
  echo "Name: ".$key.", Age:".$value."<br>";
}

<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

echo divide(5, 0);



?>







<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $e) {
  echo "Unable to divide.";
}
?>

<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $e) {
  echo "Unable to divide. ";
} finally {
  echo "Process complete.";
}
?>


<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} finally {
  echo "Process complete.";
}
?>

<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero", 1);
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $ex) {
  $code = $ex->getCode();
  $message = $ex->getMessage();
  $file = $ex->getFile();
  $line = $ex->getLine();
  echo "Exception thrown in $file on line $line: [Code $code]
  $message";
}
?>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
?>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>

<?php 
class FRUIT
{
  public $name;
  public $color;

  //method 
  function set_name($name){
    $this->name = $name;

  }
  function get_name(){
    return $this->name;
  }
  function set_color($color){
    $this->color = $color;
  }
  function get_color(){
    return $this->color;
  }

}
$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name:". $apple->get_name();
echo "<br>";
echo "color: " .$apple->get_color();
?>

<?php 
$apple = new Fruit();
var-dump($apple instanceof Fruit);
?>

//construct
<?php 
class Fruit
{
  public $name;
  public $color;

  function __construct(){
    $this->name = $name;
  }
  function get_name(){
    return $this->name;
  }
  # code...
}
$apple = new Fruit("Apple");
echo $apple->get_name();
?>
<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>

//destruct
<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "The fruit is {$this->name}.";
  }
}

$apple = new Fruit("Apple");
?>

//access modifier

<?php 
class Fruit
{
  public $name;
  protected $color;
  private $weight;
}


$mango = new Fruit();
$mango->name = 'Mango';
$mango->color = 'Yellow';//error
$weight->weight = '300';//error
?>

<?php
class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR
?>

//inheritenc
<?php 
class Furit{
  public $name;
  public $color;
  public function __construct($name,$color){
    $this->name = $name;
    $this->color = $color;

  }
  public function intro(){
    echo "The fruit {$this->name} and the color is{$this->color}.";
  }
}

class Strawberry extends Fruit {
  public function message(){
    echo "Am I a fruit or berry? ";
  }
}
$straberry = new Strawberry ("Strawberry","red");
$strawberry->message();
$strawberry->intro();
?>

<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}

// Try to call all three methods from outside class
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public
$strawberry->intro(); // ERROR. intro() is protected
?>


<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
    // Call protected method from within derived class - OK
    $this -> intro();
  }
}

$strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
$strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
?>

//overriding
<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

class Strawberry extends Fruit {
  public $weight;
  public function __construct($name, $color, $weight) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }
  public function intro() {
    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
  }
}

$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry->intro();
?>

//const

<?php 
class Goodbye
{
 const LEAVING_MESSAGE = "Thank you for your visiting my home";

}

echo Goodbye::LEAVING_MESSAGE;

?>

<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>


//abstruct class

<?php 
//Parent class

abstract class Car{
  public $name;
  public function __construct($name){
    $this->name = $name;
  }
  abstract public function intro(): string;
}

//Childe classes
class Audi extends Car{
  public function intro() : string{
    return "Chose German quality! I'm an $this->name";
  }
}

class Volvo extends Car{
  public function intro(): string{
    return "Proud  to be Muslim! I'm a $this->name!"
  }
}
class Citroen extends Car{
  public function intro(): string{
    return "French extravagance! I'm a $this->name!";
  }
}

//creation object
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo =new volvo ("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();


?>

<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  public function prefixName($name) {
    if ($name == "John Doe") {
      $prefix = "Mr.";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
?>

<?php 
interface Animal {
  public function makeSound();
}

class Cat implements animal{
  public function makeSound(){
    echo "Meow";
  }
}
$animal = new Cat();
$animal->makeSound();

?>


<?php 

//Interface definition
interface Animal{
  public function makeSound(){
    echo "Mewo";
  }
}
class Dog implements Animal
{
  public function makeSound(){
    echo "Bark";
  }
}
class Mouse implements Animal
{
  public function makeSound(){
    echo " Squeak ";
  }
}

//create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

//tel the animal to make a sound
foreach($animals as $animal){
  $animal->makeSound();
}

?>

<?php
class MyClass {
  use TraitName;
}
?>