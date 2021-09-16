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
<p6><a class="active" href="home.php">Home</a></p6>
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
<tr bgcolor="#4668a5">
<td height="30" colspan="9">
<p1>&nbsp;&nbsp;Upcoming anime</p1>
</td>
</tr>
</table>
<table width="100%">
<tr align="left" valign="top" bgcolor="#191919">
<td rowspan="4">
<a href="tokyo_ghoul.php"><img src="./images/tokyo_ghoul.png" alt="tokyo ghoul" style="float:left; width:225px; height:319px;"></a>
<div style="padding-left:260px;">
<p2><a href="tokyo_ghoul.php">Tokyo Ghoul</a></p2><br><br>
<p3>Genres:</p3> &nbsp;&nbsp;<p4>Action, Drama, Horror, Mystery, Psychological, Seinen, Supernatural</p4><br><br>
<p5>Tokyo has become a cruel and merciless city - a place where <br></p5>
<p5>vicious creatures called "ghouls" exist alongside humans. <br></p5>
<p5>The citizens of this once great metropolis live in constant <br></p5>
<p5>fear of these bloodthirsty savages and their thirst for human <br></p5>
<p5>flesh. However, the greatest threat these ghouls pose is their <br></p5>
<p5>dangerous ability to masquerade as humans and blend in <br></p5>
<p5>with society...</p5>
</div>
</td>
<td width="20%" bgcolor="#5077bd">
<p1>&nbsp;&nbsp;Announcement</p1>
</td>
</tr>
<tr bgcolor="#191919">
<td>
New episodes are available in<br>
RapidVideo first, a while later other<br>
servers will be available.
</td>
</tr>
<tr>
<td bgcolor="#5077bd">
<p1>&nbsp;&nbsp;Ongoing series</p1>
</td>
</tr>
<tr bgcolor="#191919" valign="top">
<td>
<ul>
<li><a href="dragon_ball_super.php">Dragon Ball Super</a></li>
<li><a href="attack_on_titan_2.php">Attack on Titan<br>
2nd Season</a></li>
<li><a href="my_hero_academia_2.php">My Hero Academia<br>
2nd Season</a></li>
<li><a href="fullmetal_alchemist_brotherhood.php">Fullmetal Alchemist<br>
Brotherhood</a></li>
<li><a href="durarara.php">Durarara!!</a></li>
<li><a href="one_punch_man.php">One Punch Man</a></li>
</ul>
</td>
</tr>
</table>
<table width="100%">
<tr height="30" bgcolor="#191919">
<td colspan="5" bgcolor="#5077bd"  width="50%">
<p1>&nbsp;&nbsp;Latest update series</p1>
</td>
<td width="20%" bgcolor="#5077bd">
<p1>&nbsp;&nbsp;Latest update episodes</p1>
</td>
</tr>
<tr bgcolor="#191919" valign="top" align="center">
<td rowspan="2">
<a href="fullmetal_alchemist_brotherhood.php"><img src="./images/fullmetal_alchemist_brotherhood.png" alt="fullmetal alchemist brotherhood" width="210" height="260">
<p6>Fullmetal Alchemist -<br>
Brotherhood</p6></a>
</td>
<td rowspan="2">
<a href="dragon_ball_super.php"><img src="./images/dragon_ball_super.png" alt="dragon ball super" width="210" height="260">
<p6>Dragon Ball -<br>
Super</p6></a>
</td>
<td rowspan="2">
<a href="attack_on_titan_2.php"><img src="./images/attack_on_titan_2.png" alt="attack on titan 2" width="207" height="260">
<p6>Attack on Titan -<br>
Season 2</p6></a>
</td>
<td rowspan="2">
<a href="danganronpa_future_arc.php"><img src="./images/danganronpa_future_arc.png" alt="danganronpa future arc" width="210" height="260">
<p6>Danganronpa -<br>
Future Arc</p6></a>
</td>
<td rowspan="2">
<a href="my_hero_academia_2.php"><img src="./images/my_hero_academia_2.png" alt="my hero academia" width="207" height="260">
<p6>My Hero Academia -<br>
Season 2</p6></a>
</td>
</tr>
<tr bgcolor="#191919" valign="top">
<td>
<ul>
<li><a href="death_note_001.php">Death Note<br>
Episode 001</a></li>
<li><a href="dragon_ball_super_001.php">Dragon Ball Super<br>
Episode 001</a></li>
<li><a href="attack_on_titan_2_001.php">Attack on Titan 2nd Season<br>
Episode 001</a></li>
<li><a href="danganronpa_future_arc_001.php">Danganronpa - Future Arc<br>
Episode 001</a></li>
<li><a href="my_hero_academia_2_001.php">My Hero Academia 2nd Season<br>
Episode 001</a></li>
<li><a href="danganronpa_despair_arc_001.php">Danganronpa - Despair Arc<br>
Episode 001</a></li>
<li><a href="one_punch_man_001.php">One Punch Man<br>
Episode 001</a></li>
</ul>
<br>
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