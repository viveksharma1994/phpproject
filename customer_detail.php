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
	 $second_add = $_POST['second_add'];

	 $gender = $_POST['gender'];
	 $password = $_POST['password'];

   

	 

	  $sql = "INSERT INTO users(email,password) VALUES ('".$email."','".$password."')";
	 	if(mysqli_query($conn, $sql)){

	 
	  $sql = "INSERT INTO cust_detail(name, email,mobile,address,second_add,gender,password) VALUES ('".$name."','".$email."','".$mobile."','".$address."','".$second_add."','".$gender."','".$password."')";
	 		if (mysqli_query($conn, $sql)) {
    				echo "New record created successfully";
		} else {
    			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

	}else{
		echo "couldnot create user";
	}
	 //header("location:cust_login.php");
	  }
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>REGISTRATION PAGE</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script type="text/javascript" src = "jquery/jquery-3.2.1.min.js"></script>
        <script src = "ajax.js"></script>
        <style>
.form-group .add2 {
	display: none;
}
</style>
        <script>
$(document).ready(function(){
    $(".form-group .add").click(function(){
        $(".add2").toggle();
    });
    // $("").click(function(){
    //     $(".add2").show();
    // });
});
</script>

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
			<label> Address </label>
			<input type ="text" name ="address"	><br>
			 <label class = "add"><input type="checkbox"> Click here To Add secondary address</label><br>
			 <label class ="add2"> Secondary Address<input type ="text" name ="second_add"	> </label><br>
			
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