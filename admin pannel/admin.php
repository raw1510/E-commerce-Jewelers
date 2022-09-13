<?php
    include'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="cssadmin.css">
    <script src="https://kit.fontawesome.com/97a5c926f1.js" crossorigin="anonymous"></script>
<!-- Bootstrap lib -->
	<script src="bootstrap lib/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap lib/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
    .for-width{
    width: 81%;
    float: right;
}
	.dashboard-btn button{
		height: 190%;
		width: 70%;
		border-radius: 20px;
	}
	.dashboard-btn i{
		    margin-right: 20px;
    font-size: 140%;
	}
	.dashboard-btn p{
		font-size:70%;
	}  
.sidenav 
	{
	  height: 80%;
	  width: 30%;
	  position: fixed;
	  z-index: 1;
	  bottom: 0;
	  left: 0;
	  background-color:#e9ecef;
	  overflow-x: hidden;
	  transition: 0.10s;
	  padding-top: 40px;
      height: 665px;
	}

.sidenav a 
{
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.5s;
}

.sidenav a:hover 
{
  color: #f1f1f1;
}

.sidenav .closebtn 
{
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 480px) 
{
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
  .navbar-brand {
    float: left;
    height: 66px;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 34px;
}
.navbar-inverse{
	 overflow-x: hidden;
}	
</style>
</head>
<script>

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
    <div class="mega-container">
        <div class="jumbotron" style="background-color: #fdb813; background-image: linear-gradient(315deg, #fdb813 0%, #788cb6 74%);color: black;">
			<a href="admin.php" style="text-decoration: none;color: black;"><strong align="center"><center><h1>Parekh Jewellers</h1></center></strong></a>
		</div>
        <div class="container-fluid">
					<b><span style="font-size:30px;cursor:pointer;color: black;display: flex;position: absolute;margin: -10% 0% 0%;" onclick="openNav()">&#9776; Open</span></b>
		</div>
		
			 
		

        <div class="menu-bar-container">
			<div id="mySidenav" class="sidenav" style="width: 250px	">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span style='font-size:24px' class='fas'><i class="fas fa-times"></i></span></a>
				<div class="menu-bar">
					<div class="icon-bar">
						<i class="fas fa-user-circle"></i>
					</div>
					<div class="title">
						<h3><Center>Admin</Center><p>Parekh jewellers</p></h3>
					</div>
					
					<!-- menu start -->
					<div class="menu-content">
						<div class="dashboard2-btn ">
							<div class="hover">
								<button class="class-btn" onclick="dash()">Dashboard</button>
							</div>
						</div>
						<div class="customer-btn">
							<div class="hover">
								<button class="class-btn" onclick="customermenu()">Customers</button>
							</div>
						</div>
						<div class="products-btn">
							<div class="hover">
								<button class="class-btn" onclick="productmenu()">Products</button>
							</div>
						</div>
						<div class="products-btn">
							<div class="hover">
								<button class="class-btn" onclick="gsmenu()">Gold/SLIVER price</button> 
							</div>
						</div>
                        <div class="products-btn">
							<div class="hover">
								<a href="http://localhost/updatemainpage/mainpage/mainpage/mainpage.php"><button class="class-btn">Main Page</button> </a>
	
							</div>
						</div>
					</div>
                    
					<!-- menu end -->
				</div>
			</div>
           
            <div class="for-width">
                <div class="admin-content">
                     <!--customer 2 section  -->
					 <div class="jumbotron" id="jumbotron" style="color: black;width: 85%;margin: auto;">
							<strong align="center"><center><h1>Customer List</h1></center></strong>
						</div>
         
         
                        <div class="btn-add-customer" id="menu-bar-customer" style="margin: 0px 0px 0px -15px;">
						
							
								<button type="button" class="btn btn-primary add-list hex-color1" style="background-image: linear-gradient(135deg,  #12D8FA  51%, #1FA2FF  100%);" onclick="addcus()">ADD CUSTOMER</button>
							
                            <button type="button" class="btn btn-primary add-list hex-color2" style="background-image: linear-gradient( 135deg, #FEB692 10%, #EA5455 100%);" onclick="showcus()">CUSTOMER LIST</button>
                        </div>

                        <div class="form-add-customer" id="show-form"><span id="<?php $aftersubcus = 'show-form';
                        echo $aftersubcus; ?>">
                        <div class="jumbotron" id="jumbocustomeradd" style="color: black;width: 85%;margin: auto;">
                                    <strong align="center"><center><h1>Add customer</h1></center></strong>
                                </div>
                            <div class="design" id="design">
                            <form method="post" name="customer-java" onsubmit="return cusvalid()">
                                <div class="fname">
                                    <input type="text" name="fname" id="name-customer" class="inp" placeholder="Fname">
                                </div><br>
                                <div class="fname">
                                    <input type="text" name="lname" id="name-customer" class="inp" placeholder="Lname">
                                </div><br>
                                <div class="fname">
                                    <input type="text" name="mobile" id="name-customer" class="inp" placeholder="Mobile"><br>
                                </div>
                                <div class="fname">
                                    <input type="email" name="email" id="name-customer" class="inp" placeholder="Email"><br>
                                </div>
                                <div class="fname">
                                    <input type="password" name="password" id="name-customer" class="inp" placeholder="password"><br>
                                </div>
                                <div class="fname">
                                    <input type="text" name="address" id="name-customer" class="inp" placeholder="Address"><br>
                                </div>
                                <div class="btn-border"> 
                                    <input type="submit" name="sub-btn" id="submit">
                                </div>
                            </form>
                            </div></span>
                        </div>
                        
                        <div class="customer-view-list" id="tablecus">	
                        <div class="jumbotron" id="jumbocustomershowlist" style="color: black;width: 85%;margin: auto;">
                                    <strong align="center"><center><h1>customer list</h1></center></strong>
                                </div>
                            <div class="table-customerlist" >
                                <table id="table">
                                        <tr>
                                        <th>ID</th>
                                        <th>Fname</th>
                                        <th>Lname</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Password</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                        </tr>

                                    
                                        <?php
                                            $showcus = "SELECT * FROM customer";
                                            $ans = mysqli_query($conn , $showcus);
                                            if($ans){
                                                while($row = mysqli_fetch_assoc($ans)){
                                                    $id = $row['id'];
                                                    $first = $row['fname'];
                                                    $last = $row['lname'];
                                                    $phone = $row['mobile'];
                                                    $mail = $row['email'];
                                                    $add = $row['address'];
                                                    $passwo = $row['password'];
                                                    echo '<tr>
                                                        <td>'.$id.'</td>
                                                        <td>'.$first.'</td>
                                                        <td>'.$last.'</td>
                                                        <td>'.$phone.'</td>
                                                        <td>'.$mail.'</td>
                                                        <td>'.$add.'</td>
                                                        <td>'.$passwo.'</td>
                                                        <td>
                                                        <button class="btn btn-primary">
                                                            <a href="updatecus.php?up_cus='.$id.'" class="text-light">Update</a>
                                                        </button>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-danger">
                                                                <a href="delete.php?
                                                                deleteid='.$id.'" class="text-light">Delete</a>
                                                            </button>
                                                        </td>
                                                    </tr>';
                                                }
                                    
                                            }
                                        ?>
                                    
                                </table>
                            </div>
                        </div>
                         <!--customer 2 section end  -->
                    <div class="product-click"> <!--product 2 section  -->
						<div class="jumbotron" id="jumbotron2" style="color: black;width: 85%;margin: auto;">
							<strong align="center"><center><h1>Products</h1></center></strong>
						</div>
                        <div class="btn-add-customer" id="menu-bar-product">
                            <button type="button" class="btn btn-primary add-list hex-color1" style="background-image: linear-gradient(135deg,  #12D8FA  51%, #1FA2FF  100%);" onclick="addpro()">ADD Product</button>
                            <button type="button" class="btn btn-primary add-list hex-color2" style="background-image: linear-gradient( 135deg, #FEB692 10%, #EA5455 100%);" onclick="showpro()">Product LIST</button>
                        </div>
                        <div class="form-add-customer" id="show-form-pro"><span id="<?php $aftersubpro = 'show-form-pro';
                        echo $aftersubpro; ?>">
                                <div class="jumbotron" id="jumboproductadd" style="color: black;width: 85%;margin: auto;">
                                    <strong align="center"><center><h1>Add product</h1></center></strong>
                                </div>
                            <div class="design">
                            <form method="post" name="provalidate" onsubmit="return provalid()">
                                <div class="fname">
                                    <input type="text" name="Pname" id="name-customer" class="inp" placeholder="Product name">
                                </div><br>
                                <div class="fname">
                                <input type="text" name="price" id="name-customer" class="inp" placeholder="Price">
                                </div><br>
                                <div class="fname">
                                <input type="text" name="weight" id="name-customer" class="inp" placeholder="Weight">
                                </div><br>
                                <div class="fname">
                                <input type="text" name="carats" id="name-customer" class="inp" placeholder="Carats">
                                </div><br>
                                <div class="fname">
                                <input type="text" name="stocks" id="name-customer" class="inp" placeholder="Stock">
                                </div><br>
                                <input type="submit" name="sub" id="button" class="inp"><br>
                            </form>
                            </div></span>
                        </div>
                        <div class="product-view-list" id="tablepro">
                        <div class="jumbotron" id="jumboproductshowlist" style="color: black;width: 85%;margin: auto;">
                                    <strong align="center"><center><h1>Product list</h1></center></strong>
                                </div>
                            <div class="table-customerlist" >
                                <table id="table">
                                    <tbody>
                                        <tr>
                                        <th>ID</th>
                                        <th>Pname</th>
                                        <th>Price</th>
                                        <th>Weight</th>
                                        <th>Carats</th>
                                        <th>Stocks</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                    <?php
                                            $showpro = "SELECT * FROM product";
                                            $anspro = mysqli_query($conn , $showpro);
                                            if($anspro){
                                                while($row = mysqli_fetch_assoc($anspro)){
                                                    $id = $row['id'];
                                                    $productname = $row['pname'];
                                                    $rs = $row['price'];
                                                    $weig = $row['weight'];
                                                    $cara = $row['carats'];
                                                    $sto = $row['stocks'];
                                                    echo '<tr>
                                                        <td>'.$id.'</td>
                                                        <td>'.$productname.'</td>
                                                        <td>'.$rs.'</td>
                                                        <td>'.$weig.'</td>
                                                        <td>'.$cara.'</td>
                                                        <td>'.$sto.'</td>
                                                        <td>
                                                        <button class="btn btn-primary">
                                                            <a href="updatepro.php?up_id='.$id.'" class="text-light">Update</a>
                                                        </button>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-danger">
                                                                <a href="deleteproduct.php?
                                                                deleteidpro='.$id.'" class="text-light">Delete</a>
                                                            </button>
                                                        </td>
                                                    </tr>';
                                                }
                                    
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<!--                                    customer 2 section end                        -->
					<div class="container1">
<!--                                    inner dashboard start                         -->
                        <span id="<?php $dash = 'dashboard';
                        echo $dash?>"><div class="dashboard" id="dashboard">
                        <div class="jumbotron" style="color: black;width: 85%;margin: auto;">
							<strong align="center"><center><h1>Dashboard</h1></center></strong>
						</div>
							
							<div class="dashboard-btn row" style="margin: 60px 0px 0px;row-gap:90px">
								
								<div class="col-sm-6"><a href="#" >
                                    <button type="button" class="btn btn-danger" onclick="showcus()"><i class="fas fa-location-arrow"></i> Total Customers
                                <p>
                                    <?php
                                    $user = "root";
                                    $pass = "";
                                    $servername = "localhost";
                                    $database = "adminpanel";
                                    
                                    $conn = mysqli_connect($servername , $user , $pass , $database);
                                    if(!$conn){
                                        echo"nai chale";
                                    }
                                    $sql = "SELECT COUNT(id) FROM customer";
                                    
                                    if($result = mysqli_query($conn, $sql)){
                                        while($row = mysqli_fetch_row($result)){
                                            print($row[0]);
                                    }
                                    }
                                else{
                                    echo"u bhore tu";
                                }
                                ?></p>
                                
                                </button></a></div>
								<div class="col-sm-6"><a href="#" >
                                    <button type="button" class="btn btn-primary" onclick="showpro()"><i class="fas fa-gem"></i> Total Products 
                                <p>
                                <?php
                                    $user = "root";
                                    $pass = "";
                                    $servername = "localhost";
                                    $database = "adminpanel";
                                    
                                    $conn = mysqli_connect($servername , $user , $pass , $database);
                                    if(!$conn){
                                        echo"nai chale";
                                    }
                                    $sql = "SELECT COUNT(id) FROM product";
                                    
                                    if($result = mysqli_query($conn, $sql)){
                                        while($row = mysqli_fetch_row($result)){
                                            print($row[0]);
                                    }
                                }
                                else{
                                    echo" u bho re tu ";
                                }
                                ?>
                                </p>
                                </button></a></div>
								<div class="col-sm-6"><a href="#" >
                                    <button type="button" class="btn btn-warning" onclick="goldhistory()"><i class="fas fa-rupee-sign"></i> Gold Price <p>
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
                                        
                                        </p>
                                    </button></a></div>
								<div class="col-sm-6"><a href="#" ><button type="button" class="btn " style="background:#707070" onclick="sliverhistory()"><i class="fas fa-rupee-sign"></i> Silver Price
                                        <p>
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
                                        </p>
                                    </button></a></div>
    							</div>
						</div>
                        </span>
					</div>
<!--                                    inner dashboard end                         -->


						
                        <div class="gold-sliver-btn" >
                            <div class="btn-add-gs-price"id="menu-bar-gs" >
                                <div class="jumbotron" id="jumb0" style="color: black;width: 85%;margin: auto;">
                                    <strong align="center"><center><h1>Gold & Silver</h1></center></strong>
                                </div><br>
								<div class="buttons" style="display: flex;margin: 80px 75px 0px 0px">
                                    <button type="button" class="btn btn-primary add-list hex-color1" style="background-image: linear-gradient(135deg,  #12D8FA  51%, #1FA2FF  100%);margin: 0px 25px;" onclick="goldmenu()">GOLD</button>
                                    <button type="button" class="btn btn-primary add-list hex-color2" style="background-image: linear-gradient( 135deg, #FEB692 10%, #EA5455 100%);margin: 0px 25px;" onclick="slivermenu()">SLIVER</button>
								</div>
							</div>
                        </div>
<!--                                    Gold and Sliver button on dashboard end                         -->

                        <div class="gold-sliver-btn">
<!--                                    inner gold section start (2 button )                         -->
                            <div class="btn-add-list-gs-price" id="gold-add-list">
                                    <button type="button" class="btn btn-primary add-list hex-color1" style="background-image: linear-gradient(135deg,  #12D8FA  51%, #1FA2FF  100%);" onclick="goldform()">Add Gold price</button>
                                    <button type="button" class="btn btn-primary add-list hex-color2" style="background-image: linear-gradient( 135deg, #FEB692 10%, #EA5455 100%);" onclick="goldhistory()">History gold price</button>
                            </div>
                        </div>
<!--                                    inner sliver section start (2 button )                         -->

                        <div class="gold-sliver-btn">
                            <div class="btn-add-list-gs-price" id="sliver-add-list">
                                    <button type="button" class="btn btn-primary add-list hex-color1" style="background-image: linear-gradient(135deg,  #12D8FA  51%, #1FA2FF  100%);" onclick="sliverform()">Add Sliver price</button>
                                    <button type="button" class="btn btn-primary add-list hex-color2" style="background-image: linear-gradient( 135deg, #FEB692 10%, #EA5455 100%);" onclick="sliverhistory()">History Sliver price</button>
                            </div>
                        </div>


<!--                                    Form for add gold                         -->
                            <div class="change-gold-form" id="gform"><span id="<?php $goldform = 'gform';
                        echo $goldform; ?>">
                            <div class="jumbotron" id="jumbogold" style="color: black;width: 85%;margin: auto;">
                                    <strong align="center"><center><h1>Add gold Form</h1></center></strong>
                                </div>
                            <div class="form-add-gold">
                                <div class="design">
                                <form method="post">
                                    <div class="goldprice">
                                        <input type="text" name="goldprice" id="name-customer" class="inp" placeholder="Today's gold price">
                                    </div><br>
                                    <div class="goldprice">
                                        <input type="date" name="date" id="name-customer" class="inp" placeholder="Today's date" required>
                                    </div><br>
                                    <input type="submit" name="subg" id="button" class="inp"><br>
                                </form>
                                </div>
                            </div>
                        </div>

<!--                                    Form for add sliver                         -->
                        <span class="change-sliver-form" id="sform"><span id="<?php $sliverform = "sform";
                        echo $sliverform;?>">
                                <div class="jumbotron" id="jumbosliver" style="color: black;width: 85%;margin: auto;">
                                    <strong align="center"><center><h1>Add Sliver Form</h1></center></strong>
                                </div>
                            <div class="form-add-sliver">
                                
                                <div class="design">
                                <form method="post">
                                    <div class="sliverprice">
                                        <input type="text" name="sliverprice" id="name-customer" class="inp" placeholder="Today's sliver price">
                                    </div><br>
                                    <div class="sliverprice">
                                        <input type="date" name="datesliver" id="name-customer" class="inp" required>
                                    </div><br>
                                    <input type="submit" name="subs" id="button" class="inp"><br>
                                </form>
                                <?php
                                                                  
                                    ?>
                                </div>
                            </div></span></span>
                        </div>
<!--                                    table gold data                         -->
                        <div class="gold-tablelist" id="tablegold">
                        <div class="jumbotron" id="jumbotablegold" style="color: black;width: 85%;margin: auto;">
                                    <strong align="center"><center><h1>Gold History</h1></center></strong>
                                </div>
                            <div class="table-gold-list" >
                                <table id="table-gold">
                                        <tr>
                                        <th style="background: black;color: white;">ID</th>
                                        <th style="background: black;color: white;">Gold Price</th>
                                        <th style="background: black;color: white;">date</th>
                                        </tr>
                                    <?php
                                            $showgol = "SELECT * FROM gold";
                                            $ansgol = mysqli_query($conn , $showgol);
                                            if($ansgol){
                                                while($row = mysqli_fetch_assoc($ansgol)){
                                                    $id = $row['id'];
                                                    $goldp = $row['goldprice'];
                                                    $date = $row['date'];
                                                    echo '<tr>
                                                        <td>'.$id.'</td>
                                                        <td>'.$goldp.'</td>
                                                        <td>'.$date.'</td>
                                                    </tr>';
                                                }
                                            }
                                        ?>
                                </table>
                            </div>
                        </div>

<!--                                    table sliver data                         -->
                        <div class="sliver-tablelist" id="tablesliver">
                        <div class="jumbotron" id="jumbotablesliver" style="color: black;width: 85%;margin: auto;">
                                    <strong align="center"><center><h1>Sliver History</h1></center></strong>
                                </div>
                            <div class="table-sliver-list" >
                                <table id="table-gold">
                                    <tbody>
                                        <tr>
                                        <th style="background: black;color: white;">ID</th>
                                        <th style="background: black;color: white;">Sliver Price</th>
                                        <th style="background: black;color: white;">date</th>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                    <?php
                                            include'connection.php';
                                            $showsli = "SELECT * FROM sliver";
                                            $anssli = mysqli_query($conn , $showsli);
                                            if($anssli){
                                                while($row = mysqli_fetch_assoc($anssli)){
                                                    $id = $row['id'];
                                                    $slidp = $row['sliverprice'];
                                                    $date = $row['date'];
                                                    echo '<tr>
                                                        <td>'.$id.'</td>
                                                        <td>'.$slidp.'</td>
                                                        <td>'.$date.'</td>
                                                    </tr>';
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <?php
    #customer data add
    include'connection.php';
    if(isset($_POST['sub-btn'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO customer (fname , lname, mobile , email , address , password) VALUES ('$fname' , '$lname' , '$mobile' , '$email' , '$address' , '$password')";
        if(mysqli_query($conn,$sql)){
            // header("location:admin.php");
            echo"<script>document.getElementById('$aftersubcus').style.display = 'block';</script>";
            echo"<script>document.getElementById('$dash').style.display = 'none';</script>";
        }
        else{
            die(mysqli_error($conn));
        }
        
    }
    #product data add
    if(isset($_POST['sub']))
	{
        $pname = $_POST['Pname'];
        $price = $_POST['price'];
        $weight = $_POST['weight'];
        $carats = $_POST['carats'];
        $stocks = $_POST['stocks'];

        $pro = "INSERT INTO product (pname, price , weight , carats , stocks) VALUES ('$pname', '$price' , '$weight' , '$carats' , '$stocks')";
        if(mysqli_query($conn,$pro)){
            echo"<script>document.getElementById('$aftersubpro').style.display = 'block';</script>";
            echo"<script>document.getElementById('$dash').style.display = 'none';</script>";
        }
        else{
            die(mysqli_error($conn));
        }
        
    }
    #gold price add
    if(isset($_POST['subg'])){
        $resultgold = $_POST['goldprice'];
        $dategold = $_POST['date'];

        $pro = "INSERT INTO gold (goldprice, date) VALUES ('$resultgold', '$dategold') ";
        if(mysqli_query($conn,$pro)){
            echo"<script>document.getElementById('$goldform').style.display = 'block';</script>";
            echo"<script>document.getElementById('$dash').style.display = 'none';</script>";
        }
        else{
            echo "gold price not inserted sorry";
        }
        
    }  
    #sliver price add
    if(isset($_POST['subs'])){
        $resultsliver = $_POST['sliverprice'];
        $datesliver = $_POST['datesliver'];

        $pro = "INSERT INTO sliver (sliverprice, date) VALUES ('$resultsliver', '$datesliver') ";
        if(mysqli_query($conn,$pro)){
            echo"<script>document.getElementById('$sliverform').style.display = 'block';</script>";
            echo"<script>document.getElementById('$dash').style.display = 'none';</script>";
        }
        else{
            echo " not inserted sorry";
        }
        
    }  
    ?>
<!--                                    end of the Html document                         -->
    <script>
                function cusvalid() {
                var x = document.forms["customer-java"]["fname"].value;
                if (x == "") {
                alert("please enter first name");
                return false;
                }
                var c = document.forms["customer-java"]["lname"].value;
                if (c == "") {
                alert("please enter last name");
                return false;
                }
                var d = document.forms["customer-java"]["email"].value;
                if (d == "") {
                alert("please enter email of customer");
                return false;
                }
                var xe = document.forms["customer-java"]["password"].value;
                if (xe == "") {
                alert("please enter password of customer");
                return false;
                }
                var f = document.forms["customer-java"]["address"].value;
                if (f == "") {
                alert("please enter address OF customer");
                return false;
                }
                /* var phone = document.forms["customer-java"]["mobile"].value;
                var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
                    if(phone.value.match(phoneNum)) {
                        return true;
                    }
                    else {
                        document.getElementById("phone").className = document.getElementById("phone").className + " error";
                        return false;
                    } */
        }



        function provalid() {
                var x = document.forms["provalidate"]["Pname"].value;
                if (x == "") {
                alert("please enter product name");
                return false;
                }
                var c = document.forms["provalidate"]["price"].value;
                if (c == "") {
                alert("please enter price of the product");
                return false;
                }
                var d = document.forms["provalidate"]["weight"].value;
                if (d == "") {
                alert("please enter weight of product");
                return false;
                }
                var xe = document.forms["provalidate"]["carats"].value;
                if (xe == "") {
                alert("please enter carats of product");
                return false;
                }
                var f = document.forms["provalidate"]["stocks"].value;
                if (f == "") {
                alert("please enter stocks of product");
                return false;
                }
        }



        function dash(){
            document.getElementById('dashboard').style.display = "block";
            document.getElementById('menu-bar-customer').style.display = "none";
            document.getElementById('show-form').style.display = "none";
            document.getElementById('tablecus').style.display = "none";
            document.getElementById('menu-bar-product').style.display = "none";
            document.getElementById('show-form-pro').style.display = "none";
            document.getElementById('tablepro').style.display = "none";
            document.getElementById('menu-bar-gs').style.display = "none";
            document.getElementById('gform').style.display = "none";
            document.getElementById('sform').style.display = "none";
            document.getElementById('tablegold').style.display = "none";
            document.getElementById('tablesliver').style.display = "none";
            document.getElementById('sliver-add-list').style.display = "none";
            document.getElementById('gold-add-list').style.display = "none";
            document.getElementById('jumbotron').style.display = "none";
            document.getElementById('jumbotron2').style.display = "none";
			document.getElementById('jumbotron3').style.display = "none";
        }
        function customermenu(){
            document.getElementById('menu-bar-customer').style.display = "flex";
            document.getElementById('dashboard').style.display = "none";
            document.getElementById('show-form').style.display = "none";
            document.getElementById('tablecus').style.display = "none";
            document.getElementById('menu-bar-product').style.display = "none";
            document.getElementById('show-form-pro').style.display = "none";
            document.getElementById('tablepro').style.display = "none";
            document.getElementById('menu-bar-gs').style.display = "none";
            document.getElementById('gform').style.display = "none";
            document.getElementById('sform').style.display = "none";
            document.getElementById('tablegold').style.display = "none";
            document.getElementById('tablesliver').style.display = "none";
            document.getElementById('sliver-add-list').style.display = "none";
            document.getElementById('gold-add-list').style.display = "none";
			 document.getElementById('jumbotron').style.display = "block";
			 document.getElementById('jumbotron2').style.display = "none";
			 document.getElementById('jumbotron3').style.display = "none";
			 
        }
        function addcus(){
            document.getElementById('show-form').style.display = "block";
            document.getElementById('dashboard').style.display = "none";
            document.getElementById('menu-bar-customer').style.display = "none";
            document.getElementById('tablecus').style.display = "none";
            document.getElementById('menu-bar-product').style.display = "none";
            document.getElementById('show-form-pro').style.display = "none";
            document.getElementById('tablepro').style.display = "none";
            document.getElementById('menu-bar-gs').style.display = "none";
            document.getElementById('gform').style.display = "none";
            document.getElementById('sform').style.display = "none";
            document.getElementById('tablegold').style.display = "none";
            document.getElementById('tablesliver').style.display = "none";
            document.getElementById('sliver-add-list').style.display = "none";
            document.getElementById('gold-add-list').style.display = "none";
			 document.getElementById('jumbotron').style.display = "none";
			 document.getElementById('jumbotron2').style.display = "none";
			 document.getElementById('jumbotron3').style.display = "none";
        }
        function showcus(){
            document.getElementById('tablecus').style.display = "block";
            document.getElementById('dashboard').style.display = "none";
            document.getElementById('menu-bar-customer').style.display = "none";
            document.getElementById('show-form').style.display = "none";
            document.getElementById('menu-bar-product').style.display = "none";
            document.getElementById('show-form-pro').style.display = "none";
            document.getElementById('tablepro').style.display = "none";
            document.getElementById('menu-bar-gs').style.display = "none";
            document.getElementById('gform').style.display = "none";
            document.getElementById('sform').style.display = "none";
            document.getElementById('tablegold').style.display = "none";
            document.getElementById('tablesliver').style.display = "none";
            document.getElementById('sliver-add-list').style.display = "none";
            document.getElementById('gold-add-list').style.display = "none";
			 document.getElementById('jumbotron').style.display = "none";
			 document.getElementById('jumbotron2').style.display = "none";
			 document.getElementById('jumbotron3').style.display = "none";
        }
        function productmenu(){
            document.getElementById('menu-bar-product').style.display = "flex";
            document.getElementById('dashboard').style.display = "none";
            document.getElementById('menu-bar-customer').style.display = "none";
            document.getElementById('show-form').style.display = "none";
            document.getElementById('tablecus').style.display = "none";
            document.getElementById('show-form-pro').style.display = "none";
            document.getElementById('tablepro').style.display = "none";
            document.getElementById('menu-bar-gs').style.display = "none";
            document.getElementById('gform').style.display = "none";
            document.getElementById('sform').style.display = "none";
            document.getElementById('tablegold').style.display = "none";
            document.getElementById('tablesliver').style.display = "none";
            document.getElementById('sliver-add-list').style.display = "none";
            document.getElementById('gold-add-list').style.display = "none";
			 document.getElementById('jumbotron').style.display = "none";
			document.getElementById('jumbotron2').style.display = "block";
			document.getElementById('jumbotron3').style.display = "none";

        }
        function addpro(){
            document.getElementById('show-form-pro').style.display = "block";
            document.getElementById('dashboard').style.display = "none";
            document.getElementById('menu-bar-customer').style.display = "none";
            document.getElementById('show-form').style.display = "none";
            document.getElementById('tablecus').style.display = "none";
            document.getElementById('menu-bar-product').style.display = "none";
            document.getElementById('tablepro').style.display = "none";
            document.getElementById('menu-bar-gs').style.display = "none";
            document.getElementById('gform').style.display = "none";
            document.getElementById('sform').style.display = "none";
            document.getElementById('tablegold').style.display = "none";
            document.getElementById('tablesliver').style.display = "none";
            document.getElementById('sliver-add-list').style.display = "none";
            document.getElementById('gold-add-list').style.display = "none";
			 document.getElementById('jumbotron').style.display = "none";
			 document.getElementById('jumbotron2').style.display = "none";
			 document.getElementById('jumbotron3').style.display = "none";
        }
        function showpro(){
            document.getElementById('tablepro').style.display = "block";
            document.getElementById('dashboard').style.display = "none";
            document.getElementById('menu-bar-customer').style.display = "none";
            document.getElementById('show-form').style.display = "none";
            document.getElementById('tablecus').style.display = "none";
            document.getElementById('menu-bar-product').style.display = "none";
            document.getElementById('show-form-pro').style.display = "none";
            document.getElementById('menu-bar-gs').style.display = "none";
            document.getElementById('gform').style.display = "none";
            document.getElementById('sform').style.display = "none";
            document.getElementById('tablegold').style.display = "none";
            document.getElementById('tablesliver').style.display = "none";
            document.getElementById('sliver-add-list').style.display = "none";
            document.getElementById('gold-add-list').style.display = "none";
			 document.getElementById('jumbotron').style.display = "none";
			document.getElementById('jumbotron2').style.display = "none";
			document.getElementById('jumbotron3').style.display = "none";
        }
        function gsmenu(){
            document.getElementById('menu-bar-gs').style.display = "flex";
            document.getElementById('dashboard').style.display = "none";
            document.getElementById('menu-bar-customer').style.display = "none";
            document.getElementById('show-form').style.display = "none";
            document.getElementById('tablecus').style.display = "none";
            document.getElementById('menu-bar-product').style.display = "none";
            document.getElementById('show-form-pro').style.display = "none";
            document.getElementById('tablepro').style.display = "none";
            document.getElementById('gform').style.display = "none";
            document.getElementById('sform').style.display = "none";
            document.getElementById('tablegold').style.display = "none";
            document.getElementById('tablesliver').style.display = "none";
            document.getElementById('sliver-add-list').style.display = "none";
            document.getElementById('gold-add-list').style.display = "none";
			 document.getElementById('jumbotron').style.display = "none";
			 document.getElementById('jumbotron2').style.display = "none";
			 document.getElementById('jumbotron3').style.display = "none";
        }
        function goldform(){
            document.getElementById('gform').style.display = "block";
            document.getElementById('dashboard').style.display = "none";
            document.getElementById('menu-bar-customer').style.display = "none";
            document.getElementById('show-form').style.display = "none";
            document.getElementById('tablecus').style.display = "none";
            document.getElementById('menu-bar-product').style.display = "none";
            document.getElementById('show-form-pro').style.display = "none";
            document.getElementById('tablepro').style.display = "none";
            document.getElementById('menu-bar-gs').style.display = "none";
            document.getElementById('sform').style.display = "none";
            document.getElementById('tablegold').style.display = "none";
            document.getElementById('tablesliver').style.display = "none";
            document.getElementById('sliver-add-list').style.display = "none";
            document.getElementById('gold-add-list').style.display = "none";
			 document.getElementById('jumbotron').style.display = "none";
			 document.getElementById('jumbotron2').style.display = "none";
			 document.getElementById('jumbotron3').style.display = "none";
			 document.getElementById('jumbogold').style.display = "block";
			 document.getElementById('jumbosliver').style.display = "block";
             
        }
        function sliverform(){
            document.getElementById('sform').style.display = "block";
            document.getElementById('dashboard').style.display = "none";
            document.getElementById('menu-bar-customer').style.display = "none";
            document.getElementById('show-form').style.display = "none";
            document.getElementById('tablecus').style.display = "none";
            document.getElementById('menu-bar-product').style.display = "none";
            document.getElementById('show-form-pro').style.display = "none";
            document.getElementById('tablepro').style.display = "none";
            document.getElementById('menu-bar-gs').style.display = "none";
            document.getElementById('gform').style.display = "none";
            document.getElementById('tablegold').style.display = "none";
            document.getElementById('tablesliver').style.display = "none";
            document.getElementById('sliver-add-list').style.display = "none";
            document.getElementById('gold-add-list').style.display = "none";
			 document.getElementById('jumbotron').style.display = "none";
			 document.getElementById('jumbotron2').style.display = "none";
			 document.getElementById('jumbotron3').style.display = "none";
        }
        function goldmenu(){
            document.getElementById('gold-add-list').style.display = "flex";
            document.getElementById('dashboard').style.display = "none";
            document.getElementById('menu-bar-customer').style.display = "none";
            document.getElementById('show-form').style.display = "none";
            document.getElementById('tablecus').style.display = "none";
            document.getElementById('menu-bar-product').style.display = "none";
            document.getElementById('show-form-pro').style.display = "none";
            document.getElementById('tablepro').style.display = "none";
            document.getElementById('menu-bar-gs').style.display = "none";
            document.getElementById('gform').style.display = "none";
            document.getElementById('sform').style.display = "none";
            document.getElementById('tablegold').style.display = "none";
            document.getElementById('tablesliver').style.display = "none";
            document.getElementById('sliver-add-list').style.display = "none";
			 document.getElementById('jumbotron').style.display = "none";
			 document.getElementById('jumbotron2').style.display = "none";
			 document.getElementById('jumbotron3').style.display = "none";
        }
        function slivermenu(){
            document.getElementById('sliver-add-list').style.display = "flex";
            document.getElementById('dashboard').style.display = "none";
            document.getElementById('menu-bar-customer').style.display = "none";
            document.getElementById('show-form').style.display = "none";
            document.getElementById('tablecus').style.display = "none";
            document.getElementById('menu-bar-product').style.display = "none";
            document.getElementById('show-form-pro').style.display = "none";
            document.getElementById('tablepro').style.display = "none";
            document.getElementById('menu-bar-gs').style.display = "none";
            document.getElementById('gform').style.display = "none";
            document.getElementById('sform').style.display = "none";
            document.getElementById('tablegold').style.display = "none";
            document.getElementById('tablesliver').style.display = "none";
            document.getElementById('gold-add-list').style.display = "none";
			 document.getElementById('jumbotron').style.display = "none";
			 document.getElementById('jumbotron2').style.display = "none";
			 document.getElementById('jumbotron3').style.display = "none";
        }

        function goldhistory(){
            document.getElementById('tablegold').style.display = "block";
            document.getElementById('dashboard').style.display = "none";
            document.getElementById('menu-bar-customer').style.display = "none";
            document.getElementById('show-form').style.display = "none";
            document.getElementById('tablecus').style.display = "none";
            document.getElementById('menu-bar-product').style.display = "none";
            document.getElementById('show-form-pro').style.display = "none";
            document.getElementById('tablepro').style.display = "none";
            document.getElementById('menu-bar-gs').style.display = "none";
            document.getElementById('gform').style.display = "none";
            document.getElementById('sform').style.display = "none";
            document.getElementById('tablesliver').style.display = "none";
            document.getElementById('sliver-add-list').style.display = "none";
            document.getElementById('gold-add-list').style.display = "none";
			 document.getElementById('jumbotron').style.display = "none";
			 document.getElementById('jumbotron2').style.display = "none";
			 document.getElementById('jumbotron3').style.display = "none";
             document.getElementById('jumbotablegold').style.display = "block";
        }
        function sliverhistory(){
            document.getElementById('tablesliver').style.display = "block";
            document.getElementById('dashboard').style.display = "none";
            document.getElementById('menu-bar-customer').style.display = "none";
            document.getElementById('show-form').style.display = "none";
            document.getElementById('tablecus').style.display = "none";
            document.getElementById('menu-bar-product').style.display = "none";
            document.getElementById('show-form-pro').style.display = "none";
            document.getElementById('tablepro').style.display = "none";
            document.getElementById('menu-bar-gs').style.display = "none";
            document.getElementById('gform').style.display = "none";
            document.getElementById('sform').style.display = "none";
            document.getElementById('tablegold').style.display = "none";
            document.getElementById('sliver-add-list').style.display = "none";
            document.getElementById('gold-add-list').style.display = "none";
			 document.getElementById('jumbotron').style.display = "none";
			 document.getElementById('jumbotron2').style.display = "none";
			 document.getElementById('jumbotron3').style.display = "none";
        }
    </script>
</body>
</html>