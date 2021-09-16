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
<p7>&nbsp;&nbsp;Sort by alphabet | Sort by popularity | Latest update | New anime | Upcoming anime</p7>
</td>
</tr>
</table>
<br>
<table width="100%">
<tr bgcolor="#5077bd">
<td height="30">
<p1>&nbsp;&nbsp;Anime list</p1>
</td>
<td width="20%">
<p1>&nbsp;&nbsp;Search by status</p1>
</td>
</tr>
<tr valign="top" bgcolor="#191919" >
<td rowspan="3">
<br>
<p8>&nbsp;&nbsp;All | A | B | C | D | E | F | G | H | I | J | K | L | M | N | O | P | Q | R | S | T | U | V | W | X | Y | Z </p8>
<br><br><br>
<div style="padding:10px;">
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
<a href="attack_on_titan_2.php">Attack on Titan 2nd Season</a>
</td>
<td>
<a href="attack_on_titan_2_001.php">Episode 001</a>
</td>
</tr>
<tr>
<td>
<a href="danganronpa_despair_arc.php">Danganronpa 3 - Despair Arc</a>
</td>
<td>
<a href="danganronpa_despair_arc_001.php">Episode 001</a>
</td>
</tr>
<tr>
<td>
<a href="danganronpa_future_arc.php">Danganronpa 3 - Future Arc</a>
</td>
<td>
<a href="danganronpa_future_arc_001.php">Episode 001</a>
</td>
</tr>
<tr>
<td>
<a href="death_note.php">Death Note</a>
</td>
<td>
<a href="death_note_001.php">Episode 001</a>
</td>
</tr>
<tr>
<td>
<a href="dragon_ball_super.php">Dragon Ball Super</a>
</td>
<td>
<a href="dragon_ball_super_001.php">Episode 001</a>
</td>
</tr>
<tr>
<td>
<a href="durarara.php">Durarara!!</a>
</td>
<td>
<p9>Not yet aired</p9>
</td>
</tr>
<tr>
<td>
<a href="fullmetal_alchemist_brotherhood.php">Fullmetal Alchemist - Brotherhood</a>
</td>
<td>
<a href="fullmetal_alchemist_brotherhood_001.php">Episode 001</a>
</td>
</tr>
<tr>
<td>
<a href="my_hero_academia_2.php">My Hero Academia 2nd Season</a>
</td>
<td>
<a href="my_hero_academia_2_001.php">Episode 001</a>
</td>
</tr>
<tr>
<td>
<a href="one_punch_man.php">One Punch Man</a>
</td>
<td>
<a href="one_punch_man_001.php">Episode 001</a>
</td>
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
&nbsp;&nbsp;Ongoing<br>
&nbsp;&nbsp;Completed
</p9>
</td>
</tr>
<tr bgcolor="#5077bd">
<td width="20%">
<p1>&nbsp;&nbsp;Search by genres</p1>
</td>
</tr>
<tr valign="top" bgcolor="#191919">
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