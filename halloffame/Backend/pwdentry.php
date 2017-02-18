<?php
session_start();
include("db.php");
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
		
		<form class="form-horizontal well"  method="post" action="changepwd.php" role="form">
			<div class="form-group">
				<label class="control-label col-sm-3"  for="newpassword">Enter New Password  <em>(min 5 characters)</em>:</label>
				<div class="col-sm-9">
					<input type="password" name="newpwd" class="form-control" required></input>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="cfmpassword">Confirm New Password  <em>(min 5 characters)</em>:</label>
				<div class="col-sm-9">
					<input type="password" name="cfmpwd" class="form-control" required></input>
				</div>
			</div>
			<div class="form-group"> 
			    <div class="col-sm-offset-3 col-sm-9">
      				<button type="submit" name="change" class="btn btn-default">Change</button>
      				<button type="reset" class="btn btn-default">Reset</button>
    			</div>
  			</div>
  		</form>

  		<a href="takesecquest.php">Back</a>

	</div>
</body>
</html>