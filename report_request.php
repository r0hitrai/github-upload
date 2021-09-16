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
<p6><a class="active" href="report_request.php">Report/Request</a></p6>
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
<p1>&nbsp;&nbsp;Report/Request</p1>
</td>
</tr>
</table>
<table width="100%">
<tr>
<td>
<br>
<p10><a href="report.php">Click here to read FAQ</a></p10> <br><br>
<p11>- <p12>Request new anime:</p12> please double check the anime name,make sure you searched with correct <br>
name. If KuroAnime does not have it, make a request <a href="report.php">here</a> (please provide torrent/download url to <br>
prove it's available on internet,
<p13>without it your message will be ignored</p13>).<br><br>
- <p12>Report broken episodes:</p12> <a href="report.php">Click here</a>.<br><br>
- <p12>Report bad ads:</p12> <a href="report.php">Click here</a>.<br><br>
- <p12>Report spoiler:</p12> We only forbid spoiling content of NEXT episodes, not the CURRENT one. <br>
Report spoiler here (Please give us the comment's url, click here to know how to get it): <a href="report.php">Click here</a>.<br><br>
- <p12>Disqus Ban Appeals:</p12> <a href="report.php">Click here</a>.<br><br>
- <p12>Other problems:</p12> <br>
-- First, please read <p10><a href="report.php">FAQ</a></p10> <p13>(or your message will be ignored)</p13>.<br>
-- Please provide as many details as possible, include useful information such as screenshot <p13>(without <br>
screenshot your message will be ignored)</p13> and send us a message <a href="report.php">Click here</a>.</p11>
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