<?php
	include("connection.php");
	if(isset($_POST['delete']))
	{
		$id=$_POST['delete'];
		$sql="delete from service_desc where id='$id'";
		if(mysqli_query($conn,$sql))
		{
			
			$resultsd1 = mysqli_query($conn, $sql);
			 if($resultsd1)
			 	echo "<script>
                            window.location.href='../service_desc_view.php';       
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
          $service_desc=$_POST['service_desc'];
          $time=$_POST['time'];
          $amount=$_POST['amount'];
          $image_text=$_POST['image_text'];
          $image=$_FILES['image']['name'];
          $target="../images/" .$_FILES['image']['name'];
          if(move_uploaded_file($_FILES['image']['tmp_name'],$target)) 
            echo "uploaded";
          else
            echo "not uploaded";
          if ($image=="") 
          {
            $image=$image_text;
          }
          else
          {
            $image=$image;
          }
          $sql="update service_desc set service_name='$service_name',service_desc='$service_desc',time='$time',amount='$amount',image='$image' where id='$id'";



          if($resultsd1=mysqli_query($conn,$sql))
          {
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