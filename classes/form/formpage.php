<script>

    function foramFunction(){
    var name = document.myform.username.value;
    var showData = "Username : "+name;
    document.getElementById('output').innerHtml = showData;  
    }
</script>

<?php 
if(isset($_POST['gender'])){
    $gen = $_POST['gender'];
    echo $gen;
}

?>

<div id="output"></div>
<form action="" method="post" name="myform" id="myform" onsubmit="formFunction();">
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
    <tr>
        <td>Gender</td>
        <td></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><input type="radio" name="gender" Value="male">Male</td>
        <td><input type="radio" name="gender" Value="female">Female</td>
    </tr>
</table>


</form>