
<?php
// include'connection.php';
// if(isset($_POST['btn-signin'])){
//     $fname = $_POST['fname-sign'];
//     $lname = $_POST['lname-sign'];
//     $mobile = $_POST['phone-sign'];
//     $email = $_POST['email-sign'];
//     $address = $_POST['address-sign'];
//     $password = $_POST['password-sign'];

//     $sql = "INSERT INTO customer (fname , lname, mobile , email , address , password) VALUES ('$fname' , '$lname' , '$mobile' , '$email' , '$address' , '$password')";
//     if(mysqli_query($conn,$sql)){
//         echo '<script type="text/javascript">' . 
//         'document.getElementById("dashboard").style.display = "none";' .
//         '</script>';
//     }
//     else{
//         die(mysqli_error($conn));
//     }
    
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="logo-remove.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | PJ</title>
    <style>
        body{
    padding: 0px;
    margin: 0px;
}
.header-login{
    width: 100%;
    height: 50px;
    background-color: black;
}
.content-login{
    width: 100%;
    height: 640px;
    background: url("Image\ 8.png") no-repeat;
    background-size: cover;
    overflow: hidden;
}
.login-form{
    width: 40%;
    height: 500px;
    float: right;
    background-color: rgb(255, 255, 255,0.4);
    border-radius: 10%;
    margin-right: 200px;
    margin-top: 50px;
}
.title-login{
    width: 100%;
    text-align: center;
    font-size: xx-large;
    color: #0A8989;
    font-weight: 300;
}
.form-content{
    width: 100%;
}
.form-css{
    width: 70%;
    margin: auto;
    overflow: hidden;
}
.form-content form span input{
    width: 100%;
    margin-top: 20px;
    height: 50px;
    border-radius: 10px;
    outline: none;
    border: none;
}
#btn-login{
    padding: 20px;
    border-radius: 20px;
    width: 150px;
    margin-top: 50px;
    outline: none;
    border: none;
    position: relative;
    left: 115px;
    background: rgb(10,137,137);
    background: linear-gradient(90deg, rgba(10,137,137,1) 5%, rgba(0,212,255,1) 100%);
    font-size: 15px;
    color: white;
    font-weight:bolder;
}
.signin-link{
    width: 100%;
    margin-top: 20px;
}
.signin-link span, #sign-in{
    position: relative;
    left: 155px;
}
.signin-link #sign-in{
    color: #0A8989;
}
::placeholder{
    font-size: 15px;
    padding: 15px;
}
        .form-cont{
    position: relative;
    bottom: 23px;
}
.form-style{
    width: 73%;
    margin: auto;
    overflow: hidden;
}
.form-cont form span input{
    margin-top: 20px;
    height: 50px;
    border-radius: 10px;
    outline: none;
    border: none;
}
.form-style #add, #pass{
    width: 100%;
}
#btn-sign{
    padding: 20px;
    border-radius: 20px;
    width: 150px;
    margin-top: 10px;
    outline: none;
    border: none;
    position: relative;
    left: 96px;
    background: rgb(10,137,137);
    background: linear-gradient(90deg, rgba(10,137,137,1) 5%, rgba(0,212,255,1) 100%);
    font-size: 15px;
    color: white;
    font-weight:bolder;
}
.header-title{
            overflow: hidden;
            background-color: black;
            color: white;
            height: 75px;
        }
        .logo{
            padding: 15px;
            float: left;
            position: relative;
            top:14px;
            width: 143px;
            cursor: pointer;
            margin-left: 20px;
         }
         .logo img{
            width: 90%;
            position: relative;
            bottom: 36px;
         }
        .contents-header{
            float: right;
            display: flex;
            flex-direction: row;
            column-gap: 50px;
        }
        .home,.aboutus,.cart,.shop{
            padding: 15px;
            transition: 0.3s;
            position: relative;
            top:10px;
            border-radius: 42% 58% 0% 100% / 43% 48% 52% 57% ;
            font-size: 23px;
		}
        .home a,.aboutus a,.cart a,.shop a{
            text-decoration: none;
            color: white;
        }
          .logo1{
            float: left;
            position: relative;
            left: 199px;
            display: flex;
            flex-direction: row;
            column-gap: 40px;
            padding: 15px;
            font-size: 20px;
        }
        .gold1,.sliver1{
            display: inline-block;
            position: relative;
            top:10px
        }
        .home:hover, .aboutus:hover, .cart:hover , .shop:hover{
            background-color:rgb(160, 155, 155,0.3);
            cursor: pointer;
            color: white;
			margin-top: -5px;
        }
/*--------------------------- sign in page ends ------------------------*/
    </style>
