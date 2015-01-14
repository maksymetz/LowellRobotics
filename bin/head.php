<?php
define("BASE_PATH",$_SERVER['DOCUMENT_ROOT']);

define('IN_PHPBB', true);
$phpbb_root_path = '/forum/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

require_once("/bin/mobile.php");

global $css, $js, $onload, $title; // get page defined variables

if(!isset($title))
{
	$title="Red Arrow Robotics";
}

echo ('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>'.$title.' - FRC #3234</title>
	<link rel="shortcut icon" href="/common/favicon.ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Red Arrows FIRST Robotics Team 3234 from Lowell High School, Michigan." />
	<meta name="keywords" content="lowell,robotics,first,3234,robotics,frc,red arrows,michigan,competition" />
	<meta name="author" content="Lowell Robotics student website team." />
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
	');
	if(!$mobile)
	{		echo('<link rel="stylesheet" type="text/css" href="/common/master.css" />');
	} else {
		echo('<link rel="stylesheet" type="text/css" href="/common/mobile.css" />');
	}
	
	if(isset($css))
	{
		for($i=0; $i<count($css); $i++)
		{
			echo('<link rel="stylesheet" type="text/css" href="'.$css[$i].'" />
			');
		}
	}  
	echo ('
	<script src="/common/dropdown.js" type="text/javascript"></script>
	');
	if(isset($js))
	{
		for($i=0; $i<count($js); $i++)
		{
			echo('<script src="'.$js[$i].'" type="text/javascript"></script>');
		}
	}
  
echo ('
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push([\'_setAccount\', \'UA-32347921-1\']);
  _gaq.push([\'_trackPageview\']);

  (function() {
    var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
    ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
');

if(isset($onload))
  {
	echo('<body onload='.$onload.'>');
  } else {
echo('<body>');
}

echo('
<div id="center"><!-- This division centers the page in accordance with valid XHTML -->
<!-- The BODY of the page design is comprised of 4 divisions, each labeled HEADER, NAVBAR, PAGE, and FOOTER, respectively -->
<!-- ***** HEADER ***** -->
<div id="header"><table>
  <tr>
    <td style="text-align:left;"><img src="/common/banner.png" style="height:180px; width:700px;" alt="Lowell Robotics" /></td>
	<td style="min-width:80px;">&nbsp;&nbsp;</td>
    <td style="text-align:right;"><a href="http://www.usfirst.org/" class="FIRSTLOGO"><img src="/common/FIRST.png" style="width:165px;height:170px;" alt="FIRST Logo" /></a></td>
  </tr>
</table>
</div><!-- ***** NAVBAR ***** --><div id="navbar">
<table id="dropdown">
  <tr>
    <td style="border-right:#000000 1px solid;">
      <a href="/" onmouseover="mopen(\'m2\')" onmouseout="mclosetime()">Home</a>
      <div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()" style="height:0px;"></div>
    </td>
    <td style="border-right:#000000 1px solid;">
      <a href="/pages/about/team" onmouseover="mopen(\'m3\')" onmouseout="mclosetime()">About Us</a>
      <div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
        <a href="/pages/about/team">Our Team</a>
        <a href="/pages/about/sponsors">Our Sponsors</a>
        <a href="/pages/about/robot">Our Robots</a>
      </div>
    </td>
	<td style="border-right:#000000 1px solid;">
		<a href="/pages/first" onmouseover="mopen(\'m4\')" onmouseout="mclosetime()">About FIRST</a>
			<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				<a href="http://www.usfirst.org/">FIRST</a>
				<a href="http://www.firstinmichigan.org/">FIRST in Michigan</a>
			</div>
		</td>
    <td style="border-right:#000000 1px solid;">
		<a href="/pages/news/2015/" onmouseover="mopen(\'m5\')" onmouseout="mclosetime()">Team News</a>
			<div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				<a href="/pages/news/2015/">2015 Season</a>
				<a href="/pages/news/2014/">2014 Season</a>
				<a href="/pages/news/2013/">2013 Season</a>
				<a href="/pages/news/2012/">2012 Season</a>
				<a href="/pages/news/2011/">2011 Season</a>
				<a href="/pages/news/2010/">2010 Season</a>
			</div>
    </td>
	<td style="border-right:#000000 1px solid;">
		<a href="/pages/photo_gallery/pg_2014_build.php" onmouseover="mopen(\'m6\')" onmouseout="mclosetime()">Photo Gallery</a>
			<div id="m6" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				<a href="/pages/photo_gallery/pg_2014_build.php">2014 Photos</a>
				<a href="/pages/photo_gallery/pg_2013_build.php">2013 Photos</a>
				<a href="/pages/photo_gallery/pg_2010_build.php">2010 Photos</a>
			</div>
    </td>
	
  
    <td>
      <a href="/pages/links/external_links.php" onmouseover="mopen(\'m7\')" onmouseout="mclosetime()">External Links</a>
      <div id="m7" onmouseover="mcancelclosetime()" onmouseout="mclosetime()" style="height:0px;"></div>
    </td>
  </tr>
</table>
<div style="clear:both"></div>
</div>

<!-- ********* PAGE ********* --><div id="pagebody">
<table>
  <tr>
    <td style="width:785px;border-right:#000000 1px solid;padding:0px;padding:5px;" valign="top">');

?>
