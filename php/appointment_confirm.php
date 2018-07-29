<?php
    include("connection.php");
    echo "<script> a </script>";
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $service_name=$_POST['service_name'];
        $amount=$_POST['amount'];
        $a_date=$_POST['date'];
        $a_time=$_POST['time'];
        $mobile=$_POST['mobile'];
        $sql="insert into appointment_confirm(name,age,gender,service_name,amount,a_date,a_time,mobile) values('$name','$age','$gender','$service_name','$amount','$a_date','$a_time','$mobile')";
        if(mysqli_query($conn,$sql))
        {
            echo "  <script>
                             alert('appointment is confirmed!');
                             window.location.href='../services.php';

                    </script>";
            
        }
        else
        {
            
            echo "<script>alert('failed')</script>";
        }
    }



?>