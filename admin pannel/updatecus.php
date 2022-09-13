<?php
include'connection.php';
$id = $_GET['up_cus'];

$mysql = "SELECT * FROM customer where id=$id";
$result9 = mysqli_query($conn, $mysql);

if (mysqli_num_rows($result9) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result9)) {
    $fnameup = $row["fname"];
    $lnameup = $row["lname"];
    $mobileup = $row["mobile"];
    $emailup = $row["email"];
    $addressup = $row["address"];
    $passwordup = $row["password"];	
  }
} else {
  echo "0 results";
}

if(isset($_POST['sub-btn'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        $sql = "UPDATE customer SET id=$id, fname='$fname',lname='$lname',mobile='$mobile',email='$email' , address='$address' , 
         password = '$password' WHERE id=$id";
        if(mysqli_query($conn,$sql)){
            header("location:admin.php");
        }
        else{
            die(mysqli_error($conn));
        }
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<title>Update Customer | PJ</title>
    <style>
      
<!-- .design{
    padding: 10px;
    border: 1px solid grey;
    width: 85%;
    float: right;
    
}
.form-add-customer input{
    display: flex;
    align-items: center;
    flex-direction: column;
    border: none;
    background: none;
    outline: none;
} -->
    </style>
</head>
<body>
<div class="form-add-customer" id="show-form">
                        <div class="jumbotron" id="jumbocustomeradd" style="color: black;">
                                    <strong align="center"><h1>Update customer</h1></strong>
                        </div>
                           
								<div class="container">
									<form class="form-horizontal" method="post">
										<div class="form-group">
											<label class="control-label col-sm-2" for="name">First Name:</label>
												<div class="col-sm-10">
													<input type="text" name="fname" id="name-customer" class="form-control" placeholder="Fname" value="<?php echo $fnameup;?>">
												</div>
										</div>
										
										<div class="form-group">
											<label class="control-label col-sm-2" for="name">Last Name:</label>
												<div class="col-sm-10">
													<input type="text" name="lname" id="name-customer" class="form-control" placeholder="Lname" value="<?php echo $lnameup;?>">
												</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2" for="mobile">Mobile:</label>
												<div class="col-sm-10">
													<input type="text" name="mobile" id="name-customer" class="form-control" placeholder="Mobile" value="<?php echo $mobileup;?>"><br>
												</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2" for="email">E-Mail:</label>
												<div class="col-sm-10">
													<input type="email" name="email" id="name-customer" class="form-control" placeholder="Email" value="<?php echo $emailup;?>"><br>
												</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2" for="password">Password:</label>
												<div class="col-sm-10">
													<input type="password" name="password" id="name-customer" class="form-control" placeholder="password" value="<?php echo $passwordup;?>"><br>
												</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2" for="address">Address:</label>
												<div class="col-sm-10">
													<input type="text" name="address" id="name-customer" class="form-control" placeholder="Address" value="<?php echo $addressup;?>"><br>
												</div>
										</div>
										<div class="form-group"> 
											<div class="col-sm-offset-2 col-sm-10">
												<input type="submit" class="btn btn-default" name="sub-btn" id="submit">
											</div>
										</div>
									</form>
								</div>
                           
</div>
        
</body>
</html>