<?php
session_start();
include 'db.php';

  $id=$_SESSION["id"] ;


if(isset($_POST['delete']))
{
	
	
	
	$sql_query="delete from spect where id='$id'";
    $result= mysqli_query($con,$sql_query);
 
if(($result))
 
  {
   
   
      die("<script>location.href = 'http://localhost/halloffame/read.php'</script>");
      
   
  } 

else

{
     echo "<h2>query was not deleted Try Again.....  <br /></h2>";
     echo mysqli_error ($con);
}
 

	
}
 
 ?>