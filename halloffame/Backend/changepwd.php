<?php
session_start();
include("db.php");

if(isset($_REQUEST["change"]))
{
	
	if(!empty($_REQUEST["newpwd"]) && !empty($_REQUEST["cfmpwd"]))
  	{
		 $newpwd=$_REQUEST["newpwd"];
		 $cfmpwd=$_REQUEST["cfmpwd"];
		
		
		
		if($newpwd==$cfmpwd)
		{
			$username=$_SESSION["username"];
			$oldpassword=$_SESSION["oldpwd"];
			
			$sql="UPDATE `adminlogin` SET `password`='$cfmpwd'  where username='$username' and password='$oldpassword' " ;
            $query=mysqli_query($con,$sql);	 
					
			if($query)
			{
				session_destroy();
				
				
		    echo "<script>
         alert('Updated Successfully');
        window.location.href='login.html';
        </script>";
	
		
				
			}	
			else
			{
				echo "problem in query";
				
			}	
			
		}
		else
		{
		 	
		    echo "<script>
         alert('Password didn't Match!');
        window.location.href='pwdentry.php';
     </script>";
	
	     }	
		
	}
	
}	
?>