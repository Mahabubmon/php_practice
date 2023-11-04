<?php


try{
   $pdo = new PDO("mysql:host=127.0.0.1;dbname=crud",'root','');

}catch(\Throwable $th){
    die($th->getMessage());
}

$query ="CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    usernaem VARCHAR(255)NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255)NOT NULL,
    thumbnail VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$stm =  $pdo->prepare($query);
$stm->execute();