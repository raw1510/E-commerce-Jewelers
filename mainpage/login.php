<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="logo-remove.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PJ</title>
    <style>
        /*--------------------------- login page starts ------------------------*/
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
    height: 630px;
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
    left: 197px;
}
.signin-link #sign-in{
    color: #0A8989;
}
::placeholder{
    font-size: 15px;
    padding: 15px;
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
            margin-left: 20px;
            cursor: pointer;
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
/*--------------------------- login page ends ------------------------*/
    </style>
</head>
<body>
    <?php
    $user = "root";
    $pass = "";
    $servername = "localhost";
    $database = "adminpanel";
    
    $conn = mysqli_connect($servername , $user , $pass , $database);
    if(!$conn){
        echo"nai chale";
    }
        if(isset($_POST['email-login'])){
            $uname = $_POST['email-login'];
            $pas = $_POST['password-login'];
            $sql = "SELECT * from customer where email='".$uname."' AND password='".$pas."' limit 1";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)==1){
                session_start();
                $_SESSION['username'] = $uname;
                header("location:mainpage.php");
            }
            else{
                echo"<script>alert('please enter valid email id or password')</script>";
            }
        }
    ?>
    <script>
        function loginvalid() {
    var d = document.forms["login-form"]["email-login"].value;
    if (d == "") {
    alert("please enter email");
    return false;
    }
    var xe = document.forms["login-form"]["password-login"].value;
    if (xe == "") {
    alert("please enter password");
    return false;
    }
}
    </script>
    <div class="container">
    <div class="header-title">
        <div class="logo">
            <img src="logo.jpg" alt="" onclick="home()">
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
                    echo" error che nai barabar lakh topa";
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
                    <p>Login</p>
                </div>
                <div class="form-content">
                    <div class="form-css">
                        <form method="post" name="login-form" onsubmit="return loginvalid()">
                            <span><input type="email" name="email-login" id="em" placeholder="Email"></span><br>
                            <span><input type="password" name="password-login" id="pas" placeholder="Password"></span>
                            <input type="submit" name="bn-login" value="Login" id="btn-login">
                        </form>
                    </div>
                    <div class="signin-link">
                        <span>New Customer?</span><a href="signin.php" id="sign-in">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>