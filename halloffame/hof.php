<?php

session_start();
include('db.php');

if(isset($_SESSION['admin']))
  {
	 
	 
  }
else
 {
	 header('Location:Backend/login.html');
 }


if(isset($_POST['save']))
   {
	   
    	   
	     $name=$_POST['name'];
	   $colname=$_POST['colname'];
	   $rank=$_POST['rank'];
	   $pointer=$_POST['pointer'];
       $semno=$_POST['sem'];
	   $year=$_POST['year'];
    
       $image_name=$_FILES['file']['name'];
       
       $image_type=$_FILES['file']['type'];
       
	   $imagepath='upload/'.$_FILES['file']['name']  ;
	   
       
  
  
       if($image_type=='image/jpeg' || $image_type=='image/gif' || $image_type=='image/png' )
         {
		 
		 
		     $uploadfile=move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$_FILES['file']['name']);
		 
		     
		 $sql="INSERT INTO source (fullname,collegename,semester,pointer,rank,imagepath,year,imagename) VALUES ('$name','$colname','$semno','$pointer','$rank','$imagepath','$year','$image_name')" ;
		 
	     $query=mysqli_query($con,$sql);	 
		 
              if($uploadfile && $query)
			  {
	
	                     
					  die("<script>location.href = 'http://localhost/halloffame/hof.php'</script>");
			  }				  
			  
			  else if(!$uploadfile)
			  {
				 echo "hi";
			  }	  

			  else if(!$query)
			  {
				 
			  }	  
		
		 
		 }        
	   
	   
  }

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
				<br>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</nav>

		<div id="div_sec"> 
			<!-- Option to upload & edit -->
			<div class="container-fluid">
				<div id="hof">
					<a href="#"><button type="button" class="btn btn-danger btn-lg">Upload</button></a>
					<a href="edittingfinal.php"><button type="button" class="btn btn-default btn-lg">Edit</button></a>		
				</div>
			</div>
			<!-- Student Details -->
			<div class="container-fluid">	
				<h2>Enter Student Credentials</h2>
				<form class="form-horizontal" role="form" action="hof.php" method="post" enctype="multipart/form-data" >
				
					<div class="form-group">
						<label class="control-label col-sm-2">Name:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required></input>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">College Name:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="col_name" name="colname"  placeholder="Enter college name"></input>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Semester:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="sem"  name="sem" placeholder="Enter semester"></input>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Pointer:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control"  name="pointer" id="point" placeholder="Enter pointer"></input>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Rank:</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="rank" id="rank" placeholder="Enter rank"></input>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Academic Year:</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="year" id="col_name" placeholder="Enter academic year"></input>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-2">Image:</label>
						<div class="col-sm-10">
							<input type="file" class="form-control" name="file" />
						</div>
					    	
					</div>
					
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary" name="save" >Save & Upload</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</div>
					</div>				
				</form>
			</div>
		</div>
	</body>
</html>

