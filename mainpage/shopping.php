<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="logo-remove.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping | PJ</title>
    <style>
        /*--------------------------- shopping page starts ------------------------*/
        body{
            padding: 0px;
            margin: 0px;

        }
        .logo-shopping{
    size: 42px;
    position: absolute;
    left: 45%;
    color: white;
}  
.menu-bar-gold-sliver{
    overflow: hidden;
    /* float: left; */
    position: fixed;
    width: 20%;
}
.gold-menu , .sliver-menu{
    position: relative;
}
.gold-menu p, .sliver-menu p{
    font-size: 45px;
}
.gold-menu ul li , .sliver-menu ul li{
    list-style-type: none;
    line-height: 2rem;
    font-size: 30px;
    font-family: 'Ubuntu', sans-serif;
}
.gold-menu ul li:hover{
    color: grey;
    text-decoration: underline;
    cursor: pointer;
    position: relative;
    left: 10px;
    animation: krish 0.5s;
}
.sliver-menu ul li:hover{
    color: grey;
    text-decoration: underline;
    cursor: pointer;
    position: relative;
    left: 10px;
    animation: krish 0.5s;
    animation-fill-mode: forwards;
}
@keyframes krish {
    0%{
        left: 0px;
    }
    100%{
        left: 15px;
    }
}
.gold-menu ul, .sliver-menu ul{
    position: relative;
    right: 12px;
    bottom: 35px;
}
.items,.items-sliver{
    float: right;
    width: 80%;
    overflow: auto;
}
.section{
    display: flex;
    flex-direction: row;
    column-gap: 200px;
    justify-content: center;
    border: 1 px solid purple;

}
.product{
    width: 27.5%;
    transition: 0.3s;
}
.product img{
    width: 100%;
    height: 400px;
}
.product:hover{
    box-shadow: 11px 16px 18px 0px rgba(144,124,124,0.74);
-webkit-box-shadow: 11px 16px 18px 0px rgba(144,124,124,0.74);
-moz-box-shadow: 11px 16px 18px 0px rgba(144,124,124,0.74);
}
.line{
    border-left: 3px solid grey;
    margin: 10px;
}
.line p{
    font-size: 28px;
}
.link-product{
    font-size: 28px;
    color: inherit;
    text-decoration: none !important;
}
/*--------------------------- shopping page ends ------------------------*/
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
            cursor: pointer;
            width: 143px;
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
    </style>
</head>
<body>
    <!-- Start of the header shopping section -->
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
    <!-- End of the header shopping section -->
        <div class="menu-bar-gold-sliver">
            <div class="gold-menu">
                <p onclick="gold()">Gold</p>
                <ul>
                    <li onclick="ring()">-Rings</li>
                    <li onclick="neck()">-Necklace</li>
                    <li onclick="ear()">-Earings</li>
                    <li onclick="mangal()">-Mangalsutra</li>
                    <li onclick="braclet()">-Braclets</li>
                </ul>
            </div>

            <div class="sliver-menu">
                <p onclick="sliver()">Sliver</p>
                <ul>
                    <li onclick="sliverring()">-Rings</li>
                    <li onclick="sliverneck()">-Necklace</li>
                    <li onclick="sliverear()">-Earings</li>
                    <li onclick="slivermangal()">-Pendant</li>
                   
                </ul>
            </div>
        </div>
        <div class="items"i id="items">
            <div class="rings" id="ring">
<!--Section start-->
                <div class="section">
                    <div class="product"><a href="product-page.php" class="link-product" target="_blank">
                        <img src="product(2).jpg" alt="gold ring">
                        <div class="line">
                            <p>&ensp;Beguilling 22 Karat<br>&ensp;Gold Artsy Ring</p></a>
                        </div>
                    </div>
<!--Section start-->
                    <div class="product"><a href="product-page-2.php" class="link-product" target="_blank">
                        <img src="ring1a.png" alt="gold ring">
                        <div class="line">
                            <p>&ensp;22 Karat Gold <br>&ensp;Chain Link Ring </p>
                        </div></a>
                    </div>
                </div>
<!--Section start-->
                <div class="section">
                    <div class="product"><a href="product-page.php" class="link-product">
                        <img src="ring2.jpg" alt="gold ring">
                        <div class="line">
                            <p>&ensp;Elegant<br>&ensp;Shimmering Ring </p>
                        </div></a>
                    </div>
