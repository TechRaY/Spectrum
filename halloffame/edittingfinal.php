<?php
include('db.php');

session_start();

if(isset($_SESSION['admin']))
  {
	  
  }
else
 {
	 header('Location:Backend/login.html');
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
				<!-- Table -->
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Image</th>
								<th>College Name</th>
								<th>Pointer</th>
								<th>Rank</th>
								<th>Action</th>
							</tr>
						</thead>
						 
	  <tbody> 
        
		<?php
		
		   
		  	
		     $query =mysqli_query($con,"SELECT * from source ") ;
			 
			while( $row=mysqli_fetch_object($query) )
			{
        ?>			
				  <tr>                                                                               
                	<td><?php echo $row->fullname?></td>
					 <td><img style="width:150px ;height:150px ;" src="<?php echo $row->imagepath ?>"></td>
					 <td ><?php echo $row->collegename ?></td>
					 <td><?php echo $row->pointer ?></td>
					 <td><?php echo $row->rank ?></td>
					 
				<td>
				<a href="editfinal.php?fullname=<?php echo $row->fullname?>" >EDIT</a>
                <a href="delete.php?fullname=<?php echo $row->fullname ?>" >DELETE</a>  				
				</td>	 
				  </tr>
				 
				 <?php
			}
			
		   ?>
   </tbody>
						
			</table>
				</div>
			</div>
		</div>
	</body>
</html>