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
<p1>&nbsp;&nbsp;Privacy Policy</p1>
</td>
</tr>
</table>
<table width="100%">
<tr>
<td>
<br>
<p19>Legal Disclaimer</p19><br>
<br>
<p18>The author is not responsible for any contents linked or referred to from his pages – If any damage occurs by the 
use of information presented there, only the author of the respective pages might be liable, not the one who has linked 
to these pages. <p13>KissAnime doesn’t host any content</p13><br>
<br>
All KissAnime does is link or embed content that was uploaded to popular Online Video hosting sites like 
Veoh.com / Megavideo.com / Youtube.com / Google Video. All youtube/veoh/megavideo/googlevideo users signed 
a contract with the sites when they set up their accounts which forces them not to upload illegal content. By 
clicking on any Links to videos while surfing on KissAnime you watch content hosted on third parties and KissAnime 
cant take the responsibility for any content hosted on other sites.<br>
<br>
We do not upload any videos nor do we know who and where videos are coming from. We do not promote any illegal 
conduct of any kind. Links to the videos are submitted by users and managed by users.<br>
<br>
<p19>DMCA Notice of Copyright Infringement</p19><br>
<br>
<p12>KissAnime is an online service provider as defined in the Digital Millennium Copyright Act.</p12><br>
<br>
We provide legal copyright owners with the ability to self-publish on the Internet by uploading, storing and displaying 
various types of media. We do not actively monitor, screen or otherwise review the media which is uploaded to our servers 
by users of the service.<br>
<p12>We take copyright violation very seriously and will vigorously protect the rights of legal copyright owners.</p12><br>
If you are the copyright owner of content which appears on the KissAnime website and you did not authorize the use of the 
content you must notify us in writing in order for us to identify the allegedly infringing content and take action.<br>
<br>
<p13>We will be unable to take any action if you do not provide us with the required information</p13>, <p12>so please fill out 
all fields accurately and completely</p12>. You may make a written notice via e-mail, facsimile or postal mail to our 
DMCA Agent as listed below. Your written notice must include the following:<br>
<br>
</p18>
•	Specific identification of the copyrighted work which you are alleging to have been infringed. If you are alleging 
infringement of multiple copyrighted works with a single notification you must submit a representative list which 
specifically identifies each of the works that you allege are being infringed.<br>
•	Specific identification of the location and description of the material that is claimed to be infringing or to be the 
subject of infringing activity with enough detailed information to permit us to locate the material. You should include 
the specific URL or URLs of the web pages where the allegedly infringing material is located.<br>
•	Information reasonably sufficient to allow us to contact the complaining party which may include a name, address, 
telephone number and electronic mail address and signature at which the complaining party may be contacted.<br>
•	A statement that the complaining party has a good faith belief that use of the material in the manner complained of 
is not authorized by the copyright owner, its agent or the law.<br>
•	A statement that the information in the notification is accurate, and under penalty of perjury that the complaining 
party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed.<br>
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