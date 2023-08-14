<?php
include("dbConfig.php");
//IP address 
if($_POST['userName'] and $_POST['password'])
{
	$usr=$_POST['userName'];
	$pass=$_POST['password'];
	//$pass=md5($pass);
	
	$chk=mysqli_query($db,"SELECT * FROM `admin_user` WHERE `name`='$usr' and password='$pass'");
	if($chk)
	{
		$rchk=mysqli_fetch_array($chk);
		$nr=mysqli_num_rows($chk);
		if($nr>=1)
		{
			 $_SESSION['valid_admin'] = $rchk['name'];
			 //exit();
			 header('location:index.php');
		}
		else
		{
			header('location:login.php');
		}
	}
}
?>
