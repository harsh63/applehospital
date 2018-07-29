<?php
	include("connection.php");
	
	if(isset($_POST['submit']))
	{
		
		$service_name=$_POST['service_name'];
		$sql="insert into service_master(service_name) values('$service_name')";
		if($resultsd1=mysqli_query($conn,$sql))
		{

			 if($resultsd1)
			 	echo "<script>window.location.href='../service_master_view.php'</script>";
			 else
			 	echo "not Inserted";

		}
		else
		{
			echo "<script>alert('Not Connected with DB')</script>";
		}
	}



?>