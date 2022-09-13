<?php
$user = "root";
$pass = "";
$servername = "localhost";
$database = "cart";
$conn = mysqli_connect($servername , $user , $pass , $database);
if(!$conn){
    echo"nai chale";
}
if(isset($_GET['deleteidpro'])){
    $price = $_GET['deleteidpro'];

    $mysq = "DELETE FROM carttable WHERE price=$price";

    if(mysqli_query($conn,$mysq)){
        header('location:mycart.php');
    }
    else{
        echo"delete unsuccesfull";
    }
}
?>