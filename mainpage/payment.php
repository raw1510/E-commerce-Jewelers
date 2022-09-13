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
            while($row = $result->fetch_assoc()) {
                $fname = $row["fname"];
                $lname = $row["lname"];
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
    <link rel="shortcut icon" href="logo-remove.png">
    <title>PJ | payment</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="material-components.css">
    <script src="material-components.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body{
            background: url("payment-back.png");
            background-size: cover;
            padding: 0px;
            margin: 0px;
        }
        .container-payment{
            /* border: 1px solid red; */
            position: relative;
            background-color: white;
            width: 70%;
            left: 50px;
            top: 22px;
			height:839px;
        }
        h1{
            font-size: 70px;
        }
        h2{
           margin-left: 93px;
            font-size: 50px;
        }
        hr{
            width: 80%;
        }
        .names{
            font-size:35px ;
        }
        .hide{
            white-space: nowrap; 
            width: 355px; 
            overflow: scroll;
            position: absolute;
            top: 430px;
            left: 160px;
        }
        .total-bill{
            width: 35%;
            /* border: 1px solid black; */
            position: absolute;
            background-color: white;
            left: 680px;
            top: 121px;
            box-shadow: -17px 13px 28px -6px rgba(0,0,0,0.61);
-webkit-box-shadow: -17px 13px 28px -6px rgba(0,0,0,0.61);
-moz-box-shadow: -17px 13px 28px -6px rgba(0,0,0,0.61);
        }
        .bill-title{
            font-size: 50px;
        }
        .total-product{
            white-space: nowrap; 
            width: 355px; 
            overflow: scroll;
            overflow-y: scroll;
            height: 74px;
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
            width: 89%;
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
    </style>

</head>
<body>
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
    <div class="container-payment">
		
        <div class="title">
           <div class="well well-lg" style="font-size: 30px;"><b>Payment</b></div>
            <hr>
        </div>
        <div class="deliver">
			<div class="container-fluid">
				<div class="well" style="font-size: 20px;"><b>Deliver To:</b></div>
			</div>
        </div>
		<div class="container-fluid">
			<p class="names" style="font-size: 25px;">Name :- 
			<div class="well well-sm"><?php echo $fname;
			echo " ";
			echo $lname;?></div></p><br><br>
			<p class="names" style="font-size: 25px;">Phone :- <div class="well well-sm"><?php echo $mobile;?></div></p><br><br>
			<p class="names address" style="font-size: 25px;">Address :- <div class="hide"><div class="well well-sm"><?php echo $address;?></div></div></p><br><br>
			<p class="names" style="font-size: 25px;">Email :- <div class="well well-sm"><?php echo $email;?></div></p>
		</div>
    </div>
    <div class="total-bill">
            <div class="title">
           <div class="well well-lg" style="font-size: 30px;"><center><b>Payment Details:</b></center></div>
            <hr>
        </div>
            <div class="product">
                <div class="well" style="font-size: 20px;"><b><p>Products</p></b></div>
				<div class="container-fluid">
                <div class="well"><div class="total-product">
                <?php
            $user = "root";
            $pass = "";
            $servername = "localhost";
            $database = "cart";
            $conn = mysqli_connect($servername , $user , $pass , $database);
            if(!$conn){
                echo"nai chale";
            }
            $query = "SELECT product FROM carttable";
            $query_run = mysqli_query($conn,$query);
            
            $qty= 0;
            
            while ($num = mysqli_fetch_assoc($query_run)) {
                $qty = $num['product'];
                echo $qty;
                echo"<br>";
            }
            ?>
                </div></div>
                <div class="well"><div class="gst">
                    <p>SGst :- 3%</p>
                    <p>CGst :- 3%</p>
                </div></div>
                <div class="well"><div class="shipping">
                    <p>Shipping :- Free</p>
                </div></div>
                <div class="pay">
                    <div class="well"><span>Mode:- </span>
                    <form method="post">
                        <span>COD:-</span><input type="radio" name="cod" id="cod" value="COD"></div>
                <hr>
                <div class="total-price">
                    <div class="well"><span>Sub total:-
                        <?php
                            $user = "root";
                            $pass = "";
                            $servername = "localhost";
                            $database = "cart";
                            $conn = mysqli_connect($servername , $user , $pass , $database);
                            if(!$conn){
                                echo"nai chale";
                            }
                            $query = "SELECT * FROM carttable";
                            $query_run = mysqli_query($conn,$query);
                            
                            $qty= 0;
                            $subtotal = 0;
                            while ($num = mysqli_fetch_assoc($query_run)) {
                                $qty += ($num['price'] * $num['qua']);
                                $gst = 0.06*$qty;
                                $subtotal = $gst + $qty;
                            }
                            print($subtotal);
                            ?>
                    </span></div>
                    <div class="order">
						<div class="container">
                        <button type="button" name="btn-order" id="order" class="btn btn-success" value="order" onclick="thanks()">Order
						
						
                        </form>
                        <?php
                        $user = "root";
                        $pass = "";
                        $servername = "localhost";
                        $database = "cart"; 
                        $conn = mysqli_connect($servername , $user , $pass , $database);
                        if(!$conn){
                            echo"nai chale";
                        }
                            if(isset($_POST['btn-order'])){
                                if(!isset($_POST['cod'])){
                                    echo"<script>alert('please select payment method ')</script>";
                                }
                                $c = "TRUNCATE TABLE carttable;";
                                if(mysqli_query($conn,$c)){
                                    //header("location:thanks.php");
									
                                }
                            }
                        ?></button>
						<script>
										function thanks(){
											location.href = "thanks.php";
										}
									</script>
						</div>
                    </div>
                </div>
				</div>
            </div>
    </div>
</div>
</body>
</html>