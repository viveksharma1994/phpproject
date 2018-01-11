<?php
include'config.php';

$id = $_GET['id'];
$select = "SELECT * FROM cust_detail WHERE id=".$id;
$query = mysqli_query($conn,$select);
$res = mysqli_fetch_array($query);

$sql = "UPDATE cust_detail SET role='1' WHERE id=".$id;

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}



?>