<!--Section start-->
                    <div class="product"><a href="product-page.php" class="link-product">
                        <img src="ring3.jpg" alt="gold ring">
                        <div class="line">
                            <p>&ensp; Filigree <br>&ensp; Glass Finger Ring</p>
                        </div></a>
                    </div>
                </div>
<!--Section start-->
                <div class="section">
                    <div class="product"><a href="product-page.php" class="link-product">
                        <img src="ring4.jpeg" alt="gold ring">
                        <div class="line">
                            <p>&ensp; 18 Karat Yellow<br>&ensp; Gold Floral Ring</p>
                        </div></a>
                    </div>
<!--Section start-->
                    <div class="product"> <a href="product-page.php" class="link-product">
                        <img src="ring5.jpeg" alt="gold ring">
                        <div class="line">
                            <p>&ensp; 18 Karat Gold And <br>&ensp;Diamond Ring</p>
                        </div></a>
                    </div>
                </div>
<!--Section start-->
                <div class="section">
                    <div class="product">
                        <img src="ring6.jpg" alt="gold ring">
                        <div class="line">
                            <p>&ensp; Ginella<br>&ensp; Diamond Ring</p>
                        </div>
                    </div>
<!--Section start-->
                    <div class="product">
                        <img src="ring1.jpg" alt="gold ring">
                        <div class="line">
                            <p>&ensp; Irresistible 18<br>&ensp;Karat Yellow Gold </p>
                        </div>
                    </div>
                </div>
            </div>


<!-----------------------------------necklance section start----------------------------------------->
<!-----------------------------------necklance section start----------------------------------------->
<!-----------------------------------necklance section start----------------------------------------->
<!-----------------------------------necklance section start----------------------------------------->


            <div class="neck" id="neck">
                <div class="section">
                    <div class="product"><a href="produuct-page-neck1.php" class="link-product" target="_blank">
                        <img src="neck1a.png" alt="necklance">
                        <div class="line">
                            <p>&ensp; Esmelda Gold <br>&ensp;and Necklace</p>
                        </div></a>
                    </div>

                    <div class="product"><a href="product-page.php" class="link-product">
                        <img src="neck2.png" alt="necklance">
                        <div class="line">
                            <p>&ensp; Spiral Drop Gold<br>&ensp; Necklace</p>
                        </div></a>
                    </div>
                </div>
<!--neck Section start-->
                <div class="section">
                    <div class="product">
                        <img src="neck3.png" alt="gold ring">
                        <div class="line">
                            <p>&ensp; Madhura Gold and<br>&ensp; Ruby Necklace</p>
                        </div>
                    </div>
<!--neck Section start-->
                    <div class="product">
                        <img src="neck4.png" alt="gold ring">
                        <div class="line">
                            <p>&ensp; Irsia Ruby Necklace</p>
                        </div>
                    </div>
                </div>
<!--neck Section start-->
                <div class="section">
                    <div class="product">
                        <img src="neck5.png" alt="gold ring">
                        <div class="line">
                            <p>&ensp; Farah Emerald<br>&ensp;Necklace</p>
                        </div>
                    </div>
<!--neck Section start-->
                    <div class="product">
                        <img src="neck6.png" alt="gold ring">
                        <div class="line">
                            <p>&ensp; Floral Bliss Gold <br>&ensp;And Necklace</p>
                        </div>
                    </div>
                </div>
<!--neck Section start-->
                <div class="section">
                    <div class="product">
                        <img src="neck7.png" alt="gold ring">
                        <div class="line">
                            <p>&ensp; Tiered Opulent<br>&ensp;Gold Haram</p>
                        </div>
                    </div>
<!--neck Section start-->
                    <div class="product">
                        <img src="neck8.png" alt="gold ring">
                        <div class="line">
                            <p>&ensp; Abstract Opulent<br>&ensp; Gold Haram</p>
                        </div>
                    </div>
                </div>
            </div>
