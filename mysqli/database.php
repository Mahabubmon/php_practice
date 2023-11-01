<?php 
$server = "localhost";
$username = "username";
$password = "password";

//Create connection
$conn = new mysqli($servername, $username , $password);


//Check connection
if($conn->connect_error){
    die("connection failed" . $conn->connect_error);
}
echo "Connected successfully";


$conn->close();
?>

//procedural

<?php 
$servername = "localhost";
$username = "username";
$password = "password";

$conn = mysqli_connect($servername,$username,$password);

if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

mysqli_close($conn);
?>

<?php 
//pdo
$servername = "localhost";
$username = "username";
$password = "password";

try{
    $conn = new PDO("mysql:host=$servername;dbname=mydb",
    $username,$password);

    $conn->setattribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}catch(PDOExpection $e){
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;
?>

<?php 
$servername = "localhost";
$username = "username";
$password = "password";


//create connection
$conn = new mysqli($servername,$username,$password);

//Check connection
$sql ="CREATE DATABSE myDB";
if($conn->query($sql) === TRUE ){
    echo " Database created successfully";
}else {
    "Error createing database: " .$conn->error;
}
$conn->close();
?>

<?php 

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysql($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
}


$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
if($conn->query($sql) == TRUE){
    echo "Table MyGuests created successfully";
}else{
    echo "error creating table: " . $conn->error;
}
$conn->close();


?>

<?php 
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

//create conection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
    die("Connection falid: " . $conn->connect_error);
}

$sql = "INSER INTO MyGuests(firstname, lastname, email)
VALUES('John', 'Doe', 'john@example.com')";

if($conn->query($sql)=== TRUE){
    $last_id = $conn->insert_id;
    echo "New record created successfully". $last_id;
    
}else{
    echo "error:" .sql . "<br>" .$conn->error;
}

$conn->close();
?>

<?php 
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests(firstname,lastname,email)
VALUES('John', 'Doe', 'john@examlpe.com')";

if(mysqli_query($conn, $sql)){
    $last_id = mysqli_insert_id($conn);
  echo "New record created successfully. Last inserted ID is: " . $last_id;
}else{
    echo "Error: " .$sql . "<br>" .mysqli_error($conn);
}

mysqli_close($conn);
?>