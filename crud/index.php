<?php


try{
    new PDO("mysql:host=127.0.0.1;dbname=crud",'root','');

}catch(\Throwable $th){
    die($th->getMessage());
}