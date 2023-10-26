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
    if($gen == "Male"){
        echo "You are male";
    }elseif($gen == "Female"){
        echo "you are a Female";

    }else{
        echo "Others";
    }

}


if(isset($_POST['submit'])){
    $coder = $_POST['coder'];
    echo "You Have slected: ";
    
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
        <td>Gender</td>
        <td></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><input type="radio" name="gender" Value="male">Male</td>
        <td><input type="radio" name="gender" Value="female">Female</td>
        <td><input type="radio" name="gender" Value="other">Other</td>
    </tr>
    <tr>
        <td>Course</td>
        <td><input type="Checkbox" name="course" Value="php">PHP</td>
        <td><input type="Checkbox" name="course" Value="java">JAVA</td>
        <td><input type="Checkbox" name="course" Value="c#">C#</td>
    </tr>
    <tr>
        <td>Username</td>
        <td><input type="submit" Value="Submit"></td>
        <td><input type="reset" Value="Reset"></td>
    </tr>
</table>


</form>