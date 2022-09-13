
<?php
    session_start();
    $user = "root";
    $pass = "";
    $servername = "localhost";
    $database = "adminpanel";
    
    $conn = mysqli_connect($servername , $user , $pass , $database);
    if(!$conn){
        echo"nai chale";
    }
    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }
    if(isset($_SESSION['username'])){
        $email = $_SESSION['username'];
        $sql = "select fname,lname,mobile,address,email from customer where email='$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $fname = $row["fname"];
                $lname = $row["lname"];

                $name = $fname." ".$lname;

                $mobile = $row["mobile"];
                $address = $row["address"];
                $email = $row["email"];
            }
          }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <style>
          body{
              padding: none;
              margin: none;
          }
          .card{
              width: 40%;
              border-radius: 50px;
              height: 500px;
              box-shadow: 10px 21px 30px 0px rgba(0,0,0,0.75);
              -webkit-box-shadow: 10px 21px 30px 0px rgba(0,0,0,0.75);
              -moz-box-shadow: 10px 21px 30px 0px rgba(0,0,0,0.75);
              position: absolute;
              left: 50%;
              transform: translate(-50%, 0);
              
          }
          .card-inner{
            text-align: center;
            width: 100%;
          }
          .card-inner span{
            font-size:100px;
          }
          .title{
              font-size:20px;
          }

      </style>
</head>
<body>
    <div class="card">
        <div class="card-inner">
            <span class="material-icons">account_circle</span>
        </div>
        <div class="card-content">
        <table>
            <tr>
                <td><span class="title">Name:- </span></td>
                <td><?php 
                echo $name;?></td>
            </tr>
            <tr>
                <td><span class="title"> Phone:- </span></td>
                <td><?php 
                echo $mobile;?></td>
            </tr>
            <tr>
                <td><span class="title"> Email:- </span></td>
                <td><?php 
                echo $email;?></td>
            </tr>
            <tr>
                <td><span class="title"> Address:-</span> </td>
                <td><?php 
                echo $address;?></td>
            </tr>
        </table>
         
        <form method="post">
        <input type="submit" name="logout" value="logout"><?php 
                    if(isset($_POST['logout'])){
                        session_unset();
                        session_destroy();
                        exit;
                        header("location:login.php");
                    }
            ?></form>
    </div>
</div>
</body>
</html>