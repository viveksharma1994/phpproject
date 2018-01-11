<?php 
include('config.php');
if(isset($_POST)){
	$id= $_POST['id'];
	$name= $_POST['name'];
	$email= $_POST['email'];
	$mobile= $_POST['mobile'];
	$addr= $_POST['address'];
	$gender= $_POST['gender'];
	
	$update = "UPDATE cust_detail set `name`='".$name."',`email`='".$email."',`mobile`='".$mobile."',`address`='".$address."',`gender`='".$gender."' where id=".$id;
	
	$query = mysqli_query($conn, $update);
	header("Location:cust_view.php");
	
}
?>