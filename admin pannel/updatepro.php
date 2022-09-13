<?php
    include'connection.php';
$id = $_GET['up_id'];

$mysql = "SELECT * FROM product where id=$id";
$result9 = mysqli_query($conn, $mysql);

if (mysqli_num_rows($result9) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result9)) {
    $pnameup = $row["pname"];
    $weightup = $row["weight"];
    $priceup = $row["price"];
    $caratsup = $row["carats"];
    $stocksup = $row["stocks"];
  }
} else {
  echo "0 results";
}

if(isset($_POST['sub'])){
    $pname = $_POST['Pname'];
    $price = $_POST['price'];
    $weight = $_POST['weight'];
    $carats = $_POST['carats'];
    $stocks = $_POST['stocks'];

    $pro = "UPDATE product SET id=$id, pname='$pname',price='$price',weight='$weight',carats='$carats',
    stocks='$stocks' WHERE id=$id ";
    if(mysqli_query($conn,$pro)){
        header("location:admin.php");
    }
    else{
        
        echo "not updated data in localhost";
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
    <title>Update Products | PJ</title>
    <Style>
.form-add-customer h1{
    font-weight: none;
}
.design{
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
}
    </Style>
</head>
<body>
<div class="form-add-customer" id="show-form-pro">
                                <div class="jumbotron" id="jumboproductadd" style="color: black;">
                                    <strong align="center"><center><h1>Add product</h1></center></strong>
                                </div>
                            <div class="design">
                            <form class="form-horizontal" method="post">
                                <div class="form-group">
									<label class="control-label col-sm-2" for="name">Product Name:</label>
										<div class="col-sm-10">
											<input type="text" name="Pname" id="name-customer" class="form-control" placeholder="Product name" value="<?php echo $pnameup;?>">
										</div>
                                </div>
                                <div class="form-group">
									<label class="control-label col-sm-2" for="name">Price:</label>
										<div class="col-sm-10">
											<input type="text" name="price" id="name-customer" class="form-control" placeholder="Price" value="<?php echo $priceup;?>">
										</div>
                                </div>
                                <div class="form-group">
									<label class="control-label col-sm-2" for="name">Weight:</label>
										<div class="col-sm-10">
											<input type="text" name="weight" id="name-customer" class="form-control" placeholder="Weight" value="<?php echo $weightup;?>">
										</div>
                                </div>
                                <div class="form-group">
									<label class="control-label col-sm-2" for="name">Carats:</label>
										<div class="col-sm-10">
											<input type="text" name="carats" id="name-customer" class="form-control" placeholder="Carats" value="<?php echo $caratsup;?>">
										</div>
                                </div>
                                <div class="form-group">
									<label class="control-label col-sm-2" for="name">Stock:</label>
										<div class="col-sm-10">
											<input type="text" name="stocks" id="name-customer" class="form-control" placeholder="Stock" value="<?php echo $stocksup;?>">
										</div>
                                </div>
                               <div class="form-group"> 
											<div class="col-sm-offset-2 col-sm-10">
												<input type="submit" class="btn btn-default" name="sub" id="button" class="inp">
											</div>
								</div>
                            </form>
                            </div>
                        </div>
</body>
</html>