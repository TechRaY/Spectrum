<?php
include("db.php");
 session_start();

if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql="select username,password from adminlogin" ;
	$result=mysqli_query($con,$sql);
	
	
	
	while($row=mysqli_fetch_array($result) )
   	{
    $correctuser=$row["username"];
   $correctpwd=$row["password"];

   if($username==$correctuser && $password==$correctpwd)
   {
	   $_SESSION['admin']='spectrum';
	   
	  header('Location:..//homeedit.php');
   }
   else
   {
    
	
	if($username=="" && $password=="") 
   {
	   echo "<script>
     alert('Please Enter Your Username And Password');
   window.location.href='login.html';
     </script>";
	   
   }
   else if($username=="" && $password!="") 
   {
	   echo "<script>
     alert('Please Enter Your Username ');
   window.location.href='login.html';
     </script>";
	   
   }
   else if($username!="" && $password=="") 
   {
	   echo "<script>
     alert('Please Enter Your Password');
   window.location.href='login.html';
     </script>";
	   
   }
   else
   {
	        echo "<script>
     alert('Invalid Username or Password');
   window.location.href='login.html';
     </script>";
	   
   }  
   
   }
	
	}
}

?>