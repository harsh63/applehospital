<?php
	include("connection.php");
	if(isset($_POST['delete']))
	{
		$id=$_POST['delete'];
		$sql="delete from admin where id='$id'";
		if(mysqli_query($conn,$sql))
		{
			
			$resultsd1 = mysqli_query($conn, $sql);
			 if($resultsd1)
			 	echo "<script>
                            window.location.href='../admin_registration_view.php';       
                      </script>";
			 else
			 	echo "not Deleted";

		}
		else
		{
			echo "<script>alert('Not Connected with DB')</script>";
		}
	}
  if(isset($_POST['submit']))
      {
          $id=$_POST['id'];
          $full_name=$_POST['full_name'];
          $username=$_POST['username'];
          $email=$_POST['email'];
          $mobile=$_POST['mobile'];
          $password=$_POST['password'];
          $sql="update admin set full_name='$full_name',username='$username',email='$email',mobile='$mobile',a_password='$password' where id='$id'";


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