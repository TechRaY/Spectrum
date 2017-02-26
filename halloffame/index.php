   <?php

     include("db.php");
   
      $imagesql1="SELECT imagepath from homepage  where imageno=1";
		$path1=mysqli_query($con,$imagesql1);
              $row1= mysqli_fetch_array($path1);
	       $image1path=$row1[0];
       
	

	        $imagesql2="SELECT imagepath from homepage  where imageno=2";
	       	$path2=mysqli_query($con,$imagesql2);
              $row2= mysqli_fetch_array($path2);
           	$image2path=$row2[0];
	


	$imagesql3="SELECT imagepath from homepage  where imageno=3";
	       	$path3=mysqli_query($con,$imagesql3);
              $row3= mysqli_fetch_array($path3);
	     $image3path=$row3[0];
	   
	   
	
      
?>








<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="Page.css">
	<link rel="stylesheet" href="font-awesome-4.5.0\css\font-awesome.min.css">

	<script type="text/javascript" src="jquery-1.12.2.min.js"></script>
	<script type="text/javascript" src="jscript.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
	<header>
<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-6 col-xs-4">
				<a href="index.php"><img src="logospe.png" max-width="250px" height="100px" alt="Spectrum Academy"></a>
			</div>

			<div class="col-md-5 col-sm-6 col-xs-8">
				<p>
					<span id="span1">Helpline No.</span>
					<br>
					<span id="span2"><a href="tel:1212115655">1212115655</a></span>                    <!--skype call ke liye puchega-->
				</p>
			</div>
		</div>
</div>
	</header>
	

<div class="container">
	<div class="row">
		<nav class="navbar navbar-default">
			<div class="col-md-12">
				<div id="navi">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav nav-justified" role="tablist">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="halloffame.php">Hall Of Fame</a></li>
						<li><a href="aboutus.php">About Us</a></li>
						<li><a href="contactus.php">Contact Us</a></li>
						<li><a href="enquiryus.php">Enquiry Form</a></li><!-- page name is enquriy us -->
					</ul>
				</div>
			</div>
	</nav>
	</div>
</div>

















<div class="">
	<section id="mar">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper For Slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo $image1path?>">
				</div>
				<div class="item">
					<img src="<?php echo $image2path?>">
				</div>
				<div class="item">
					<img src="<?php echo $image3path?>">
				</div>
				<!--<div class="item">
					<img src="#" alt="#">
				</div>-->
			</div>
			<!-- Left & Right Controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>
</div>
<br>


<?php 
	   $sql="SELECT linkpath from youtubepath where linkno=1 ";
		      $path=mysqli_query($con,$sql);
              $row= mysqli_fetch_array($path);
			  $urlpath=$row[0];     
?>




<?php 
 
  



  $sql1="SELECT linkfrontname from downloadlink  where linkno=1";
		$result=mysqli_query($con,$sql1);
              $row1= mysqli_fetch_array($result);
	       $link1=$row1[0];
	   
	   $sql2="SELECT linkfrontname from downloadlink  where linkno=2";
		$result2=mysqli_query($con,$sql2);
              $row2= mysqli_fetch_array($result2);
	       $link2=$row2[0];
	   
	   $sql3="SELECT linkfrontname from downloadlink  where linkno=3";
		$result3=mysqli_query($con,$sql3);
              $row3= mysqli_fetch_array($result3);
	       $link3=$row3[0];
	   
    
	   
  




?>












<section id="hp_sec">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="embed-reponsive embed-reponsive-4by3">
					<iframe src="<?php echo $urlpath?>" frameborder="0" allowfullscreen>
					</iframe>
				</div>				
			</div>
			<div class="col-md-3">
			<div id="bor">
				<h1 class="text-center">How we started</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel justo nec est hendrerit maximus consectetur vitae lacus. Donec pulvinar eget velit a consequat. Vivamus vel tortor lorem. Praesent vulputate in mi a porta. Nulla placerat at lectus feugiat luctus. Donec sodales ante nibh, vitae ultrices nunc congue ac. Suspendisse sagittis non nibh sit amet auctor. Suspendisse posuere lacus sed aliquam rhoncus. Nullam odio leo, ornare sit amet porttitor at, mollis a risus. Pellentesque et nunc eget sapien tristique. <a href="aboutus.html">...Know More</a></p>
			</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-primary">
					<div class="panel-heading text-center">DOWNLOADS</div>
					<br><div class="panel-body"><a href="link1.php"><?php echo $link1 ?></a></div>
					<div class="panel-body"><a href="link2.php"><?php echo $link2 ?></a></div>
					<div class="panel-body"><a href="link3.php"><?php echo $link3 ?></a></div>
				</div>
			</div>
			
		</div>
	</div>			
</section>
<br>


















<?php
	$sql="SELECT * from footerlink " ;
	$query=mysqli_query($con,$sql);	 
	$row= mysqli_fetch_array($query,MYSQLI_ASSOC);
	$gmailid=$row['emailid'];
	$facebooklink=$row['facebooklink'];
	$twitterlink=$row['twitterlink'];

?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-6">
				<address>
					<p><i class="fa fa-building"></i>&nbsp;HEAD OFFICE [MULUND]<br>
					<i class="fa fa-location-arrow"></i>&nbsp;Second Floor, Maruti Arcade, Nehru&nbsp;Road, Near Railway Station.<br>
					<i class="fa fa-phone"></i>&nbsp;Contact&nbsp;No.&nbsp;:&nbsp;022-25651200<br>
					<a href="http://<?php echo $gmailid ?>" target="_blank"><i class="fa fa-envelope"></i>&nbsp;<?php echo $gmailid ?></a></p>
				</address>
			</div>
			<div class="col-md-2 col-sm-6">
				<p id="p1"><span style="font-size:15px">Follow us on,</span><br>
				<a href="http://<?php echo $facebooklink?>" target="_blank"><i class="fa fa-facebook"></i>&nbsp;Facebook</a><br>
				<a href="http://<?php echo $twitterlink?>" target="_blank"><i class="fa fa-twitter"></i>&nbsp;Twitter</a><br></p>
			</div>
		</div>
		<div class="row" id="cright">
			<div class="col-sm-3">
				<span>&copy;&nbsp;SPECTRUM Academy Education Pvt.Ltd.</span>
			</div>
			<div class="col-sm-offset-4 col-sm-5">
				<span id="cright2">Complete Web & IT Solutions by <a href="htttp://www.studyleague.com" target="_blank">Studyleague</a></span>
			</div>
		</div>
	</div>		
</footer>





</body>
</html>