<?php
   session_start();
 
include("db.php");





if(isset($_REQUEST['verify']))
{
      if(!empty("username") &&!empty("oldpwd") && isset($_REQUEST["secquest"]) && !empty($_REQUEST['secans']))
	  {
		  $username=$_REQUEST["username"];
		  $oldpwd=$_REQUEST["oldpwd"];
		  $quest=$_REQUEST["secquest"];
           $secans=$_REQUEST["secans"]; 		  
		   
		   
		   $sql="select username,password,securityquest,securityans from adminlogin" ;
	$result=mysqli_query($con,$sql);
	
	
	
	while($row=mysqli_fetch_array($result) )
   	{
        $correctusername=$row["username"];
		$correctpwd=$row["password"];
        $correctquest=$row["securityquest"]; 
		 $correctans=$row["securityans"]; 
		 
		
   if($quest==$correctquest && $oldpwd==$correctpwd && $secans==$correctans && $username=$correctusername)
   {    
          
               $_SESSION["oldpwd"]=$correctpwd;
			   $_SESSION["username"]=$correctusername;
               die("<script>location.href = 'pwdentry.php'</script>");
   }	  
	else
	{
		echo "<script>
     alert('Invalid Credential');
   window.location.href='takesecquest.php';
     </script>";
	   
	}	
	
}

	  }
	  
}


?>