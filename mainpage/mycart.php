<?php
    session_start();
    if(isset($_POST['btn-checkout'])){
        if(!isset($_SESSION['username'])){
            echo"<script>alert('please login before checkout')</script>";
        }
        if(isset($_SESSION['username'])){
            header("location:payment.php");
        }    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="logo-remove.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <script src="bootstrap lib/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap lib/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--bootstrap ends-->
    <link rel="stylesheet" href="style1.css">
    <title>Cart | PJ</title>
    <style>
    .list{
	list-style: none;
	display: inline;
    }
    .pj{
	display: flex;
	flex-direction: row;
	row-gap: 10px;
	position: relative;
	right: 10px;
    }
    .pj li{
	position: relative;
    top: 10px;
    }
    #right{
	right: 10px;
    }
    .title{
	display: flex;
	justify-content: center;
    align-items: center;
    flex-direction: column;
    }
    .message{
        text-align: center;
        margin-top: 100px;
    }
    .header-title{
            overflow: hidden;
            background-color: black;
            color: white;
            height: 75px;
        }
        .logo2{
            padding: 15px;
            float: left;
            position: relative;
            top:14px;
            width: 143px;
            margin-left: 20px;
         }
         .logo2 img{
            width: 110%;
            position: relative;
            bottom: 36px;
         }
        /* .logo2{
            padding: 15px;
            float: left;
            position: relative;
            top:14px
        } */
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
        <div class="logo2">
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
                    echo" error che !! barabar lakh topa";
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
<div class="total-cover" id="<?php $id = 'krish'?>">
    <div class="title-cart">
        <p>Cart</p>
    </div>
    <div class="content-cart">
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
            <tr>
            <?php
            $user = "root";
            $pass = "";
            $servername = "localhost";
            $database = "cart";
            $conn = mysqli_connect($servername , $user , $pass , $database);
            if(!$conn){
                echo"nai chale";
            }
                                            $showpro = "SELECT * FROM carttable";
                                            $anspro = mysqli_query($conn , $showpro);
                                            if($anspro){
                                                while($row = mysqli_fetch_assoc($anspro)){
                                                    $product = $row['product'];
                                                    $price = $row['price'];
                                                    $qua = $row['qua'];
                                                    echo '<tr>
                                                        <td>'.$product.'</td>
                                                        <td id="price">'.$price.'</td>
                                                        <td>'.$qua.'</td>
                                                        <td>
                                                            <button class="btn btn-danger">
                                                                <a href="deleteproduct.php?
                                                                deleteidpro='.$price.'" class="text-light">Delete</a>
                                                            </button>
                                                        </td>
                                                    </tr>';
                                                }
                                    
                                            }
                                        ?>
            </tr>
        </table>
    </div>
    <div class="total" id="<?php 
        $cartemp = "total-cart-id";
    echo $cartemp;?>">
        <div class="checkout"><form method="post">
            <input type="submit" name="btn-checkout" id="checkout" value="checkout"></form>
        </div>
        <div class="total-div">
            <span>Total:- &#160; &#160;</span><span id="andtotal">

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
            
            while ($num = mysqli_fetch_assoc($query_run)) {
                $qty += $num['price'] * $num['qua'];
            }
            echo $qty;
            ?>
            </span>
        </div>
    </div>
</div>

<?php
    if($qty===0){
    echo "<script>
    document.getElementById('$cartemp').style.display = 'none';
    
    </script>";
    echo"<center><div><img src='cart.jpg' style='position:relative;'><br><h1>Your cart is empty!!! Please shop something</h1></div></center>";
    }
?>
<script>
</script>
</body>
</html>