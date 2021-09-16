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
<p1>&nbsp;&nbsp;My Hero Academia 2nd Season information</p1>
</td>
<td width="20%">
<p1>&nbsp;&nbsp;Cover</p1>
</td>
</tr>
<tr valign="top" bgcolor="#191919">
<td rowspan="4">
<div style="padding:20px;">
<p16>My Hero Academia 2nd Season</p16><br><br>
<p17>Other name:</p17> &nbsp;&nbsp;<p18>Boku no Hero Academia 2nd Season; My Hero Academia 2; Boku no Hero Academia S2</p18> <br>
<p17>Genres:</p17> &nbsp;&nbsp;<p18>Action, Comedy, School, Shounen, Super Power</p18> <br>
<p17>Date aired:</p17> &nbsp;&nbsp;<p18>Apr 1, 2017 to Sep 30, 2017</p18> <br>
<p17>Status:</p17> &nbsp;&nbsp;<p18>Completed</p18> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<p17> Views:</p17> &nbsp;&nbsp;<p18>25,041,467</p18> <br><br>
<p17>Summary:</p17><br>
<p18>At UA Academy, not even a violent attack can disrupt their 
most prestigious event: the school sports festival. Renowned 
across Japan, this festival is an opportunity for aspiring 
heroes to showcase their abilities, both to the public and 
potential recruiters.<br>
<br>
However, the path to glory is never easy, especially for Izuku 
Midoriya—whose quirk possesses great raw power but is also 
cripplingly inefficient. Pitted against his talented classmates, 
such as the fire and ice wielding Shouto Todoroki, Izuku must 
utilize his sharp wits and master his surroundings to achieve 
victory and prove to the world his worth.<p18>
</div>
</td>
<td align="center">
<img src="./images/my_hero_academia_2.png" width="100%">
</td>
</tr>
<tr bgcolor="#5077bd">
<td height="30">
<p1>&nbsp;&nbsp;Related Links</p1>
</td>
</tr>
<tr bgcolor="#191919" valign="top">
<td>
<ul>
<li><a href="my_hero_academia_1.php">My Hero Academia</a></li>
</ul>
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
<a href="my_hero_academia_2_001.php">My Hero Academia 2nd Season Episode 001</a>
</td>
<td>
<p15>01/04/2017</p15>
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