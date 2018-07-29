<?php
	include("connection.php");
	
	if(isset($_POST['add']))
	{
		$service_name=$_POST['service_name'];
		$duration=$_POST['duration'];
		$amount=$_POST['amount'];
		$desc=$_POST['desc'];
		$image=$_FILES['image']['name'];
		$target="../images/" .$_FILES['image']['name'];
		$sql="insert into service_desc(service_name,service_desc,time,amount,image) values('$service_name','$desc','$duration','$amount','$image')";
		if($resultsd1=mysqli_query($conn,$sql))
		{
			
			if(move_uploaded_file($_FILES['image']['tmp_name'],$target)) 
				echo "uploaded";
			else
				echo "not uploaded";

			if($resultsd1)
			 	echo "<script>window.location.href='../service_desc_view.php';</script>";
			else
			 	echo "not Inserted";

		}
		else
		{
			echo "<script>alert('Not Connected with DB')</script>";
		}
	}



?>