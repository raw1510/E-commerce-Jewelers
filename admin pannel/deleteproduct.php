<?php
include'connection.php';

if(isset($_GET['deleteidpro'])){
    $id = $_GET['deleteidpro'];

    $mysq = "DELETE FROM product WHERE id=$id";

    if(mysqli_query($conn , $mysq)){
       header("location:admin.php");
    }
    else{
        echo"delete unsuccesfull";
    }
}


?>