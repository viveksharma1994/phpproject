
<?php 
session_start();
include('config.php');

$email = $_POST['email'];
//echo $email;
$_SESSION['email'] = $email;

 //echo $_SESSION['email'];

	$email = $_POST['email'];
	$password = $_POST['password'];
	
	 $select = "SELECT * FROM users where email='".$email."' and password='".$password."'";
 
	$query = mysqli_query($conn, $select);
	//print_r($query);
if($query){
	//echo "string<br>";
	$resp = mysqli_fetch_assoc($query);
	$_SESSION['user_id'] = $resp['id'];
		echo "you are Logged in Successfully";
	header('location:cust_view.php');
}
else{


	echo "invalid email and password";
}
	

?>