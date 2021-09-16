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
<p1>&nbsp;&nbsp;Result</p1>
</td>
<td width="20%">
<p1>&nbsp;&nbsp;Search by genres</p1>
</td>
</tr>
<tr valign="top" bgcolor="#191919" >
<td>
<div style="padding:10px;">
<p19>Showing related results for "<?php echo $_SESSION['search']; ?>" !!!</p19>
<table width="100%" style="border-collapse:collapse;">
<tr align="left">
<th>
<p14>Anime name</p14>
</th>
<th>
<p14>Latest episode</p14>
</th>
</tr>
<tr>
<td>
<a href="tokyo_ghoul.php">Tokyo Ghoul</a>
</td>
<td>
<p9>Not yet aired</p9>
</td>
</tr>
</table>
</div>
</td>
<td>
<p9>
&nbsp;&nbsp;Action<br>
&nbsp;&nbsp;Adventure<br>
&nbsp;&nbsp;Comedy<br>
&nbsp;&nbsp;Drama<br>
&nbsp;&nbsp;Fantasy<br>
&nbsp;&nbsp;Historical<br>
&nbsp;&nbsp;Horror<br>
&nbsp;&nbsp;Magic<br>
&nbsp;&nbsp;Matial Arts<br>
&nbsp;&nbsp;Military<br>
&nbsp;&nbsp;Movie<br>
&nbsp;&nbsp;Mystery<br>
&nbsp;&nbsp;OVA<br>
&nbsp;&nbsp;Parody<br>
&nbsp;&nbsp;Police<br>
&nbsp;&nbsp;Psychological<br>
&nbsp;&nbsp;School<br>
&nbsp;&nbsp;Sci-Fi<br>
&nbsp;&nbsp;Seinen<br>
&nbsp;&nbsp;Shounen<br>
&nbsp;&nbsp;Special<br>
&nbsp;&nbsp;Super Power<br>
&nbsp;&nbsp;Supernatural<br>
&nbsp;&nbsp;Thriller
</p9>
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