<!-----------------------------------earing section start----------------------------------------->
<!-----------------------------------earing section start----------------------------------------->
<!-----------------------------------earing section start----------------------------------------->
<!-----------------------------------earing section start----------------------------------------->
<div class="earing" id="earing">
    <div class="section">
        <div class="product"><a href="product-page.php" class="link-product">
            <img src="ear1.png" alt="gold ring">
            <div class="line">
                <p>&ensp; Mia Rounders  <br>&ensp; Gold Earrings</p>
            </div></a>
        </div>

        <div class="product"><a href="product-page.php" class="link-product">
            <img src="ear2.png" alt="gold ring">
            <div class="line">
                <p>&ensp; Emerald Ecstasy<br>&ensp; Gold Earrings</p>
            </div></a>
        </div>
    </div>
<!--neck Section start-->
    <div class="section">
        <div class="product">
            <img src="ear3.png" alt="gold ring">
            <div class="line">
                <p>&ensp; Artistic Pattern<br>&ensp;Gold Earrings</p>
            </div>
        </div>
<!--neck Section start-->
        <div class="product">
            <img src="ear4.png" alt="gold ring">
            <div class="line">
                <p>&ensp; Contemporary<br>&ensp; Heart Earrings</p>
            </div>
        </div>
    </div>
<!--neck Section start-->
    <div class="section">
        <div class="product">
            <img src="ear5.png" alt="gold ring">
            <div class="line">
                <p>&ensp; Twinkling Stars <br>&ensp;Gold Earrings</p>
            </div>
        </div>
<!--neck Section start-->
        <div class="product">
            <img src="ear6.png" alt="gold ring">
            <div class="line">
                <p>&ensp; Tulip Inspired <br>&ensp;Diamond Earrings</p>
            </div>
        </div>
    </div>
</div>
<!-----------------------------------Mangalsutra section start----------------------------------------->
<!-----------------------------------Mangalsutra section start----------------------------------------->
<!-----------------------------------Mangalsutra section start----------------------------------------->
<!-----------------------------------Mangalsutra section start----------------------------------------->
<div class="earing" id="Mangalsutra">
    <div class="section">
        <div class="product">
            <img src="mangal1.png" alt="Mangalsutra">
            <div class="line">
                <p>&ensp;The Araina<br>&ensp;Mangalsutra</p>
            </div></a>
        </div>
<!--Mangalsutra Section start-->
        <div class="product">
            <img src="mangal2.png" alt="Mangalsutra">
            <div class="line">
                <p>&ensp; PJ Exclusive<br>&ensp;Gold Mangalsutra</p>
            </div>
        </div>
    </div>
<!--Mangalsutra Section start-->
    <div class="section">
        <div class="product">
            <img src="mangal3.png" alt="Mangalsutra">
            <div class="line">
                <p>&ensp; Mangalsutra In A<br>&ensp;  Knotted Pattern</p>
            </div>
        </div>
<!--Mangalsutra Section start-->
        <div class="product">
            <img src="mangal4.png" alt="Mangalsutra">
            <div class="line">
                <p>&ensp; Textured Knotted<br>&ensp;Gold Mangalsutra</p>
            </div>
        </div>
    </div>
<!--Mangalsutra Section start-->
    <div class="section">
        <div class="product">
            <img src="mangal5.png" alt="Mangalsutra">
            <div class="line">
                <p>&ensp; Stunning Traditional<br>&ensp;Mangalsutra</p>
            </div>
        </div>
<!--Mangalsutra Section start-->
        <div class="product">
            <img src="mangal6.png" alt="gold ring">
            <div class="line">
                <p>&ensp; Sleek Traditional<br>&ensp;Gold Mangalsutra</p>
            </div>
        </div>
    </div>
<!--Mangalsutra Section start-->
</div>





<!-----------------------------------Braclets section start----------------------------------------->
<!-----------------------------------Braclets section start----------------------------------------->
<!-----------------------------------Braclets section start----------------------------------------->
<!-----------------------------------Braclets section start----------------------------------------->
<div class="Braclets" id="Braclets">
    <div class="section">
        <div class="product" style="position: relative;left: 139px;"><a href="product-page.php" class="link-product">
            <img src="brac1.png" alt="braclet1">
            <div class="line">
                <p>&ensp; Slender Gold <br>&ensp;Bracelet</p>
            </div>
        </div>
<!--Braclets Section start-->
        <div class="product"><a href="product-page.php" class="link-product">
            <img src="brac2.png" alt="braclet2">
            <div class="line">
                <p>&ensp; Teddy <br>&ensp;Bear Bracelet</p>
            </div>
        </div>
    </div>
