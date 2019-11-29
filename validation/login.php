<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<link rel="stylesheet" type="text/css" href="b.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body class="body">
	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 left ">
				<h2>LOGIN HERE</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>username:</label>
						<input type="text" name="username" class="form-control" required>
					</div>
					<div class="form-group">
						<label>password:</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class=" btn btn-primary">LOGIN </button>
				</form>
			</div>
		<div class="col-md-6 right">
				<h2>REGISTER HERE</h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>username:</label>
						<input type="text" name="username" class="form-control" required>
					</div>
					<div class="form-group">
						<label>password:</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class=" btn btn-primary">REGISTER </button>
				</form>




	</div>  

	</div>
</body>
</html>