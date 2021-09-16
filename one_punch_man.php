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
<p1>&nbsp;&nbsp;One Punch Man information</p1>
</td>
<td width="20%">
<p1>&nbsp;&nbsp;Cover</p1>
</td>
</tr>
<tr valign="top" bgcolor="#191919">
<td rowspan="4">
<div style="padding:20px;">
<p16>One Punch Man</p16><br><br>
<p17>Other name:</p17> &nbsp;&nbsp;<p18>One-Punch Man; One Punch-Man; OPM</p18> <br>
<p17>Genres:</p17> &nbsp;&nbsp;<p18>Action, Comedy, Parody, Sc-Fi, Seinem, Super Power, Supernatural</p18> <br>
<p17>Date aired:</p17> &nbsp;&nbsp;<p18>Oct 5, 2015 to Dec 21, 2015</p18> <br>
<p17>Status:</p17> &nbsp;&nbsp;<p18>Completed</p18> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<p17>Views:</p17> &nbsp;&nbsp;<p18>36,513,018</p18> <br><br>
<p17>Summary:</p17><br>
<p18>The seemingly ordinary and unimpressive Saitama has a 
rather unique hobby: being a hero. In order to pursue his 
childhood dream, he trained relentlessly for three years—and 
lost all of his hair in the process. Now, Saitama is incredibly 
powerful, so much so that no enemy is able to defeat him in 
battle. In fact, all it takes to defeat evildoers with just one 
punch has led to an unexpected problem—he is no longer 
able to enjoy the thrill of battling and has become quite 
bored.<br>
<br>
This all changes with the arrival of Genos, a 19-year-old 
cyborg, who wishes to be Saitama's disciple after seeing 
what he is capable of. Genos proposes that the two join the 
Hero Association in order to become certified heroes that will 
be recognized for their positive contributions to society, and 
Saitama, shocked that no one knows who he is, quickly 
agrees. And thus begins the story of One Punch Man, an 
action-comedy that follows an eccentric individual who longs 
to fight strong enemies that can hopefully give him the 
excitement he once felt and just maybe, he'll become popular sss
in the process.</p18>
</div>
</td>
<td align="center">
<img src="./images/one_punch_man.png" width="100%">
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
<a href="one_punch_man_001.php">One Punch Man Episode 001</a>
</td>
<td>
<p15>04/10/2015</p15>
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