<!--Braclets Section start-->
    <div class="section">
        <div class="product">
            <img src="brac3.png" alt="gold ring">
            <div class="line">
                <p>&ensp; Dual Toned <br>&ensp;Gold Bracelet</p>
            </div>
        </div>
<!--Braclets Section start-->
        <div class="product">
            <img src="brac4.png" alt="gold ring">
            <div class="line">
                <p>&ensp; Slender Gold<br>&ensp;Bracelet</p>
            </div>
        </div>
    </div>
<!--Braclets Section start-->
<!--Braclets Section start-->
</div>
</div>

<!-------------------------------------------gold section over------------------------------------------->
<!-------------------------------------------sliver section start------------------------------------------->
















<div class="items-sliver" id="items-sliver">
            <div class="rings" id="s-ring">
        <!--Section start-->
                <div class="section">
                    <div class="product"><a href="product-page.php" class="link-product">
                        <img src="sring1.png" alt="sliver ring">
                        <div class="line">
                            <p>&ensp;Silver Zircon <br>&ensp;Vintage Ring</p>
                        </div></a>
                    </div>
        <!--Section start-->
                    <div class="product"><a href="product-page.php" class="link-product">
                        <img src="sring2.png" alt="gold ring">
                        <div class="line">
                            <p>&ensp;Silver Solitaire<br>&ensp;Grace Ring</p>
                        </div></a>
                    </div>
                </div>
        <!--Section start-->
                <div class="section">
                    <div class="product">
                        <img src="sring3.png" alt="sliver ring">
                        <div class="line">
                            <p>&ensp;Anushka Sharma<br>&ensp;Silver Ring</p>
                        </div>
                    </div>
        <!--Section start-->
                    <div class="product">
                        <img src="sring4.png" alt="sliver ring">
                        <div class="line">
                            <p>&ensp;Silver Zircon<br>&ensp;Leaf Ring</p>
                        </div>
                    </div>
                </div>                
            </div>


<!-----------------------------------necklance section start----------------------------------------->
<!-----------------------------------necklance section start----------------------------------------->
<!-----------------------------------necklance section start----------------------------------------->
<!-----------------------------------necklance section start----------------------------------------->


<div class="neck" id="s-neck">
                    <div class="section">
                        <div class="product"><a href="product-page.php" class="link-product">
                            <img src="sneck1.png" alt="sliver necklance">
                            <div class="line">
                                <p>&ensp; Silver Leaves<br>&ensp; Necklace</p>
                            </div></a>
                        </div>

                        <div class="product"><a href="product-page.php" class="link-product">
                            <img src="sneck2.png" alt="sliver necklance">
                            <div class="line">
                                <p>&ensp; Silver Snowflake <br>&ensp;Necklace</p>
                            </div></a>
                        </div>
                    </div>
            <!--sliver necklance Section start-->
                    <div class="section">
                        <div class="product">
                            <img src="sneck3.png" alt="slver necklace">
                            <div class="line">
                                <p>&ensp; White Pearl <br>&ensp;Moon Necklace</p>
                            </div>
                        </div>
            <!--sliver necklance Section start-->
                        <div class="product">
                            <img src="sneck4.png" alt="gold ring">
                            <div class="line">
                                <p>&ensp; Curl Heart <br>&ensp;Necklace</p>
                            </div>
                        </div>
                    </div>
            <!--sliver necklance Section start-->
                    <div class="section">
                        <div class="product">
                            <img src="sneck5.png" alt="gold ring">
                            <div class="line">
                                <p>&ensp; Silver Wave <br>&ensp;Necklace</p>
                            </div>
                        </div>
            <!--sliver necklance Section start-->
                        <div class="product">
                            <img src="sneck6.png" alt="gold ring">
                            <div class="line">
                                <p>&ensp; Silver Chunky <br>&ensp;Floral Necklace</p>
                            </div>
                        </div>
                    </div>
                </div>
