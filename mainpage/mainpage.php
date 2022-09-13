<?php
    session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo-remove.png">
	<title>Parekh Jewellers</title>
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
<style>
@import url('https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap');    
	body{
		margin: 0px;
		padding: 0px;
		scroll-behavior: smooth;
	}
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}
.row {
  display: flex;
}

/* Create three equal columns that sits next to each other */
.column {
  flex: 33.33%;
  padding: 0px;
}
.jbcss{
	display: flex;
	flex-wrap: nowrap;
	background: none;
    padding: 0px;
}
.blog{
	display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-content: center;
    flex-direction: column;
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
    background: url("banner2.jpg") no-repeat center;
    background-size: cover;
}
.logo-title{
    font-family: 'Lora', serif;
    font-size: 25px;
	position: relative;
	float: left;
	top: 10px;
	left: 10px;
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
        .box{
            text-align: center;
            color: white;
            border: 9px solid white;
            padding: 17px;
        }
        .box strong{
            font-family: 'Cedarville Cursive', cursive;
        }
        .box strong h1{
            font-size: 53px;
            margin-top: 25px;
        }
        .box ol{
            font-size: 19px;
        }
</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60" data-spy="scroll" data-target=".navbar" data-offset="50">
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
	<div class="jumbotron title"style="color: black;">
            <div class="box">
		<strong align="center"><h1>Parekh Jewellers</h1></strong><br>
		<ol>We make differnt types of jewlery from your designs and our albums to make your jewlery.</ol>
		<ol>We provide you best premimum qualtiy of gold and silver.</ol></div>
	</div>

	<div class="row"> 
		<div class="column">
			<img src="download.png" style="width:100%"></img>
		</div>
		<div class="column">
			<img src="ring.jpg" style="width:100%;height: 100%;"></img>
		</div>
	</div>
	<div class="row">
		<img src="mark.png" style="padding: 20px;width: 95%;margin: auto;"></img>
	</div>
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">


  <div class="carousel-inner" style=" height: 475px">
    <div class="carousel-item active">
      <img class="d-block w-100" src="slider1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="slider2.jpg" alt="Second slide" style="height: 470px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="slider3.png" alt="Third slide" style="height: 470px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br><br><br>
	<div class="row">
		<div class="jumbotron jbcss">
			<div class="container" style="padding: 0px">
				<div class=" col-mid-6">
					<img src="blog.png" style="width:100%"></img>
				</div>
			</div>
			<div class="d-flex continer " style="background:#EDECE8">
				<div class="col-mid-6 p-2 border blog" style="width: 36.1rem;" > 
					<center><span style="font-family: 'Anton', sans-serif;font-size: 200%;">B L O G</span>
					<p style="font-family: 'Amiri', serif;font-size: 350%;">Style Journal</p>
					<p style="font-family: 'Dosis', sans-serif;font-size: 120%;">Front Back Earring Edition</p>
					<p><a href="blog.php"><button class="btn bg-transparent" style="border-color: black;">Read More</button></a></p></center>
				</div>	
			</div>
		</div>				
	</div>
    
	<div class="footer" id="fotter">
		<div class="content">
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
<body>
</html>