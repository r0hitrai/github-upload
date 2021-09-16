<?php
session_start();
$username=$_SESSION["username"];
if(isset($_POST['save']))
{
	$hname="localhost";
	$uname="root";
	$Password="";
	$databasename="kuroanime";
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$new_pass=$_POST['new_pass'];
	$connect=mysqli_connect($hname,$uname,$Password,$databasename);
	$query="SELECT `username` FROM `user` WHERE pass='$pass'";
	$res=mysqli_query($connect,$query);
	if(mysqli_num_rows($res) > 0)
	{
			$query="UPDATE `user` SET `pass`='$new_pass' WHERE username='$username'";
			$resl=mysqli_query($connect,$query);
			if($resl)
			{
				header("Location: change_password_pass.php");
				exit();
			}
			else
			{
				header("Location: change_password_fail.php");
				exit();
			}
	}
	else
	{
		header("Location: change_password_fail.php");
		exit();
	}
}
?>