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
    <title>Login | PJ</title>
    <style>
        body{
            padding: 105px;
        }
       
    </style>
</head>
<body style="background-color: #fdb813;background-image: linear-gradient(315deg, #fdb813 0%, #788cb6 74%);">
	<center>
    <div class="container">
        <div class="login-page" style="background: rgba(0, 0, 0, 0.2); height: 500px;border-radius: 25px;padding:1%;">
			<div class="heading" style="font-family:Segoe UI;font-size:220%;">
				<b><p>Parekh Jewelers</p></b>
			</div>
			<div class="header" style="margin: 5% 0% -1% -27%;font-family:Microsoft JhengHei;font-size: 145%;">
				<p style="position: relative;top: 20px;">Admin Login</p><br>
			</div>
            <?php
                $user = "root";
                $pass = "";
                $servername = "localhost";
                $database = "adminpanel";

                $conn = mysqli_connect($servername , $user , $pass , $database);
                if(!$conn){
                    echo"nai chale";
                }
                if(isset($_POST['submit-btn'])){
                        $name = $_POST['login'];
                        $pas = $_POST['ent'];
                        $print="";
                        if($name == "admin"){
                            if($pas == "password123"){
                                header("location:admin.php");
                            }
                            else{
                                $alert = "<script>alert('wrong password')</script>";
                                echo $alert;
                            }
                            
                        }
                        else{
                            $alertadmin = "<script>alert('Admin Id Wrong')</script>";
                                echo $alertadmin;
                        }
                }
            ?>
			
            <form method="post">
				<div class="form-group row">
					<div class="col-sm-12">
						<input type="text" name="login" class="form-control" id="log" placeholder="Enter username" required style="width: 40%;">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><br>
					</div>
					<div class="col-sm-12">
						<input type="password" name="ent" id="ent" class="form-control" placeholder="Enter password" required style="width: 40%;">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><br>
					</div>
					<div class="col-sm-12">
						<button type="submit-btn" name="submit-btn" class="btn btn-primary" id="btn" style="width: 20%;">Login</button>
					</div>
				</div>
            </form>
			
        </div>
    </div>
	</center>
</body>
</html>