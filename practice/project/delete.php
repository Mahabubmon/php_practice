<?php 
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";



try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
    $username,$password);
    //set the PDo reeor mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);

    //sql to delete a record
    $sql ="DELETE FROM MyGuets WHERE id=3";


    //Use exec()because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
}catch(PDOExceptio $e){
    echo $sql . "<br>" .$e->getMessage();
}
$conn = null;

?>