<?php
session_start();

include('db.php');



$id=$_GET['fullname'];
$query="select * from source where fullname='$id'" ;
$selectimage =mysqli_fetch_object(mysqli_query($con,$query));
$image_name=$selectimage->imagename;

$_SESSION["earlierimagename"] =$image_name;


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

	</head>
	<body>
		<!--Nav Bar-->
		<nav>
			<ul>
				<li><a href="homeedit.php">Home</a></li>
				<li class="active"><a href="hof.php">Hall Of Fame</a></li>
				<li><a href="read.php">Enquiry Form</a></li>
				<br><br>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</nav>

		<div id="div_sec"> 
			<!-- Option to upload & edit -->
			<div class="container-fluid">
				<div id="hof">
					<a href="hof.php"><button type="button" class="btn btn-default btn-lg">Upload</button></a>
					<a href="edittingfinal.php"><button type="button" class="btn btn-danger btn-lg">Edit</button></a>	
				</div>
			</div>
			
			
			
			
			
			
			<?php
		
		   $id=$_GET['fullname'];


		  	
		     $query =mysqli_query($con,"SELECT * from source WHERE fullname='$id' ") ;
			 
			
			while( $row=mysqli_fetch_object($query))
			{
				
        ?>	
			
			
			
			
			<div class="container-fluid">	
				<h2>Enter Student Credentials</h2>
				<form class="form-horizontal" role="form" method="post" action="particularedit.php" enctype="multipart/form-data" >
					<div class="form-group">
						<label class="control-label col-sm-2">Image:</label>
						<div class="col-sm-5">
							<img src="<?php echo $row->imagepath ?>" width="150px" height="150px">
						</div>
						<div class="col-sm-5">
							<input type="file" class="form-control" name="file" ></input>
						</div>
					</div>
					
					
					
					<div class="form-group">
						<label class="control-label col-sm-2">Name:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="name" value="<?php echo $row->fullname?>" disabled></input>
						</div>
						
						
						<?php
						
						      $_SESSION["earlierfullname"]=$row->fullname;
						
						
						?>
						
						
						
						
						
						<div class="col-sm-5">
							<input type="text" class="form-control" id="name" placeholder="Enter new name" name="name" ></input>
						</div>
					</div>
					
					
					
					<div class="form-group">
						<label class="control-label col-sm-2">College Name:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="col_name" value="<?php echo $row->collegename ?>" disabled></input>
						</div>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="col_name" name="colname" placeholder="Enter college name"></input>
						</div>
					</div>
					
					
					
					<div class="form-group">
						<label class="control-label col-sm-2">Semester:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="sem" value="<?php echo $row->semester ?>" disabled></input>
						</div>
						<div class="col-sm-5">
							<input type="number" class="form-control" name="semester" id="sem" placeholder="Enter semester"></input>
						</div>
					</div>
					
					
					
					<div class="form-group">
						<label class="control-label col-sm-2">Pointer:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="point" value="<?php echo $row->pointer ?>" disabled></input>
						</div>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="point" name="pointer" placeholder="Enter pointer"></input>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Rank:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="rank" value="<?php echo $row->rank ?>" disabled></input>
						</div>
						<div class="col-sm-5">
							<input type="number" class="form-control" id="rank" name="rank" placeholder="Enter rank"></input>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Academic Year:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="col_name" value="<?php echo $row->year ?>" disabled></input>
						</div>
						<div class="col-sm-5">
							<input type="number" class="form-control" name="year"  id="col_name" placeholder="Enter academic year"></input>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-7 col-sm-10">
							<button type="submit" class="btn btn-primary" name="update">Update</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</div>
					</div>				
				</form>
			</div>
     
	  		 <?php
			
			}
			
		   ?>
			
		</div>
	</body>
</html>


























