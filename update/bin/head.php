<?php
define("BASE_PATH",$_SERVER['DOCUMENT_ROOT']);
function head($title) {
echo ('
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title>'.$title.'</title>
  <link rel="shortcut icon" href="common/favicon.ico" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Red Arrows FIRST Robotics Team 3234 from Lowell High School, Michigan." />
  <meta name="keywords" content="lowell,robotics,first,3234,robotics,frc,red arrows,michigan,competition" />
  <meta name="author" content="Lowell Robotics student website team." />
  <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
  <link rel="stylesheet" type="text/css" href="common/master.css" />  
  <script src="common/dropdown.js" type="text/javascript"></script>
  <script src="common/score_question.js" type="text/javascript"></script>  <style type="text/css">
  .xlink {
    text-align:center;
    font-family:times;
    font-size:1em;
    color:#353535;
    width:204px;
    height:180px;
    text-align:center;
    padding:0px;
    margin:0px;
  }
  #code p {
    font-size:1.0em;
  }
  </style>
</head><body>
<div style="margin-right:auto;margin-left:auto;width:1024px;"><!-- This division centers the page in accordance with valid XHTML -->
<!-- The BODY of the page design is comprised of 4 divisions, each labeled HEADER, NAVBAR, PAGE, and FOOTER, respectively -->
<!-- ***** HEADER ***** -->
<div id="header"><table>
  <tr>
    <td style="text-align:left;"><img src="common/banner.png" style="height:170px;" alt="Lowell Robotics" /></td>
    <td style="text-align:right;"><img src="common/FIRST.png" style="width:165px;height:170px;" alt="FIRST Logo" /></td>
  </tr>
</table>
</div><!-- ***** NAVBAR ***** --><div id="navbar">
<table id="dropdown">
  <tr>
    <td style="border-right:#000000 1px solid;">
      <a href="index.php" onmouseover="mopen(\'m2\')" onmouseout="mclosetime()">Home</a>
      <div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()" style="height:0px;"></div>
    </td>
    <td style="border-right:#000000 1px solid;">
      <a href="our_team.php" onmouseover="mopen(\'m3\')" onmouseout="mclosetime()">About Us</a>
      <div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
        <a href="our_team.php">Our Team</a>
        <a href="our_sponsors.php">Our Sponsors</a>
        <a href="our_mission.php">Our Mission</a>
        <a href="our_outreach.php">Our Outreach</a>
        <a href="our_robots.php">Our Robots</a>
        <a href="our_website.php">Our Website</a>
      </div>
    </td>
    <td style="border-right:#000000 1px solid;">
      <a href="about_first.php" onmouseover="mopen(\'m4\')" onmouseout="mclosetime()">About FIRST</a>
      <div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
        <a href="about_first.php">About FIRST</a>
        <a href="about_first.php">FIRST Robotics Competition (FRC)</a>
        <a href="competition_2011.php">2011 Competition</a>
        <a href="competition_2010.php">2010 Competition</a>
        <a href="http://http://www.firstinmichigan.org/">FIRST in Michigan</a>
        <a href="external_links.php">Additional Resources</a>
      </div>
     </td>
    <td style="border-right:#000000 1px solid;">
      <a href="current_season.php" onmouseover="mopen(\'m5\')" onmouseout="mclosetime()">Team News</a>
      <div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
        <a href="current_season.php">Current Season</a>
        <a href="lowell_in_2010.php">Lowell in 2010</a>
        <a href="2011_news_archive.php">2011 News Archive</a>
      </div>
    </td>
    <td style="border-right:#000000 1px solid;">
      <a href="pg_all.php" onmouseover="mopen(\'m6\')" onmouseout="mclosetime()">Photo Gallery</a>
      <div id="m6" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
        <a href="pg_all.php">All Archives</a>
        <a href="pg_2010_build.php">2010 Build Season</a>
        <a href="pg_2011_build.php">2011 Build Season</a>
        <a href="pg_2010_competitions.php">2010 Competitions</a>
      </div>
    </td>
    <td>
      <a href="external_links.php" onmouseover="mopen(\'m7\')" onmouseout="mclosetime()">External Links</a>
      <div id="m7" onmouseover="mcancelclosetime()" onmouseout="mclosetime()" style="height:0px;"></div>
    </td>
  </tr>
</table>
<div style="clear:both"></div>
</div>

<!-- ********* PAGE ********* --><div id="pagebody">
<table>
  <tr>
    <td style="width:805px;border-right:#000000 1px solid;padding:0px;padding:5px;" valign="top">
');
}

?>