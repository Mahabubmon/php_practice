<?php 
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try{
    $conn = new PDO("msql:host=$severname;dbname=$dbname",
    $username, $password);

    //set the PDO error mode to exception
    $conn->setattribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

    //Prepare statment

    $stmt = $conn->preapare($sql);

    //execute the query
    $stmt->execute();

    //echo a message to say the Update
    echo $stmt->rowCount() ."records UPDATED successfully";
}catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

?>