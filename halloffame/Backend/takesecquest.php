<?php 

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<title></title>
</head>
<body>
	<div class="container">
		
		<form class="form-horizontal well" method="POST" action="verifysecquest.php" role="form">
			<div class="form-group">
				<label class="control-label col-sm-3" for="username">Username:</label>
				<div class="col-sm-9">
					<input type="text"  name="username" class="form-control" required></input>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="oldpwd">Password:</label>
				<div class="col-sm-9">
					<input type="password" name="oldpwd" class="form-control" required></input>
				</div>
			</div>
			<br>
			<br>
			<div class="form-group">
				<label class="control-label col-sm-3">Select Security Question:</label>
				<div class="col-sm-9">
					<select class="form-control" name="secquest">
						<option value="My school name?">Your School Name</option>
						<option  value="My Best friend">Name of your Best Friend</option>
						<option value="My Favourite color">Your Favourite Color</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="secans">Answer:</label>
				<div class="col-sm-9">
					<input type="text" name="secans" class="form-control"></input>
				</div>
			</div>
			<div class="form-group"> 
			    <div class="col-sm-offset-3 col-sm-9">
      				<button type="submit" class="btn btn-default" name="verify">Change</button>
      				<button type="reset" class="btn btn-default">Reset</button>
    			</div>
  			</div>
  		</form>

  		<a href="login.html">Back</a>

	</div>
</body>
</html>