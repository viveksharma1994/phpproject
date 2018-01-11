<?php 
require('config.php');
$id= $_GET['id'];
$delete = "DELETE from cust_detail where id=".$id;
$query = mysqli_query($conn, $delete);
header("Location:cust_view.php");
?>