<!-----------------------------------sliver earing section start----------------------------------------->
<!-----------------------------------sliver earing section start----------------------------------------->
<!-----------------------------------sliver earing section start----------------------------------------->
<!-----------------------------------sliver earing section start----------------------------------------->
                    <div class="earing" id="s-earing">
                    <div class="section">
                    <div class="product"><a href="product-page.php" class="link-product">
                        <img src="sear1.png" alt="sliver ring">
                        <div class="line">
                            <p>&ensp; Antique Narah <br>&ensp;Pillar Earrings</p>
                        </div></a>
                    </div>

                    <div class="product">
                        <img src="sear2.png" alt="sliver ring">
                        <div class="line">
                            <p>&ensp; Clara B Earrings <br>&ensp;in 925 Silver</p>
                        </div>
                    </div>
                    </div>
                    <!--sliver ear Section start-->
                    <div class="section">
                    <div class="product">
                        <img src="sear3.png" alt="sliver ring">
                        <div class="line">
                            <p>&ensp; Hold Steady<br>&ensp;Earrings Silver</p>
                        </div>
                    </div>
                    <!--sliver ear Section start-->
                    <div class="product">
                        <img src="sear4.png" alt="gold ring">
                        <div class="line">
                            <p>&ensp;Antique Office<br>&ensp;Earings Sliver</p>
                        </div>
                    </div>
                    </div>
                </div>
<!-----------------------------------Mangalsutra section start----------------------------------------->
<!-----------------------------------Mangalsutra section start----------------------------------------->
<!-----------------------------------Mangalsutra section start----------------------------------------->
<!-----------------------------------Mangalsutra section start----------------------------------------->
                    <div class="Mangalsutra" id="s-Mangalsutra">
                    <div class="section">
                    <div class="product"><a href="product-page.php" class="link-product">
                        <img src="s-mangal1.png" alt="mangalsutra 1">
                        <div class="line">
                            <p>&ensp; GIVA SLIVER <br>&ensp; MANGALSUTRA</p>
                        </div></a>
                    </div>
                    <!--sliver mangalsutra Section start-->
                    <div class="product">
                        <img src="s-mangal2.png" alt="gold ring">
                        <div class="line">
                            <p>&ensp; sliver mangalsutra 2 <br>&ensp; Gold Artsy Ring</p>
                        </div>
                    </div>
                    </div>
                    <!--sliver mangalsutra Section start-->
                    <div class="section">
                    <div class="product">
                        <img src="s-mangal3.png" alt="gold ring">
                        <div class="line">
                            <p>&ensp; ATIBELLE <br>&ensp; Gold Artsy Ring</p>
                        </div>
                    </div>
                    <!--sliver mangalsutra Section start-->
                    <div class="product">
                        <img src="s-mangal4.png" alt="gold ring">
                        <div class="line">
                            <p>&ensp; Clara Silver<br>&ensp;Beaded Mangalsutra</p>
                        </div>
                    </div>
                    </div>
                    <!--sliver mangalsutra Section start-->
                    
                    <!--sliver mangalsutra Section start-->
                
                    </div>


<!-----------------------------------Braclets section start----------------------------------------->
<!-----------------------------------Braclets section start----------------------------------------->
<!-----------------------------------Braclets section start----------------------------------------->
<!-----------------------------------Braclets section start----------------------------------------->
                    
</div>

<script>
    function ring(){
    document.getElementById("ring").style.display = "block";
    document.getElementById("neck").style.display = "none";
    document.getElementById("earing").style.display = "none";
    document.getElementById("Mangalsutra").style.display = "none";
    document.getElementById("Braclets").style.display = "none";
    document.getElementById("s-ring").style.display = "none";
    document.getElementById("s-neck").style.display = "none";
    document.getElementById("s-earing").style.display = "none";
    document.getElementById("s-Mangalsutra").style.display = "none";
    document.getElementById("s-Braclets").style.display = "none";
}
function neck(){
    document.getElementById("ring").style.display = "none";
    document.getElementById("neck").style.display = "block";
    document.getElementById("earing").style.display = "none";
    document.getElementById("Mangalsutra").style.display = "none";
    document.getElementById("Braclets").style.display = "none";
    document.getElementById("s-ring").style.display = "none";
    document.getElementById("s-neck").style.display = "none";
    document.getElementById("s-earing").style.display = "none";
    document.getElementById("s-Mangalsutra").style.display = "none";
    document.getElementById("s-Braclets").style.display = "none";

}
function ear(){
    document.getElementById("ring").style.display = "none";
    document.getElementById("neck").style.display = "none";
    document.getElementById("earing").style.display = "block";
    document.getElementById("Mangalsutra").style.display = "none";
    document.getElementById("Braclets").style.display = "none";
    document.getElementById("s-ring").style.display = "none";
    document.getElementById("s-neck").style.display = "none";
    document.getElementById("s-earing").style.display = "none";
    document.getElementById("s-Mangalsutra").style.display = "none";
    document.getElementById("s-Braclets").style.display = "none";
}

