<?php 
require('config.php');
$id= $_GET['id'];
 $select = "SELECT * from cust_detail where id=".$id; 
$query = mysqli_query($conn, $select);
$result =mysqli_fetch_array($query);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>UPDATE PAGE</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
		<div class="row">
		<div class="col-md-4">
		<h2>Edit Members Details</h2>
			<div class="panel panel-danger">
			<div class="panel-heading">UPDATE FORM</div>
			<div class="panel-body">
			<form method="post" action="cust_update.php">
			<div class="form-group">
			<label for="name">Name:</label>
			<input type="name" name="name"class="form-control" value="<?php echo $result['name'];?>"id="name">
			</div>
			<div class="form-group">
			<label for="email">Email address:</label>
			<input type="email" name="email" class="form-control" value="<?php echo $result['email'];?>" id="email">
			</div>
			<div class="form-group">
			<label for="mobile">Mobile:</label>
			<input type="text" name="mobile" class="form-control" value="<?php echo $result['mobile'];?>"id="mobile">
			</div>
			<div class="form-group">
			<label for="address">Address:</label>
			<textarea class="form-control" name="address" rows="3" id="address"><?php echo $result['addr'];?></textarea>
			</div>
			<div class="form-group">
			<label for="gender">Gender:</label>
			<div class="checkbox">
			<label><input type="checkbox" name="gender" value="male" <?php if(isset($result['gender']) && $result['gender'] == "male" ) echo "checked";?>>Male</label>
			</div>
			<div class="checkbox">
			<label><input type="checkbox" name="gender" value="female">Female</label>
			</div>
			</div>
			<input type="hidden" name="id" value="<?php echo $result['id'];?>">
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