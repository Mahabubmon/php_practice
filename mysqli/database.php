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

<?php 
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);

    //set the PDO error mode to exception

    $conn->setAttribute(PDO::attr_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
    
    //begin the the transaction
    $conn->beginTransaction();
    //our SQL statements
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')");
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Mary', 'Moe', 'mary@example.com')");
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Julie', 'Dooley', 'julie@example.com')");

  //commit the transaction
  $conn->commit();
  echo "New records created successfully";
}catch(PDOException $e){
    //roll back transaction if someting failed
    $conn->rollback();
    echo "Error:" . $e->getMessage();
}

$conn = null;

?>

<?php 
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//prepare and bind 
$stmt = $conn->prepare("INSER INTO mu=yGuests(firstname, lastname, email)VALUES(?,?,?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

//set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = " Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>

<?php 
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if($result->num_row > 0){

    //out put data of each row
    while($row = $result->fetch_assoc()){
        echo "id:" .$row['id']. "- Name:" .
        $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
}else{
    echo "0 results";
}

$conn->colse();
?>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

<?php 
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);

}

$sql = "SELECT id, firstname, lasname, FROM MyGuests Where lastname='Doe";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>


<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>


<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>