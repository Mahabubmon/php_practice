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

?>