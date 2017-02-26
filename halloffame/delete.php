<?php

include('db.php');

$id=$_GET['fullname'];



$query="select * from source where fullname='$id'" ;



$selectimage =mysqli_fetch_object(mysqli_query($con,$query));


$image_name=$selectimage->imagename;





$part='upload/' ;

if(unlink($part.$image_name))
{
	
	$d=mysqli_query($con,"DELETE FROM source WHERE fullname='$id' ");
	
				if ($d)
				{
                     die("<script>location.href = 'http://localhost/halloffame/edittingfinal.php'</script>");
                } 
				else
				{
                     echo "error" ;
                 }

		
}	




?>