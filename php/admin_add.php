<?php
	include("connection.php");

	if(isset($_POST['submit']))
	{
		$full_name=$_POST['full_name'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$password=$_POST['password'];
		$sql="insert into admin(full_name,username,email,mobile,a_password) values('$full_name','$username','$email','$mobile','$password')";
		if($resultsd1=mysqli_query($conn,$sql))
		{
			
			
			 if($resultsd1)
			 	echo "<script>
                            window.location.href='../admin_registration_view.php';       
                      </script>";
			 else
			 	echo "not Inserted";

		}
		else
		{
			echo "<script>alert('Not Connected with DB')</script>";
		}
	}



?>