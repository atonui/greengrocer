<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'registration';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die("Database connection is unsuccessful<br>".mysqli_connect_error($conn));
}



?>