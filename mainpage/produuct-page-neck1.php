<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="logo-remove.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Necklance | PJ</title>
    <!--bootstrap-->
    <script src="bootstrap lib/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap lib/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--bootstrap ends-->
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
    .btn-cart{
    padding: 10px;
    width: 150px;
    background-color: black;
    border-radius: 50px;
    outline: none;
    color: white;
    border: none;
}
.main-container{
    width: 100%;
    overflow: hidden;
    border-collapse:separate;
    margin-top: 5%;
}
.image-product{
    width: 49%;
    float: left;
}
.title-product{
    float: right;
    width: 50%;
}
.image-banner{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.image-banner img{
    width: 400px;
    height: 400px;
    border: 1px solid gray;
}
.jugad, .jugad2{
    display: none;
}
.slideshow{
    display: flex;
    justify-content: center;
    column-gap: 10px;
    margin-top: 5px;
}
.slideshow img{
    width: 100px;
    height: 100px;
}
#name{
    font-size: 50px;
    position: relative;
    top: 1px;
}
#parekh{
    font-size: 30px;
}
#rs{
    font-size: 45px;
    margin-top: 30px;
}
.btn-cart{
    padding: 10px;
    width: 150px;
    background-color: black;
    border-radius: 50px;
    outline: none;
    color: white;
    border: none;
    margin-top: 50px;
}
.specification-product{
    margin-top: 100px;
}
.specification-product table{
    display: flex;
    justify-content: center;
    font-size: 30px;
}
.specification-product h3{
    font-size: 50px;
}
.specification-product table tr td{
    padding: 50px;
}
.right{
    position: relative;
    right: 100px;
}
.left{
    position: relative;
    left: 100px;
}
#quantity{
    width: 50px;
    height: auto;
}
.header-navigation{
    border: 1px solid black;
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
            width: 110%;
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
    <script>
        function img1swap(){
            document.getElementById("img1").style.display = "block";
            document.getElementById("img2").style.display = "none";
            document.getElementById("img3").style.display = "none";
        }
        function img2swap(){
            document.getElementById("img1").style.display = "none";
            document.getElementById("img2").style.display = "block";
            document.getElementById("img3").style.display = "none";
        }
        function img3swap(){
            document.getElementById("img1").style.display = "none";
            document.getElementById("img2").style.display = "none";
            document.getElementById("img3").style.display = "block";
        }
    </script>
    <!-- Start of the header product section -->
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
                                                    $price = $row[0];
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

    <div class="title-cart">
    <!-- End of the header product section -->
    <!--product page main start-->

    <div class="main-container">
        <div class="image-product">
            <div class="image-banner">
                <img src="neck1a.png" alt="ring 1" id="img1">
                <img src="neck1b.png" alt="ring 2" class="jugad" id="img2">
            </div>
            <div class="slideshow">
                <img src="neck1a.png" alt="ring 1" onclick="img1swap()">
                <img src="neck1b.png" alt="ring 2" onclick="img2swap()">
            </div>
        </div>
        <div class="title-product">
            <form method="POST">
            <div class="main-title">
                <span id="name">
                Esmelda Gold and <br> Diamond Necklace 
                </span><br>
                <span id="parekh">by Parekh Jewellers</span>
                <p id="rs">₹<?php
                 $a = 0;
                 $b = 500;
                    (float)$a =  (float)$b*(float)$price;
                    (float)$final = (float)$price + (float)$a;
                echo $final."rs";
                ?></p></p>
                <span style="font-size: 20px;">Size:&ensp; 15.25cm</span><br>
                <span style="font-size: 20px;">Weight:&ensp; 10.2g</span><br>
                <span>Quantity:-&ensp;</span><input type="number" min="1" max="5" name="quantity" value="1" id="quantity"><br>
                <button class="btn-cart" name="AddCart">Add to Cart</button>
            </div>
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
                    if(isset($_POST['AddCart'])){
                            $number=$_POST['quantity'];
                                $sql = "INSERT INTO carttable (product , price, qua) VALUES (' Esmelda Gold and Diamond Necklace ' , '$final','$number')";
                                try{
                                    if(mysqli_query($conn,$sql)){
                                        echo "<script>alert('item added to cart')</script>";
                                    }
                                }
                                catch(mysqli_sql_exception $e){
                                    echo "<script>alert('item already in the cart')</script>";
                                }
                        
                    }

    ?>
        </div>
    </div>
    <div class="specification-product">
        <hr width="70%">
        <h3 align="center">Product Specification</h3>
        <table>
            <tr>
              <td class="right">PURITY</td>
              <td class="left">18.00</td>
            </tr>
            <tr>
              <td class="right">GENDER</td>
              <td class="left">Women</td>
            </tr>
            <tr>
              <td class="right">OCCASION</td>
              <td class="left">Modern Wear</td>
            </tr>
            <tr>
              <td class="right">BRAND</td>
              <td class="left">Parekh Jewellers</td>
            </tr>
          </table>
    </div>
</body>
</html>