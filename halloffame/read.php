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


<!DOCTYPE html>
<html>
<head>
<title>Read Data From Database Using PHP - Demo Preview</title>
<meta charset="utf-8">
<meta content="noindex, nofollow" name="robots">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<!--Nav Bar-->
		<nav id="nbar">
			<ul>
				<li><a href="homeedit.php">Home</a></li>
				<li><a href="hof.php">Hall Of Fame</a></li>
				<li class="active"><a href="read.php">Enquiry Form</a></li>
				<br>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</nav>
		
		<div id="div_sec">
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Read Data From Enquiry Form</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Name </p>
<?php
 require "db.php";

 
 
 
 
 
 
 
 
 
  $sql  ="select * from spect ORDER BY id desc ";
 $query = mysqli_query( $con,$sql);
 
 $counter=1;
 
 
while ($row = mysqli_fetch_array($query)) {
echo "<b><a href=\"read.php?id={$row['id']}\">{$counter}) {$row['name']}</a></b>";
  $counter=$counter+1;
 
echo "<br/><br />";
}
?>
</div>	
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
$sql1="select * from spect  where id=$id ";
$query1 = mysqli_query($con,$sql1);
while ($row1 = mysqli_fetch_array($query1)) {

    $_SESSION["id"]=$id;

?>
<div class="form" >
<h2>---Details---</h2>

   

<!-- Displaying Data Read From Database -->
<span>Name:</span> <?php echo $row1['name']."<br><br>"?>
<span>mobile:</span> <?php echo $row1['mobile']."<br><br>" ?>
<span>email:</span> <?php echo $row1['email']."<br><br>" ?>
<span>queries:</span> <?php echo $row1['queries']."<br><br><br><b" ?>


 </div>

<?php
}
}
?>
<center>
    <form method="post" action="enquirydelete.php">
   <input type="submit" name="delete" value="Delete Data"></input>
    </form></center>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
</div>
<?php
mysqli_close($con); // Closing Connection with Server
?>
</body>
</html>
