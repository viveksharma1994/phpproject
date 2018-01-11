<?php
include('config.php');

      if(isset($_POST)){
      	$name = $_POST['name'];
      	$name = filter_var($name, FILTER_SANITIZE_STRING);
	    
	    echo"<br>";


	 $mobile = $_POST['mobile'];
	 


  $email = $_POST['email'];
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
  if (filter_var($email, FILTER_VALIDATE_EMAIL) === False) {
    echo("$email is a not valid email address");
    } else {
    echo("$email is valid email address");
    echo"<br>";
   }

	 $address = $_POST['address'];

	 $gender = $_POST['gender'];
	 $password = $_POST['password'];

   

	 

	 
	 
	 $insert = "INSERT INTO cust_detail(name, email,mobile,address,gender,password) VALUES ('".$name."','".$email."','".$mobile."','".$address."','".$gender."','".$password."')";
	 $query = mysqli_query($conn, $insert);
	 //header("location:cust_login.php");
	  }
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>REGISTRATION PAGE</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
		<div class="row">
		<div class="col-md-4">
			<div class="panel panel-danger">
			<div class="panel-heading">CUSTOMER DETAILS</div>
			<div class="panel-body">
			<form method="post" action="">
			<div class="form-group">
			<label for="name">Name:</label>
			<input type="name" name="name"class="form-control" id="name">
			</div>
			<div class="form-group">
			<label for="email">Email address:</label>
			<input type="text" name="email" class="form-control" id="email">
			</div>
			<div class="form-group">
			<label for="mobile">Mobile:</label>
			<input type="text" name="mobile" class="form-control" id="mobile" maxlength ="10">
			</div>
			<div class="form-group">
			<label for="address">Address:</label>
			<textarea class="form-control" name="address" rows="3" id="address"></textarea>
			</div>
			<div class="form-group">
			<label for="gender">Gender:</label>
			<div class="checkbox">
			<label><input type="checkbox" name="gender" value="male">Male</label>
			</div>
			<div class="checkbox">
			<label><input type="checkbox" name="gender" value="female">Female</label>
			</div>
			<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" class="form-control" id="password">
			</div>
			</div>
			
			<div class="form-group">
			<button type="submit" value="submit"class="btn btn-success">Submit</button>
			</div>
			</form>
		</div>
		</div>
		</div>
		</div>
	</body>
</html>