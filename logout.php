<?php
session_start();
session_unset();
session_destroy();
?>
<html>
<head>
<title>
Kuro Anime - High Quality Anime Online
</title>
<link rel="icon" href="./images/kuro_logo.ico">
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<br>
<table width="50%" align="center">
<tr>
<td align="center">
<a href="home.html"><img src="./images/kuro_anime_logo.png" alt="kuro anime logo" width="374" height="104" align="top"></a>
</td>
</tr>
</table>
<br><br><br>
<table width="50%" align="center" bgcolor="#191919">
<tr>
<td height="30">
<p20>&nbsp;&nbsp;Please login here:</p20>
</td>
</tr>
<tr>
<td align="center">
<p13>&nbsp;&nbsp;Logout successful.</p13>
</td>
</tr>
<tr>
<td>
<table>
<tr valign="top">
<td width="300" align="right">
<p20>Username: <br><br>
Password: </p20>
</td>
<td>
<p20>
<form action="login.php" method="post">
&nbsp;<input type="text" name="username" required><br><br>
&nbsp;<input type="password" name="pass" required><br>
&nbsp;<a href="#">Forgot password?</a><br><br>
&nbsp;<input type="submit" name="sign_in" value="SIGN IN">
</form>
</p20>
</td>
</tr>
<tr>
<td align="center" colspan="2">
<p20>Don't have an account:<br>
<a href="register.html">Register here</a>.</p20>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>