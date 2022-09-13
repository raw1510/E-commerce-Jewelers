<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="logo-remove.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/97a5c926f1.js" crossorigin="anonymous"></script>
<!-- Bootstrap lib -->
	<script src="bootstrap lib/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap lib/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--     Fonts       -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Anton&family=Exo+2:wght@500&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&family=Dosis:wght@200&display=swap" rel="stylesheet">
        <title>Blog | PJ</title>
    <style>
        section{
            margin: 70px;
        }
        .title{
            font-size: 100px;
        }
        .content{
            margin: 30px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            top: -15px;
            border: 1px solid grey;
        }
        .blog-title{
            font-size: 60px;
            margin: 30px;
        }
        .margin{
            display: flex;
            justify-content: center;
        }
        .blog-image, .blog-para{
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .blog-image .img{
            width: 100%;
            height: 100%;
        }
        .blog-para{
            margin-bottom: 90px;
            margin-top: 30px;
        }
        .para-title p, .para-title2 p{
            font-size: 45px;
            margin-left: 30px;
        }
        .para-title3 p{
            font-size: 45px;
        }
        .para-title ul li , .para-title2 span , .para-title3 span{
            font-size: 25px;
            margin-bottom: 20px;
            margin-left: 15px;
        }
        .footer {
            display: block;
            box-sizing: border-box;
            height: 500px;
            background-color: #FFD700;
            clip-path: ellipse(99% 100% at 23.54% 100%);
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
        }
        .background{
            border-left: 10px solid orange;
            /* background: rgb(255, 159, 69,0.3); */
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
            top:14px
        }
        .logo2{
            padding: 15px;
            float: left;
            position: relative;
            top:14px;
            width: 143px;
            margin-left: 20px;
            cursor: pointer;
         }
         .logo2 img{
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
<div class="header-title">
        <div class="logo2">
            <img src="logo.jpg" alt="" onclick="home()">
        </div>
        <script>
                function home() {
                    location.href = "mainpage.php";
                }
            </script>
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
    <section>
        <div class="title">
            <p>Blog</p>
        </div>
        <section class="content">
            <div class="margin">
                <p class="blog-title">
                    India's gold market in 2022
                </p>
            </div>
            <div class="blog-image">
                <img src="Image 1.jpg" alt="blog image" class="img">
            </div>
            <div class="blog-para">
                <div class="para-title">
                    <div class="background"><p><i>Summary</i></p></div>
                   <ul>
                       <li>
                        The domestic gold price ended 3.1%
                        lower in September at Rs45,6124/10g1
                       </li>
                       <li>
                        Official imports declined 27% m-o-m and
                        the local market went back to flat by the
                        end of the month                       
                       </li>
                       <li>
                        Strong revival of September rainfall meant
                        the monsoon has ended within the normal
                        range for three consecutive years
                       </li>
                   </ul>
                </div>
                <br>
                 <div class="para-title2">
                    <div class="background"><p><i>Why Gold Price is Increasing?</i></p></div>
                    <span>
                        As is true with any traded commodity,
                        the demand and supply of gold, plays an
                        important role in determining its price.
                        Unlike oil, gold is not a consumable product. All the gold that has ever
                         been mined is still available in the world. The amount of gold mined every year is
                          not very high. If the demand for gold increases, the price increases since the supply is
                           relatively scarce. Hence if you’re wondering why gold price is rising, demand-supply conditions
                            may be one of the reasons.
                            <br><br>
                            When the inflation rates rise, the value of the currency decreases.
                             Also, most other investment avenues fail to deliver inflation-beating returns.
                              Hence, most people start investing in gold. Even if high rates of inflation last for an 
                              extended period, gold acts as a perfect hedge since it is not affected by fluctuations in the value of the currency.
                    </span>
                 </div>
                 <div class="para-title2">
                    <div class="background"><p><i>Bitcoin or Gold- What is the best choice for you?</i></p></div>
                    <span>
                            Bitcoin is really decentralized; its quantity is 
                            limited, and you may use it to trade with anybody in the world.
                            <br><br>
                            However, it is critical to evaluate gold's
                            established qualities. Since gold is a more 
                            price-stable investment, you do not need to 
                            trade it unless your investing plan changes. Bitcoins,
                            on the other contrary, may necessitate a unique investing strategy.
                            <br><br>
                            Given the unpredictable nature of Bitcoin, investors
                            may wish to develop an entrance and exit plan if price
                            swings become a danger. If the worth of Bitcoin increases
                            to your benefit, investors must also determine when / if to sell at a profit.
                            <br><br>
                            If you're unsure whether to buy shares in gold or Bitcoin,
                            Financial Advisors say that it all relies on your investing 
                            objectives. Given Bitcoin's lack of usefulness at the moment, 
                            the basis for it is uncertain.
                            <br><br>
                            Gold is a good investment for security and wealth conservation.
                            Bitcoin is used for speculating. I believe it makes sense to purchase
                            both, and for an extreme allocation, you could purchase 50% Bitcoin and 50%
                            gold or major percentage of gold and minor share of bitcoins.
                    </span>
                 </div>


            </div>
        </section>
    </section>
    <div class="footer">
		<div class="content2">
			<center style="position: relative; bottom: 50px; font-size: 40px"><b>About Us:</b></center>
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-4"><b>Address:</b> Nr. lp savani school,<p>Pal, Adajan, <br> Surat , Gujarat</p></div>
					<div class="col-sm-4 col-md-4"><b>Contact Us:</b> 9537567902<p>(10am - 6pm IST, MON - SAT) <br> pkjewellers@gmail.com</p></div>
					<div class="col-sm-4 col-md-4"><b>Custom Delight:</b> Best Prices <br> Assurance<p>Jewellery Makeover</p></div>
				</div>
			</div>
			<div class="container-fluid">
				<p style="    padding: 0px 10px;">We make differnt types of jewllery from your designs and our albums to make your jewllery. We provide you best premimum qualtiy of gold
				and silver.We are not just selling jewellery, but an unparalleled jewellery buying experience at your fingertips! Shining bright with a young
				team focused on innovation, customer happiness and transparency.</p>
			</div>
			
		</div>
	</div>
</body>
</html>