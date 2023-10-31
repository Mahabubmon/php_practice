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