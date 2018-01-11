<?php 
session_start();
include('config.php');

$email = $_POST['email'];
echo $email;
$_SESSION['email'] = $email;

 $_SESSION['email'];

	$email = $_POST['email'];
	$password = $_POST['password'];
	
	 $select = "SELECT * FROM cust_detail where email='".$email."' and password='".$password."'";
 
	$query = mysqli_query($conn, $select);
	
if($row = mysqli_fetch_assoc($query)){

	echo "you are Logged in Successfully";
	header('location:cust_view.php');
}
else{


	echo "invalid email and password";
}
	

?>