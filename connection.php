<?php
$server_name = 'localhost';
$userName = 'root';
$password = '';
$DBName = 'crud';
$conn = new mysqli($server_name,$userName, $password , $DBName);
if(!$conn){
    die(mysqli_error($conn));
}