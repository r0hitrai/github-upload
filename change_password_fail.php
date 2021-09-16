<?php
session_start();
?>
<html>
<head>
<title>
Kuro Anime - High Quality Anime Online
</title>
<link rel="icon" href="./images/kuro_logo.ico">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<table width="100%">
<tr>
<td>
<a href="home.php"><img src="./images/kuro_anime_logo.png" alt="kuro anime logo" width="374" height="104" align="top"></a>
</td>
<td>
<table cellspacing="10" align="right">
<tr>
<td width="300" align="center">
<div>
<div class="dropdown">
<button class="username_button"><?php echo $_SESSION['username']; ?></button>
<div class="dropdown_content">
<br>
<a href="change_email.php">Change email</a><br><br>
<a href="change_password.php">Change password</a><br><br>
<a href="logout.php">Logout</a><br><br>
</div>
</div>
</div>
</td>
</tr>
<tr align="right" valign="bottom">
<td>
<form action="search.php" method="post">
<input type="search" name="search" size="30">&nbsp;&nbsp;&nbsp;<input type="submit" name="search_submit" value="SEARCH"><br>
</form>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table style="border-collapse:collapse; width:100%;">
<tr>
<td>
<p6><a href="home.php">Home</a></p6>
</td	>
<td>
<p6><a href="anime_list.php">Anime list</a></p6>
</td>
<td>
<p6><a href="mobile.php">MOBILE</a></p6>
</td>
<td>
<p6><a href="report_request.php">Report/Request</a></p6>
</td>
<td>
<p6><a href="forum.php">Forum</a></p6>
</td>
<td>
<p6><a href="read_manga.php">Read Manga</a></p6>
</td>
<td>
<p6><a href="read_novel.php">Read Novel</a></p6>
</td>
<td>
<p6><a href="watch_drama.php">Watch Drama</a></p6>
</td>
<td>
<p6><a href="shop.php">Shop</a></p6>
</td>
</tr>
</table>
<br>
<table width="100%">
<tr bgcolor="#5077bd">
<td height="30">
<p6>&nbsp;&nbsp;Your profile</p6>
</td>
<td width="20%">
<p6>&nbsp;&nbsp;Guide</p6>
</td>
</tr>
<tr bgcolor="#191919">
<td>
<form action="new_password.php" method="post">
<br>
&nbsp;&nbsp;<p2>Change your password:</p2>
<br><br>
<p13>&nbsp;&nbsp;Current password was incorrect.</p13>
<br><br>
&nbsp;&nbsp;<p4>Current password (input this if you want to change your password)
<br>
&nbsp;&nbsp;&nbsp;<input type="password" name="pass" required>
<br><br>
&nbsp;&nbsp;New password
<br>
&nbsp;&nbsp;&nbsp;<input type="password" name="new_pass" id="new_pass" required>
<br><br>
&nbsp;&nbsp;Type new password again</p4>
<br>
&nbsp;&nbsp;&nbsp;<input type="password" name="confirm_password" id="confirm_password" required>
<br><br>
&nbsp;&nbsp;&nbsp;<input type="submit" name="save" value="SAVE">
</form>
<script>
var new_pass = document.getElementById("new_pass") , confirm_password = document.getElementById("confirm_password");
function validatePassword()
{
if(new_pass.value != confirm_password.value)
{
confirm_password.setCustomValidity("Passwords Don't Match");
}
else
{
confirm_password.setCustomValidity('');
}
}
new_pass.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</td>
<td valign="top">
<br>
<p1>&nbsp;&nbsp;&nbsp;You only need to input your &nbsp;&nbsp;&nbsp;current 
password if you want &nbsp;&nbsp;&nbsp;to change 
your email & &nbsp;&nbsp;&nbsp;password.</p1>
</td>
</tr>
</table>
<table width="100%">
<tr>
<td>
<br><br><br><br><br><br><br>
<text style="color:#292929;"><a class="link" href="home.php">KuroAnime.com</a> Copyrights and trademarks for the anime, 
and other promotioonal materials are held by their resective owners and their use is allowed under 
the fair use clause of the Copyright Law. 
<a href="privacy_policy.php">Privacy Policy</a> | <a href="dmca.php">DMCA</a> | <a href="report_request.php">Contact us</a></text>
</td>
</tr>
</table>
</body>
</html>