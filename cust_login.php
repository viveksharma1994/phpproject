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
			<form method="post" action="cust_logincheck.php">
			
			<div class="form-group">
			<label for="email">Email address:</label>
			<input type="email" name="email" class="form-control" id="email">
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