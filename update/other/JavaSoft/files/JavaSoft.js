// JavaSoft is the idea and complete work of Lowell Red Arrow Robotics FIRST Team 3234 Senior student mentor and webpage designer Zachary DeBruine.  Copyright 2011 Zachary DeBruine

function validate_email(field,alerttxt)
{
with (field)
  {
  apos=value.indexOf("@");
  dotpos=value.lastIndexOf(".");
  if (apos<1||dotpos-apos<2)
    {alert(alerttxt);return false;}
  else {return true;}
  }
}

function validate_form(thisform)
{
with (thisform)
  {
  if (validate_email(email,"Not a valid e-mail address!")==false)
    {email.focus();return false;}
  }
}

function GENERATE() 
{
var team_name = document.info.name.value;
var team_number = document.info.number.value;

document.write('<h1>JavaSoft Code Generator Result:</h1><p>Verify that the information below is correct, if not, click back and correct the information.  If it is correct, then proceed to the directions below.</p>Your team name: ' + team_name + '<br />Your team number: ' + team_number + '<br /><br /><hr /><p>If the information above is correct, copy the code below into a blank notepad document, do not exit this page until you have saved your code in a safe place, because you cannot save this page.</p><hr />&lt;!DOCTYPE html PUBLIC "-//W3C/DTD HTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;<br />&lt;html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"&gt;<br/>&nbsp;&nbsp;&lt;title&gt;' + team_name + ' Team ' + team_number + '&lt;/title&gt;<br />&nbsp;&nbsp;&lt;link rel="shortcut icon" href="favicon.ico" /&gt;</br>&nbsp;&nbsp;&lt;meta name="description" content="team content here" /&gt;</br>&nbsp;&nbsp;&lt;meta name="keywords" content="keywords here" /&gt;</br>&nbsp;&nbsp;&lt;meta name="author" content="author here" /&gt;</br>&nbsp;&nbsp;&lt;meta http-equiv="Content-Type" content="text/html;charset=utf-8" /&gt;</br>&nbsp;&nbsp;&lt;link rel="stylesheet" type="text/css" href="files/mainstyle.css" /&gt;</br><br />&lt;script type="text/javascript"&gt;<br />var timeout = 200;<br />var closetimer = 0;<br />var ddmenuitem = 0;<br /><br />function mopen(id)<br />{<br />&nbsp;&nbsp;mcancelclosetime();<br />&nbsp;&nbsp;if(ddmenuitem) ddmenuitem.style.visibility = "hidden";<br />&nbsp;&nbsp;ddmenuitem = document.getElementById(id);<br />&nbsp;&nbsp;ddmenuitem.style.visibility = "visible";<br />}<br /><br />function mclose()<br />{<br />&nbsp;&nbsp;if(ddmenuitem) ddmenuitem.style.visibility = "hidden";<br />}<br /><br />function mclosetime()<br />{<br />&nbsp;&nbsp;closetimer = window.setTimeout(mclose, timeout);<br />}<br /><br />function mcancelclosetime()<br />{<br />&nbsp;&nbsp;if(closetimer)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;window.clearTimeout(closetimer);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;closetimer = null;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /><br />document.onclick = mclose;<br />&lt;/script&gt;<br /><br />&lt;/head&gt;</br><br /><hr /><h2>Now What?</h2>Thank you for using JavaSoft!');

return false;
}