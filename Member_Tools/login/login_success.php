<? 
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>


﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<!-- #BeginTemplate "http://www.lowellrobotics.org/master.dwt" -->

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<!-- #BeginEditable "doctitle" -->
<title>Members</title>
<!-- #EndEditable -->
<link href="http://www.lowellrobotics.org/styles/style2.css" rel="stylesheet" type="text/css" />
</head>

<body>

<!-- Begin Container -->
<div id="container">
	<!-- Begin Masthead -->
	<div id="masthead">
		<h1>Lowell Robotics</h1>
		<h3>Lowell Area Schools Robotic Team</h3>
	</div>
	<!-- End Masthead -->
	<!-- Begin Navigation -->
	<div id="navigation">
		<ul>
			<li><a href="http://www.lowellrobotics.org/index.html">Home</a></li>
			<li><a href="http://www.lowellrobotics.org/about/about.htm">About</a></li>
			<li><a href="http://www.lowellrobotics.org/photo_gallery/photo_gallery.htm">Photo Gallery</a></li>
			<li><a href="http://www.lowellrobotics.org/contact/contact.htm">Contact</a></li>
			<li><a href="http://www.lowellrobotics.org/Member_Tools/login/Logout.php">Logout</a></li>
		</ul>
		<p></p>
		<p></p>
		<p></p>
		<p></p>
	</div>
	<!-- End Navigation -->
	<!-- Begin Content -->
	<div id="content">
		<!-- #BeginEditable "content" -->
		
		<h2>Members</h2>

                <table>
                <tr>
                <th colspan="2"><b>Schedule</b></th>
                </tr>
                <tr>
                <th colspan="2"><i>1/14/10</i></th>
                </tr>
                <tr>
                <td>Programming:</td>
                <td>Classmate, Camera Assembly</td>
                </tr>
                <tr>
                </tr>
                </table>

		<!-- #EndEditable "content" --></div>
	<!-- End Content -->
	<!-- Begin Footer -->
	<div id="footer">
		<p><a href="http://www.lowellrobotics.org/index.html">Home</a> | <a href="about.htm">About</a> 
		| <a href="http://www.lowellrobotics.org/photo_gallery/photo_gallery.htm">Photo Gallery</a> |
		<a href="http://www.lowellrobotics.org/contact/contact.htm">Contact</a> | 
		<a href="http://www.lowellrobotics.org/Member_Tools/login/Logout.php">Logout</a></p>
		
	</div>
	<!-- End Footer --></div>
<!-- End Container -->

</body>

<!-- #EndTemplate -->

</html>
