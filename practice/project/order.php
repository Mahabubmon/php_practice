<?php 
echo "<table style='border:solid 1px black'>";
echo "<tr><th>Id</th><th>Firstname</th><th>lastname</th>
</tr>";

class TableRowws extends RecursiveIteratorIterator{
  function __construct($it){
    parent::__construct($it,self::LEAVES_ONLY);
  }
  function current(){
    return "<td style='width:150px;border:1px solid black;'>"
    .parent::current()."</td>";
  }
  function begimChildren(){
    echo"<tr>";
  }
  function endChildre(){
    echo "</tr>" ."\n";
  }
}
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname",
  $username, $password);
  $conn->setAttribute(PDO::ATT_ERRMODE,
  PDO::ERRORMODE_EXCEPTION);
  $stmt =$conn->prepare("SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname"); 
  $stmt->execute();

  //set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchall())) as $k=>$v){
    echo "Error: " .$e->getMessage();
  }
  $conn = null;
  echo "</table>";
}



?>