<?php
	include("connection.php");
	$session="";
	session_start();
	if(isset($_POST['submit']))
	{
		$_SESSION['username']="";


        echo "<script> window.location.href='../login.php'</script>";
			 
	}
	if ($_SESSION['username']=="") 
	{
	  echo "<script> window.location.href='login.php'</script>";
	}



?>