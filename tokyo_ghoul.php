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
</td>
<td>
<p6><a class="active" href="anime_list.php">Anime list</a></p6>
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
<tr bgcolor="#4668a5">
<td height="30" colspan="9">
<p7>&nbsp;&nbsp;<a href="#">Sort by alphabet</a> | <a href="#">Sort by popularity</a> | <a href="#">Latest update</a> | <a href="#">New anime</a> | <a href="#">Upcoming anime</a></p7>
</td>
</tr>
</table>
<br>
<table width="100%">
<tr bgcolor="#5077bd">
<td height="30">
<p1>&nbsp;&nbsp;Tokyo Ghoul information</p1>
</td>
<td width="20%">
<p1>&nbsp;&nbsp;Cover</p1>
</td>
</tr>
<tr valign="top" bgcolor="#191919">
<td rowspan="4">
<div style="padding:20px;">
<p16>Tokyo Ghoul</p16><br><br>
<p17>Other name:</p17> &nbsp;&nbsp;<p18>Tokyo Kushu; Toukyou Kushu; Toukyou Ghoul</p18> <br>
<p17>Genres:</p17> &nbsp;&nbsp;<p18>Action, Comedy, Horror, Mystery, Psychological, Seinem, Supernatural</p18> <br>
<p17>Date aired:</p17> &nbsp;&nbsp;<p18>Not yet aired</p18> <br>
<p17>Status:</p17>&nbsp;&nbsp; <p18>Not yet aired</p18> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<p17>Views:</p17> &nbsp;&nbsp;<p18>---</p18><br><br>
<p17>Summary:</p17><br>
<p18>Tokyo has become a cruel and merciless city—a place where 
vicious creatures called “ghouls” exist alongside humans. 
The citizens of this once great metropolis live in constant 
fear of these bloodthirsty savages and their thirst for human 
flesh. However, the greatest threat these ghouls pose is their 
dangerous ability to masquerade as humans and blend in 
with society.<br>
<br>
Based on the best-selling supernatural horror manga by Sui 
Ishida, Tokyo Ghoul follows Ken Kaneki, a shy, bookish college 
student, who is instantly drawn to Rize Kamishiro, an avid 
reader like himself. However, Rize is not exactly who she 
seems, and this unfortunate meeting pushes Kaneki into the 
dark depths of the ghouls' inhuman world. In a twist of fate, 
Kaneki is saved by the enigmatic waitress Touka Kirishima, 
and thus begins his new, secret life as a half-ghoul/half-
human who must find a way to integrate into both societies.</p18>
</td>
<td align="center">
<img src="./images/tokyo_ghoul.png" width="100%">
</td>
</tr>
<tr bgcolor="#5077bd">
<td height="30">
<p1>&nbsp;&nbsp;Related Links</p1>
</td>
</tr>
<tr bgcolor="#191919" valign="top">
<td>
<p8>&nbsp;&nbsp;None</p8>
</td>
</tr>
</table>
<table width="100%">
<tr bgcolor="#5077bd">
<td height="30">
<p1>&nbsp;&nbsp;Episodes</p1>
</td>
</tr>
<tr valign="top" bgcolor="#191919">
<td>
<div style="padding:10px;">
<table width="100%" style="border-collapse:collapse;">
<tr align="left">
<th>
<p14>Episode name</p14>
</th>
<th>
<p14>Day Added</p14>
</th>
</tr>
<tr>
<td>
<p9>Not yet aired</p9>
</td>
</tr>
</table>
</div>
</td>
</tr>
</table>
<table width="100%">
<tr>
<td>
<br><br><br>
<text style="color:#292929;"><a class="link" href="home.php">KuroAnime.com</a> Copyrights and trademarks for the anime, 
and other promotioonal materials are held by their resective owners and their use is allowed under 
the fair use clause of the Copyright Law. 
<a href="privacy_policy.php">Privacy Policy</a> | <a href="dmca.php">DMCA</a> | <a href="report_request.php">Contact us</a></text>
</td>
</tr>
</table>
</body>
</html>