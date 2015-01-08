<?php
echo ('
</td>
<!-- **** SIDEBAR AREA **** -->
<td valign="top" style="width:205px;">



<div style="border:#600000 1px solid;width:200px;">
<h3>Upcoming Events</h3>
<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showDate=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=7i7gq5oo153os18vjfb90ukjgs%40group.calendar.google.com&amp;color=%230F4B38&amp;ctz=America%2FNew_York" style=" border-width:0 " width="200" height="400" frameborder="0" scrolling="no"></iframe>
</div>

<div style="width:200px;margin-right:auto;margin-top:10px;">
<h3>Signature Sponsors</h3>
<br/>
<a href="http://www.grfoundation.org/lowell"><img src="/img/sponsors/lowellCommFund.gif" style="max-width:187px;" alt="Lowell Community Fund" /></a>
<br/>
<a href="http://www.wbtooling.com/"><img src="/common/whitesbridge.jpg" style="max-width:187px;" alt="White\'s Bridge Tooling" /></a>
<br/>
<a href="http://www.lowellschools.com/"><img src="/pages/about/sponsors/img/LOWELL-SCHOOLS-LOGO.jpeg" style="max-width:200px;" alt="Lowell Area Schools" /></a>
<br/>
<a href="http://www.hooperprinting.com/"><img src="/pages/about/sponsors/img/HooperLogo.png" style="max-width:187px;" alt="Hooper Printing" /></a>
<br/>
<a href="http://www.vanderzielmachinery.com/"><img src="/pages/about/sponsors/img/Banner-Logo.png" style="max-width:187px;" alt="VanderZiel Machinery" /></a>
</div>
<br />



 ');

//<table style="width:200px;background:#dce6f2;">

//Define Array of Events
//$events = array(		0 => '<b>Jan. 5 Kickoff</b><br />GVSU 8:00AM - 5:00',
//				1 => '<b>Mar. 1 Competition</b><br />Traverse City',
//				2 => '<b>Mar. 22 Competition</b><br />GVSU',
//				3 => '<b>Apr. 11 State Competition</b><br /><a href="http://maps.google.com/maps?hl=en&rlz=1C1CHKZ_enUS437US437&ion=1&bav=on.2,or.r_gc.r_pw.r_cp.r_qf.,cf.osb&biw=1024&bih=651&um=1&ie=UTF-8&q=EMU+Convocation+Center&fb=1&gl=us&hq=EMU+Convocation+Center&cid=0,0,3556452549635800831&ei=D-Z5T4mTOeTSmAX87bTpDw&sa=X&oi=local_result&ct=image&ved=0CAsQ_BI">EMU</a> 9:00AM - 6:30PM');
//				
//	
//Loop through events 
//$j = 0;
//for($i=0; $i<=sizeof($events); $i++)
//{
//	switch($j)
//	{
//		case 0:
//			echo("<tr><td class='eventa'>".$events[$i]."</td></tr>\n");
//			$j=1;
//			break;
//		case 1:
//			echo("<tr><td class='eventb'>".$events[$i]."</td></tr>\n");
//			$j=0;
//			break;
//	}
//}
//
//echo ('
//</table>
//</div>');
echo ('<br />');

$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];


//Display Member Menu if logged in//
if(!$user->data['user_id'] == ANONYMOUS)
{
	echo('
	<div style="border:#600000 1px solid;width:200px;">
	<h3>Members Sign-in</h3>
	<form method="post" action="/forum/ucp.php?mode=login">
	<fieldset>
	<label>Username:</label> <input type="text" name="username" id="username" /><br />
	<label>Password:</label> <input type="password" name="password" id="password" /><br />
	<p>Remember Me?:</p> <input type="checkbox" name="autologin" id="autologin"  /><br />
	<input type="submit" value="Log In" name="login" />
	<input type="hidden" name="redirect" value="'.$url.'" />
	</fieldset>
	</form>
	</div>
	');
}
else
{
	if (2==1)
	{

	echo ('
	<div style="border:#600000 1px solid;width:200px;">
	<h3>Members</h3>
	<div id="loggedInBar">
	<div id="userInfo">
	Welcome: '.$user->data['username'].'
	</div>
	<div id="userMenu">
	<a href="/forum/index.php">Forum</a>
	<br>
    <a title="See You Later" href="' . append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=logout', true, $user->session_id). '">Log out</a>
	</div>
	</div>
	</div>
	');
	}

}

echo('

<div style="margin-left:auto;">
<a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="28" width="70" /></a>
<img style="border:0;width:70px;height:28px" src="/common/css.png" alt="Valid CSS" />
</div>
<hr />

<div style="margin-left:auto;">
<a href="#"><img src="/common/FRC-ExcelAward-2012.gif" alt="2012 Website Excelence"/></a>
</div>
<hr />

    </td>
  </tr>
</table>
</div>
<div id="footer"><!-- ***** FOOTER ***** -->
<table>
  <tr>
    <td style="border-right:#ffffff 1px solid;text-align:center;">
      <a href="/index.php">Home Page</a>
    </td>
    <td style="border-right:#ffffff 1px solid;text-align:center;">
      <a href="/pages/about/team/">About Us</a>
    </td>
    <td style="border-right:#ffffff 1px solid;text-align:center;">
      <a href="http://www.usfirst.org/">FIRST</a>
    </td>
    <td style="border-right:#ffffff 1px solid;text-align:center;">
      <a href="/pages/news/2014/">Team News</a>
    </td>
    <td style="border-right:#ffffff 1px solid;text-align:center;">
      <a href="/pages/photo_gallery/pg_2010_build.php">Photo Gallery</a>
    </td>
    <td style="text-align:center;">
      <a href="/pages/links/external_links.php">External Links</a>
    </td>
  </tr>
</table>
<hr />
<span style="font-family:arial;font-size:12px;color:#d0d0d0;text-align:center;">This website is entirely student designed and maintained.  <a href="/pages/about/website">Read more</a><br />
Copyright &#169; '.date("Y").' Lowell FIRST Robotics Team 3234</span>

</div>






</div>
</body>
</html>
');
?>
