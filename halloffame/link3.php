<?php

include('db.php'); 

$sql="Select * from downloadlink where linkno=3 ";
$query=mysqli_query($con,$sql);
		   $result=mysqli_fetch_array($query);
		   $filename=$result["linkname"];
           $linkpath=$result["linkpath"];





header("Content-Disposition: attachment ;  filename=".$filename);
header('Content-type : application/pdf');
readfile(''.$linkpath);





?>