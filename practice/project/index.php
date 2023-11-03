<?php 
require 'db-connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo-List</title>
    <link ref="stylesheet" href="style.css">
</head>
<body>
    <div class="main-section">
        <div class="add-section">
            <form action="">
                <input type="text"
                name="tiitle"
                placeholder="this field is required">
                <button type="submit">Add &nbsp;<span>&#43;</span></button>
            </form>
        </div>

        <?php 
        $todos = $conn->query("SELECT * FROM todos ORDER BY id DESC");
        ?>
        <div class="show-todo-section">
            <?php if($todos->rowcount()=== 0){?>
            <div class="todo-item"></div>
            <input type="checkbox">
            <h2>This is _____ _____</h2>
            <small>created:11/03/2023</small>
        </div>
        <?php }?>
    </div>
    
</body>
</html>