<?php
   include "db.php";
   
// create a variable

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$queries=$_POST['queries'];

 
//Execute the query
 
 $sql_query ="insert into spect(name,mobile,email,queries)values('$name','$mobile','$email' ,'$queries')"; 
 $result=mysqli_query($con ,$sql_query);
 
 if(($result))
 {
	            echo "<script>
     alert('Query was sent succesfully');
   window.location.href='enquiryus.php';
     </script>";
	   
	   
          // die("<script>location.href = 'http://localhost/halloffame/enquiryus.php'</script>");
 } 
else
	{
     echo "Your message was not sent  <br />";
     echo mysqli_error ($con);
}

}
?>



