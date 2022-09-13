
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
    <script src="bootstrap lib/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap lib/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			<!-- Bootstrap lib -->
	<script src="bootstrap lib/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap lib/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
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
          body{
              padding: none;
              margin: none;
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
	<div class="jumbotron" id="jumboproductadd" style="color: black;">
                                    <strong align="center"><center><h1>Profile</h1></center></strong>
                                </div>
	<div class="container">
	 
		<div class="row gutters-sm">
			<div class="col-md-4 mb-3">
					  <div class="card">
						<div class="card-body">
						  <div class="d-flex flex-column align-items-center text-center">
							<img src="https://www.alchinlong.com/wp-content/uploads/2015/09/sample-profile.png" alt="Admin" class="rounded-circle" width="150">
							<div class="mt-3">
							  <h4><?php echo $name;?></h4>
							  <p class="text-muted font-size-sm"><?php echo $address;?></p>
							</div>
						  </div>
						</div>
					  </div>
			</div>
		</div>
		
		<div class="col-md-8">
              <div class="card mb-3" style="left: -76px;">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $name;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $email;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $mobile;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $mobile;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $address;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                    <form method="post">
        <input type="submit" class="btn btn-danger" name="logout" value="logout">
        <input type="submit" class="btn btn-primary" name="update" value="Update">
        <?php 
                    if(isset($_POST['logout'])){
                        session_unset();
                        session_destroy();
                         echo '<script>location.href = "mainpage.php"</script>';
                    }

            ?>
            
          </form>
                    </div>
                  </div>
                </div>
              </div>
	</div>
  
</body>
</html>