</head>
<body>
<script src="sign.js"></script>
    <div class="container">
    <div class="header-title">
        <div class="logo">
            <img src="logo.jpg" alt="logo" onclick="home()">
        </div>
        <script>
                function home() {
                    location.href = "mainpage.php";
                }
            </script>
        <div class="logo1">
            <div class="gold1">
                <i class="fa-coin"></i><span>Gold :- 
                    <?php
                                            $user = "root";
                                            $pass = "";
                                            $servername = "localhost";
                                            $database = "adminpanel";
                                            
                                            $conn = mysqli_connect($servername , $user , $pass , $database);
                                            if(!$conn){
                                                echo"nai chale";
                                            }
                                            $sql = "SELECT goldprice FROM gold ORDER BY ID DESC LIMIT 1";
                                            
                                            if($result = mysqli_query($conn, $sql)){
                                                while($row = mysqli_fetch_row($result)){
                                                    print($row[0]);
                                            }
                                        }
                                        else{
                                            echo" error showing gold price ";
                                        }
                                        ?>
                </span>
            </div>
            <div class="sliver1">
                <span>Sliver :- 
                    <?php
                    $user = "root";
                    $pass = "";
                    $servername = "localhost";
                    $database = "adminpanel";
                    
                    $conn = mysqli_connect($servername , $user , $pass , $database);
                    if(!$conn){
                        echo"nai chale";
                    }
                    $sql = "SELECT sliverprice FROM sliver ORDER BY ID DESC LIMIT 1";
                    
                    if($result = mysqli_query($conn, $sql)){
                        while($row = mysqli_fetch_row($result)){
                            print($row[0]);
                    }
                }
                else{
                    echo" error che barabar lakh topa";
                }
                ?>
                </span>
            </div>
        </div>
        <div class="contents-header">
            <div class="home">
                <a href="profile.php"><span>Profile</span></a>
            </div>
            <div class="aboutus">
                <a href="signin.php"><span>Sign in</span></a>
            </div>
            <div class="cart">
                <a href="mycart.php"><span>Cart</span></a>
            </div>
            <div class="shop">
                <a href="shopping.php"><span>Shop</span></a>
            </div>
        </div>
    </div>
        <div class="content-login">
            <div class="login-form">
                <div class="title-login">
                    <p>Sign In</p>
                </div>
                <div class="form-cont">
                    <div class="form-style">
                        <form method="post" name="sign-form" onsubmit="return signvalid()">
                            <span><input type="text" name="fname-sign" id="em" placeholder="First name"></span>
                            <span><input type="text" name="lname-sign" id="em" placeholder="Last name"></span>
                            <span><input type="number" name="phone-sign" id="em" placeholder="Phone number"></span>
                            <span><input type="email" name="email-sign" id="em" placeholder="Email"></span><br>
                            <span><input type="text" name="address-sign" id="add" placeholder="Address"></span><br>
                            <span><input type="password" name="password-sign" id="pass" placeholder="Password"></span><br>
                            <input type="submit" name="btn-signin" value="Sign Up" id="btn-sign">
                        </form><?php
                        //  $user = "root";
                        //  $pass = "";
                        //  $servername = "localhost";
                        //  $database = "adminpanel";
                         
                        //  $conn = mysqli_connect($servername , $user , $pass , $database);
                        //  if(!$conn){
                        //      echo"nai chale";
                        //  }
                        // if(isset($_POST['btn-signin'])){
                        //     $fname = $_POST['fname-sign'];
                        //     $lname = $_POST['lname-sign'];
                        //     $mobile = $_POST['phone-sign'];
                        //     $email = $_POST['email-sign'];
                        //     $address = $_POST['address-sign'];
                        //     $password = $_POST['password-sign'];
                        //     $sql = "INSERT INTO customer (fname , lname, mobile , email , address , password) VALUES ('$fname' , '$lname' , '$mobile' , '$email' , '$address' , '$password')";
                        //     try{
                        //         if(mysqli_query($conn,$sql)){
                        //             header("location:mainpage.php");
                        //         }
                        //     }
                        //     catch(mysqli_sql_exception $e){
                        //         echo"password or email already exists";
                        //     }
                        // }?>
                        <?php
                        $user = "root";
                        $pass = "";
                        $servername = "localhost";
                        $database = "adminpanel";
                        
                        $conn = mysqli_connect($servername , $user , $pass , $database);
                        if(!$conn){
                            echo"nai chale";
                        }
                        if (isset($_POST['btn-signin'])) {
                            $fname = $_POST['fname-sign'];
                            $lname = $_POST['lname-sign'];
                            $mobile = $_POST['phone-sign'];
                            $email = $_POST['email-sign'];
                            $address = $_POST['address-sign'];
                            $password = $_POST['password-sign'];
                            
                        $sql = "SELECT * FROM customer WHERE email='$email'";
                        $mo = "SELECT * FROM customer WHERE mobile='$mobile'";

                        $mores = mysqli_query($conn, $mo);
                        $res = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($res) > 0){
                           echo"<script>alert('eamil already taken')</script>";
                        }elseif(mysqli_num_rows($mores) > 0){
                            echo"<script>alert('mobile number already taken')</script>";
                        }
                        else{
                            $query = mysqli_query($conn, "INSERT INTO customer (fname , lname, mobile , email , address , password) VALUES ('$fname' , '$lname' , '$mobile' , '$email' , '$address' , '$password')");
                            echo "<script>
                              window.location.assign('mainpage.php');
                            </script>";
                        }
                        }?>
                    </div>
                    <div class="signin-link">
                        <span>Already registered?</span><a href="login.php" id="sign-in">Log In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>