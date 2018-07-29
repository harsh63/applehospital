<?php
	include("connection.php");
	if(isset($_POST['delete']))
	{
		$id=$_POST['delete'];
		$sql="delete from service_master where id='$id'";
		if(mysqli_query($conn,$sql))
		{
			
			$resultsd1 = mysqli_query($conn, $sql);
			 if($resultsd1)
			 	echo "<script>
                            window.location.href='../service_master_view.php';       
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
          $service_name=$_POST['service_name'];
          $sql="update service_master set service_name='$service_name' where id='$id'";


          if($resultsd1=mysqli_query($conn,$sql))
          {
              if($resultsd1)
                  echo "<script>
                            window.location.href='../service_master_view.php';       
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