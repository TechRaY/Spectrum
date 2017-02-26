<?php

include('db.php');

$id=$_GET['fullname'];




$query="select * from source where fullname='$id'" ;

$selectimage =mysqli_fetch_object(mysqli_query($con,$query));

$image_name=$selectimage->imagename;





?>


<html>
<body>
   <table >
     <thead>
       <tr>

          <th>FullName</th>
		  <th>Image</th>
		  <th>CollegeName</th>
		  <th>Pointer</th>
          <th>Rank</th>
		  <th>Semester</th>
		  <th> Year</th>
          <th>Action</th>
	      </tr>
		  
		  
	   </thead>
	   
	  <tbody> 
    
			<?php
		
		   $id=$_GET['fullname'];


		  	
		     $query =mysqli_query($con,"SELECT * from source WHERE fullname='$id' ") ;
			 
			
			while( $row=mysqli_fetch_object($query))
			{
				
        ?>			
				  <tr>                                                                               
                	<td><?php echo $row->fullname?></td>
					 <td><img style="width:150px ;height:150px ;" src="<?php echo $row->imagepath ?>"></td>
					 <td ><?php echo $row->collegename ?></td>
					 <td><?php echo $row->pointer ?></td>
					 <td><?php echo $row->rank ?></td>
					 <td><?php echo $row->semester ?></td>
					 <td><?php echo $row->year ?></td>
				</tr>
                
				<tr height="10"></tr><tr></tr><tr></tr>
			  
                    <form method="post" action="echo.php" enctype="multi/form-data">                              
 
                  <tr>
                   <td><input type="text" placeholder="FullName" name="name"></input>
                  <td><input type="file" name="file"></td>
                   <td><input type="text"  placeholder="CollegeName" name="colname"></input>
				   <td><input type="text" placeholder="Pointer" name="pointer"></input>
				   <td><input type="text" placeholder="Rank" name="rank"></input>
				   <td><input type="number" placeholder="Semester No." name="semester"></input>
                    <td><input type="text" placeholder="Year" name="year" ></input>
					<td><input type="submit" value="UPDATE" name="update"    /><br>
                    <input type="reset" value="Reset" name="reset"  /></td>
                 </tr>
                 
				   </form>
				 <?php
			
			}
			
			
		   ?>
        
   </tbody>
   </table>
</body>
</html>	
	
	