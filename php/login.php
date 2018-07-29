<?php
	include("connection.php");
	$temp_username="";
	$temp_password="";
	session_start();
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select * from admin where username='$username' and a_password='$password'";
		if(mysqli_query($conn,$sql))
		{
			
			$resultsd1 = mysqli_query($conn, $sql);
			 while ($row = mysqli_fetch_array($resultsd1))
			 {
			   $temp_username=$row['username'];
			   $temp_password=$row['a_password'];


			 }

			 if($temp_username==$username && $temp_password==$password) 
			 {
			 	$_SESSION['username']=$username;

			 	echo "<script> window.location.href='../welcome.php'</script>";
			 }
			 else
			 {
			 	echo "<script>
                            alert('invalid username or password');
                            window.location.href='../login.php';       
                      </script>";
			 }

		}
		else
		{
			echo "<script>alert('Not Connected with DB')</script>";
		}
	}



?>