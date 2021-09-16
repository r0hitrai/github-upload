<?php
session_start();
$_SESSION['username']=$_POST['username'];
$_SESSION['pass']=$_POST['pass'];
if(isset($_POST['sign_in']))
{
	$hname="localhost";
	$uname="root";
	$Password="";
	$databasename="kuroanime";
	$username=$_POST['username'];
	$pass=$_POST['pass'];
	$connect=mysqli_connect($hname,$uname,$Password,$databasename);
	$query="SELECT `username`, `pass` FROM `user` WHERE username='$username'  AND pass='$pass'";
	$res=mysqli_query($connect,$query);
	if(mysqli_num_rows($res) > 0)
	{
		header("Location: home.php");
		exit();
	}
	else
	{
		header("Location: login_fail.html");
		exit();
	}
}
?>