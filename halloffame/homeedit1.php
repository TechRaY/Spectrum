<?php
session_start();

if(isset($_SESSION['admin']))
  {
	  
  }
else
 {
	 header('Location:Backend/login.html');
 }

?>

<?php

include('db.php'); 


if(isset($_POST['imagesubmit']))
   {
	    
  
   if(is_uploaded_file($_FILES['image1']['tmp_name']))	   
   {  $image1_name=$_FILES['image1']['name'];
       $image1_type=$_FILES['image1']['type'];
       $image1path='scrollupload/'.$_FILES['image1']['name']  ;
	 
	    
	 
	 
if($image1_type=='image/jpeg' || $image1_type=='image/gif' || $image1_type=='image/png' )
         {
		 
		 
		     $uploadfile=move_uploaded_file($_FILES['image1']['tmp_name'],'scrollupload/'.$_FILES['image1']['name']);
		 
             $sql="UPDATE `homepage` SET  `imagename`='$image1_name' ,`imagepath`='$image1path' WHERE imageno=1 ";		


		$query=mysqli_query($con,$sql);	 
		 
              if($uploadfile && $query)
			  {

			  }				  
			  
			  else if(!$uploadfile)
			  {

			  }	  

			  else if(!$query)
			  {

			  }	  
		
		 
		 }             
	   

	 
   }
   
      if(is_uploaded_file($_FILES['image2']['tmp_name']))	   
	  {		  
       $image2_name=$_FILES['image2']['name'];
       $image2_type=$_FILES['image2']['type'];
       $image2path='scrollupload/'.$_FILES['image2']['name']  ;
	  
	   if($image2_type=='image/jpeg' || $image2_type=='image/gif' || $image2_type=='image/png' )
         {
		 
		 
		     $uploadfile=move_uploaded_file($_FILES['image2']['tmp_name'],'scrollupload/'.$_FILES['image2']['name']);
	 
               $sql="UPDATE `homepage` SET  `imagename`='$image2_name' ,`imagepath`='$image2path' WHERE imageno=2 ";			 
   		
		$query=mysqli_query($con,$sql);	 
		 
              if($uploadfile && $query)
			  {

			  }				  
			  
			  else if(!$uploadfile)
			  {

			  }	  

			  else if(!$query)
			  {

			  }	  
		
		 
		 }             
	  
	  
	  }
	  
   if(is_uploaded_file($_FILES['image3']['tmp_name']))	    
   {  
	  $image3_name=$_FILES['image3']['name'];
       $image3_type=$_FILES['image3']['type'];
       $image3path='scrollupload/'.$_FILES['image3']['name']  ;

	   if($image3_type=='image/jpeg' || $image3_type=='image/gif' || $image3_type=='image/png' )
         {
		 
		 
		     $uploadfile=move_uploaded_file($_FILES['image3']['tmp_name'],'scrollupload/'.$_FILES['image3']['name']);
		 
		         $sql="UPDATE `homepage` SET  `imagename`='$image3_name' ,`imagepath`='$image3path' WHERE imageno=3 ";		
		 
		   $query=mysqli_query($con,$sql);	 
		 
              if($uploadfile && $query)
			  {

			  }				  
			  
			  else if(!$uploadfile)
			  {
				
			  }	  

			  else if(!$query)
			  {
				
			  }	  
		
		 
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
		<nav>
			<ul>
				<li class="active"><a href="homeedit.php">Home</a></li>
				<li><a href="hof.php">Hall Of Fame</a></li>
				<li><a href="read.php">Enquiry Form</a></li>
				<br>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</nav>
		<div id="div_sec">
		<!-- Image Carousel -->
			<div class="container-fluid">
				<h2>Image Carousel</h2>
				<form class="form-horizontal" role="form" action="homeedit.php" enctype="multipart/form-data" method="post" >
					<div class="form-group">
						<label class="control-label col-sm-2">Image 1:</label>
						<div class="col-sm-10">
							<input type="file" class="form-control" name="image1">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Image 2:</label>
						<div class="col-sm-10">
							<input type="file" class="form-control"  name="image2">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Image 3:</label>
						<div class="col-sm-10">
							<input type="file" class="form-control" name="image3">
						</div>
					</div>
					<div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default" name="imagesubmit">Submit</button>
						</div>
					</div>
				</form>
			</div>
			<!-- Youtube Video -->
			
			
		<?php	
       if(isset($_POST['youtubesubmit']))
	  {
               		  $urlpath=$_POST['urllink'];
		  $sql="UPDATE `youtubepath` SET `linkpath`='$urlpath' where linkno=1" ;
		  $result=mysqli_query($con,$sql);
		  
	  }
     ?>
			
			
			<div class="container-fluid">	
				<h2>YouTube</h2>
				<form class="form-horizontal" role="form" action="homeedit.php" method="post">
					<div class="form-group">
						<label class="control-label col-sm-2">Youtube Link:</label>
						<div class="col-sm-10">
							<input type="url" class="form-control" id="youtube" name="urllink" placeholder="Change YouTube Link">
						</div>
					</div>
					<div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default" name="youtubesubmit">Submit</button>
						</div>
					</div>
				</form>
			</div>
			
			<!-- Download Section -->
			<?php
			
   if(isset($_POST['downloadsubmit']))
   {
	   
	   if(!empty($_POST['link1']))
	   {
		  
		   $link1=$_POST["link1"];
		   $sql="UPDATE `downloadlink` SET `linkfrontname`='$link1' where linkno=1 ";
		   $query=mysqli_query($con,$sql);
		   
		}
		
	   if(!empty($_POST['link2']))
	   {
		  
		  
		   $link2=$_POST["link2"];
		   $sql="UPDATE downloadlink SET `linkfrontname`='$link2' where linkno=2  ";
		   $query=mysqli_query($con,$sql);
		   
		}
		
	   if(!empty($_POST['link3']))
	   {
		  
		   $link3=$_POST["link3"];
		   $sql="UPDATE downloadlink SET `linkfrontname`='$link3' where linkno=3  ";
		   $query=mysqli_query($con,$sql);
		   
		}
		
		
		if(is_uploaded_file($_FILES['flink1']['tmp_name']))	   
	   {
		    $link1_name=$_FILES['flink1']['name'];
           $link1_type=$_FILES['flink1']['type'];
          $link1path='downloadupload/'.$_FILES['flink1']['name']  ;
		   
		   if($link1_type=='application/pdf' )
		   {
			   $uploadfile=move_uploaded_file($_FILES['flink1']['tmp_name'],'downloadupload/'.$_FILES['flink1']['name']);
			   
			        $sql="UPDATE downloadlink SET `linkname`='$link1_name',`linkpath`='$link1path' where linkno=1  ";
		            $query=mysqli_query($con,$sql);
		      
			  
			  
              if($uploadfile && $query)
			  {
				
			  }				  
			  
			  else if(!$uploadfile)
			  {
				
			  }	  

			  else if(!$query)
			  {
				
			  }	  
		   }
		}
	   
	   
	   if(is_uploaded_file($_FILES['flink2']['tmp_name']))	   
	   {
		    $link2_name=$_FILES['flink2']['name'];
           $link2_type=$_FILES['flink2']['type'];
          $link2path='downloadupload/'.$_FILES['flink2']['name']  ;
		   
		   if($link2_type=='application/pdf' )
		   {
			   $uploadfile=move_uploaded_file($_FILES['flink2']['tmp_name'],'downloadupload/'.$_FILES['flink2']['name']);
			   
			        $sql="UPDATE downloadlink SET `linkname`='$link2_name',`linkpath`='$link2path' where linkno=2  ";
		            $query=mysqli_query($con,$sql);
		      
			  
              if($uploadfile && $query)
			  {
				
			  }				  
			  
			  else if(!$uploadfile)
			  {
				
			  }	  

			  else if(!$query)
			  {
				
			  }	  
			  
		   }
		}
		
		 if(is_uploaded_file($_FILES['flink3']['tmp_name']))	   
	   {
		    $link2_name=$_FILES['flink3']['name'];
           $link2_type=$_FILES['flink3']['type'];
          $link2path='downloadupload/'.$_FILES['flink3']['name']  ;
		   
		   if($link2_type=='application/pdf' )
		   {
			   $uploadfile=move_uploaded_file($_FILES['flink3']['tmp_name'],'downloadupload/'.$_FILES['flink3']['name']);
			   
			        $sql="UPDATE downloadlink SET `linkname`='$link2_name',`linkpath`='$link2path' where linkno=2  ";
		            $query=mysqli_query($con,$sql);
		      
			  
              if($uploadfile && $query)
			  {
				
			  }				  
			  
			  else if(!$uploadfile)
			  {
				
			  }	  

			  else if(!$query)
			  {
				
			  }	  
			  
		   }
		}
		
		
   }
  
?>
			
			
			
			
			<div class="container-fluid">
				<h2>Download Section</h2>
				<form class="form-horizontal" role="form" action="homeedit.php" method="POST" enctype="multipart/form-data" >
					<div class="form-group">
						<label class="control-label col-sm-2">Download 1:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="" name="link1" placeholder="Change Link Name..." />
						</div>
						<div class="col-sm-5">
							<input type="file" class="form-control" id="youtube" name="flink1" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Download 2:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="" name="link2" placeholder="Change Link Name..." />
						</div>
						<div class="col-sm-5">
							<input type="file" class="form-control" name="flink2" id="youtube" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Download 3:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="" name="link3" placeholder="Change Link Name..." />
						</div>
						<div class="col-sm-5">
							<input type="file" class="form-control" id="youtube" name="flink3" />
						</div>
					</div>
					<div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default" name="downloadsubmit">Submit</button>
						</div>
					</div>
				</form>	
			</div>

		<!-- Footer Section -->
	<?php

	
if(isset($_POST['footer']))
{
	
if(isset($_POST['email']))
{  
   $gmailid=$_POST['email'];
    
           	$sql="UPDATE `footerlink` SET  `emailid`='$gmailid' ";		
		    $query=mysqli_query($con,$sql);	 
	
}

if(isset($_POST['facebook']))
{
	  $facebooklink=$_POST['facebook'];
	  
	  $sql="UPDATE 'footerlink' SET `facebooklink`='$facebooklink' ";
	 	    $query=mysqli_query($con,$sql);	 
}



if(isset($_POST['twitter']))
{
	  $twitterlink=$_POST['twitter'];
	  
	  $sql="UPDATE 'footerlink' SET `twitterlink`='$twitterlink' ";
	 	    $query=mysqli_query($con,$sql);	 
}

}
?>
		
		
			<div class="container-fluid">
				<h2>Footer</h2>
				<form class="form-horizontal" role="form" action="homeedit.php" method="post" >
					<div class="form-group">
						<label class="control-label col-sm-2">Email ID:</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Change Email ID" name='email'>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Facebook Link:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="facebook" placeholder="Change Facebook Link" name="facebook">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Twitter Link:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="twitter" placeholder="Change Twitter Link" name="twitter">
						</div>
					</div>
					<div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default" name="footer">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>