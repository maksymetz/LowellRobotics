var timeout=300; // Set time between the instant the user moves mouse off of drop-down menu to the time the menu disappears.  Set in milliseconds.
var closetimer=0;
var ddmenuitem=0;

function mopen(id)
{
  mcancelclosetime();
  if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
  ddmenuitem = document.getElementById(id);
  ddmenuitem.style.visibility = 'visible';
}

function mclose()
{
  if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

function mclosetime()
{
  closetimer = window.setTimeout(mclose, timeout);
}

function mcancelclosetime()
{
  if(closetimer)
    {
      window.clearTimeout(closetimer);
      closetimer = null;
    }
}

document.onclick = mclose;

// ******************** LOGIN FUNCTION ***********************

