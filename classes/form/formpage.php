<?php 
if(isset($_POST['username'])){
    $name = $_POST['username'];
    echo "Username is :" .$name;
}
?>

<form action="" method="post" name="myform" id="myform">
<table>
    <tr>
        <td>Username</td>
        <td><input type="text" name="username" require="1"></td>
    </tr>
    <tr>
        <td>Username</td>
        <td><input type="submit" Value="Submit"></td>
        <td><input type="reset" Value="Reset"></td>
    </tr>
</table>


</form>