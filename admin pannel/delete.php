<?php
include'connection.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $mysq = "DELETE FROM customer WHERE id=$id";

    if(mysqli_query($conn , $mysq)){
       header("location:admin.php");
    }
    else{
        echo"delete unsuccesfull";
    }
}


?>