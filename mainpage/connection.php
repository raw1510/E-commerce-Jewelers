<?php

$user = "root";
$pass = "";
$servername = "localhost";
$database = "adminpanel";

$conn = mysqli_connect($servername , $user , $pass , $database);
if(!$conn){
    echo"nai chale";
}
?>