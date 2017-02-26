<?php
session_start();



/*

if(!empty($_SESSION["earlierimagename"]))
{
	
	echo $_SESSION["earlierimagename"];
	
}
if(!empty($_SESSION["earlierfullname"]))
{
	
	echo $_SESSION["earlierfullname"];
	
}

*/


include('db.php');

if(isset($_POST['update']))
   {
	   $id=$_SESSION["earlierfullname"]; 
     
	 
	   
		   
		   if(!empty($_POST['colname']))
	        {

                		$colname=$_POST['colname'];
           
		   
      						
				$sql="UPDATE `source` SET `collegename`='$colname'  where fullname='$id' " ;
                 
           		
				$query=mysqli_query($con,$sql);	 
					
			}
			
	    if(!empty($_POST['rank']))
		{   
           $rank=$_POST['rank'];
           $sql="UPDATE `source` SET `rank`='$rank'  where fullname='$id' " ;
		   $query=mysqli_query($con,$sql);	 	
	   }
	   
		if(!empty($_POST['pointer']))
		{
 			$pointer=$_POST['pointer'];
            $sql="UPDATE `source` SET `pointer`='$pointer' where fullname='$id' " ;
			$query=mysqli_query($con,$sql);	 
		}
	   
	   
        if(!empty($_POST['semester']))
		{
			$semno=$_POST['semester'];
            $sql="UPDATE `source` SET `semester`='$semno'  where fullname='$id' " ;		
		    $query=mysqli_query($con,$sql);	 
        }
		
		
      if(!empty($_POST['year']))
	  {
		  $year=$_POST['year'];
           $sql="UPDATE `source` SET `year`='$year' where fullname='$id' " ;
		  $query=mysqli_query($con,$sql);	 
	  }
	 
	 
	 
	 
	
	
	
	
	
	if(!empty($_FILES['file']['tmp_name']))	
  	{
	 
	
       $image_name=$_FILES['file']['name'];
       
       $image_type=$_FILES['file']['type'];
       
	   $imagepath='upload/'.$_FILES['file']['name']  ;
	   
	   
	   
	   
	   
	   
       if($image_type=='image/jpeg' || $image_type=='image/gif' || $image_type=='image/png' )
         {
		 
		 
           $part='upload/' ;

        if(unlink($part.$_SESSION["earlierimagename"]))
     {
	
	          
  
        $uploadfile=move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$_FILES['file']['name']);
		 
		     
		 $sql="UPDATE `source` SET `imagepath`='$imagepath',`imagename`='$image_name'  where fullname='$id' " ;
		 
	     $query=mysqli_query($con,$sql);	 
		 
              if($uploadfile && $query)
			  {
				     
	
					 
			  }				  
			  
		 
		 }
	   
	   
   }

	}
	
		   if(!empty($_POST['name']))
		   {	   
	          
	          $name=$_POST['name'];
		      $sql="UPDATE `source` SET `fullname`='$name'  where fullname='$id' " ;
		 	  $query=mysqli_query($con,$sql);	 
			  
		   }
	
	
	
	
	
	die("<script>location.href = 'http://localhost/halloffame/edittingfinal.php'</script>");
	
	
   }
?>