function mangal(){
    document.getElementById("ring").style.display = "none";
    document.getElementById("neck").style.display = "none";
    document.getElementById("earing").style.display = "none";
    document.getElementById("Mangalsutra").style.display = "block";
    document.getElementById("Braclets").style.display = "none";
    document.getElementById("s-ring").style.display = "none";
    document.getElementById("s-neck").style.display = "none";
    document.getElementById("s-earing").style.display = "none";
    document.getElementById("s-Mangalsutra").style.display = "none";
    document.getElementById("s-Braclets").style.display = "none";
}
function braclet(){
    document.getElementById("ring").style.display = "none";
    document.getElementById("neck").style.display = "none";
    document.getElementById("earing").style.display = "none";
    document.getElementById("Mangalsutra").style.display = "none";
    document.getElementById("Braclets").style.display = "block";
    document.getElementById("s-ring").style.display = "none";
    document.getElementById("s-neck").style.display = "none";
    document.getElementById("s-earing").style.display = "none";
    document.getElementById("s-Mangalsutra").style.display = "none";
    document.getElementById("s-Braclets").style.display = "none";
}




// sliver click function for sliver items




function sliverring(){
    document.getElementById("ring").style.display = "none";
    document.getElementById("neck").style.display = "none";
    document.getElementById("earing").style.display = "none";
    document.getElementById("Mangalsutra").style.display = "none";
    document.getElementById("Braclets").style.display = "none";
    document.getElementById("s-ring").style.display = "block";
    document.getElementById("s-neck").style.display = "none";
    document.getElementById("s-earing").style.display = "none";
    document.getElementById("s-Mangalsutra").style.display = "none";
    document.getElementById("s-Braclets").style.display = "none";
}
function sliverneck(){
    document.getElementById("ring").style.display = "none";
    document.getElementById("neck").style.display = "none";
    document.getElementById("earing").style.display = "none";
    document.getElementById("Mangalsutra").style.display = "none";
    document.getElementById("Braclets").style.display = "none";
    document.getElementById("s-ring").style.display = "none";
    document.getElementById("s-neck").style.display = "block";
    document.getElementById("s-earing").style.display = "none";
    document.getElementById("s-Mangalsutra").style.display = "none";
    document.getElementById("s-Braclets").style.display = "none";
}
function sliverear(){
    document.getElementById("ring").style.display = "none";
    document.getElementById("neck").style.display = "none";
    document.getElementById("earing").style.display = "none";
    document.getElementById("Mangalsutra").style.display = "none";
    document.getElementById("Braclets").style.display = "none";
    document.getElementById("s-ring").style.display = "none";
    document.getElementById("s-neck").style.display = "none";
    document.getElementById("s-earing").style.display = "block";
    document.getElementById("s-Mangalsutra").style.display = "none";
    document.getElementById("s-Braclets").style.display = "none";
}
function slivermangal(){
    document.getElementById("ring").style.display = "none";
    document.getElementById("neck").style.display = "none";
    document.getElementById("earing").style.display = "none";
    document.getElementById("Mangalsutra").style.display = "none";
    document.getElementById("Braclets").style.display = "none";
    document.getElementById("s-ring").style.display = "none";
    document.getElementById("s-neck").style.display = "none";
    document.getElementById("s-earing").style.display = "none";
    document.getElementById("s-Mangalsutra").style.display = "block";
    document.getElementById("s-Braclets").style.display = "none";
}
function sliverbrac(){
    document.getElementById("ring").style.display = "none";
    document.getElementById("neck").style.display = "none";
    document.getElementById("earing").style.display = "none";
    document.getElementById("Mangalsutra").style.display = "none";
    document.getElementById("Braclets").style.display = "none";
    document.getElementById("s-ring").style.display = "none";
    document.getElementById("s-neck").style.display = "none";
    document.getElementById("s-earing").style.display = "none";
    document.getElementById("s-Mangalsutra").style.display = "none";
    document.getElementById("s-Braclets").style.display = "block";
}

</script>
</body>
</html>