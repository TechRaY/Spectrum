<?php 
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
					<span id="span2"><a href="tel:1212115655">1212115655</a></span>
				</p>
			</div>
		</div>
</div>
	</header>

<div id="hp_nav" class="container">
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
						<li><a href="index.php">Home</a></li>
						<li><a href="halloffame.php">Hall Of Fame</a></li>
						<li><a href="aboutus.php">About Us</a></li>
						<li class="active"><a href="contactus.php">Contact Us</a></li>
						<li><a href="enquiryus.php">Enquiry Form</a></li><!-- page name is enquriy us -->
					</ul>
				</div>
			</div>
	</nav>
	</div>
</div>

<section id="cu-section">
	<div class="container">
		<h2 id="cu_h2" class="">BRANCHES</h2>
		<div id="s-row" class="row">
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading text-center">Dombivli(E)</div>
					<div class="panel-body">3rd Floor, Saroja Arcade, Above Kamat Medical.</div>
					<div class="panel-body"><a href="tel:02516450666">Tel: 0251-6450666</a></div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading text-center">Thane(W)</div>
					<div class="panel-body">2nd Floor, Thakor Niwas, Above Tip-Top Plaza.</div>
					<div class="panel-body"><a href="tel:09869441488">Tel: 9869441488</a></div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading text-center">Kalyan(W)</div>
					<div class="panel-body">2nd Floor, Suyash Plaza, Near Deepak Hotel, Near Railway Station.</div>
					<div class="panel-body"><a href="tel:02513292721">Tel: 0251-3292721</a></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading text-center">Mulund(W)</div>
					<div class="panel-body">2nd Floor, Maruti Arcade, Nehru Road, Near Railway Station.</div>
					<div class="panel-body"><a href="tel:02225651200">Tel: 022-25651200</a></div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading text-center">Ghatkopar(W)</div>
					<div class="panel-body">2nd Floor, Jyoti Chamber, Khot Lane, Near Railway Station.</div>
					<div class="panel-body"><a href="tel:02225025339">Tel: 022-25025339</a>/<a href="tel:025125116699">25116699</a></div>
				</div>
			</div>
		</div>
	</div>
</section>





<?php
	 include("db.php");
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