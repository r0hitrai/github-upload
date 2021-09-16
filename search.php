<?php
session_start();
$_SESSION["search"]=$_POST['search'];
if(isset($_POST['search_submit']))
{
	$hname="localhost";
	$uname="root";
	$Password="";
	$databasename="kuroanime";
	$search=$_POST['search'];
	$connect=mysqli_connect($hname,$uname,$Password,$databasename);
	$query="SELECT `link` FROM `anime_list` WHERE name='$search'";
	$res=mysqli_query($connect,$query);
	if(mysqli_num_rows($res) > 0)
	{
		$row=$res->fetch_assoc();
		$link=$row['link'];
		header("Location: $link");
		exit();
	}
	else
	{
		$query="SELECT `link` FROM `anime_related` WHERE name='$search'";
		$resl=mysqli_query($connect,$query);
		if(mysqli_num_rows($resl) > 0)
		{
			$row=$resl->fetch_assoc();
			$link=$row['link'];
			header("Location: $link?search".$search);
			exit();
		}
		else
		{
			header("Location: search_failed.php");
			exit();
		}
	}
}
?>