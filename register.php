<?php
if(isset($_POST['register']))
{
	$hname="localhost";
	$uname="root";
	$Password="";
	$databasename="kuroanime";
	$username=$_POST['username'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$connect=mysqli_connect($hname,$uname,$Password,$databasename);
	$query="SELECT `username`, `pass` FROM `user` WHERE username='$username'";
	$res=mysqli_query($connect,$query);
	if(mysqli_num_rows($res) == 0)
	{
			$query="INSERT INTO `user`(`username`, `email`, `pass`) VALUES ('$username', '$email', '$pass')";
			$resl=mysqli_query($connect,$query);
			if($resl)
			{
				header("Location: register_pass.html");
				exit();
			}
			else
			{
				header("Location: register_error.html");
				exit();
			}
	}
	else
	{
		header("Location: register_fail.html");
		exit();
	}
}
?>