<?php
require_once('bin/head.php');
head('Lowell FIRST Robotics Team 3234');
?>

<script src="common/news.js" type="text/javascript"></script>

<!-- **** MAIN AREA **** -->
<h1>News Archive</h1>
<h3 style="width:795px;">News Article Index</h3>


<script type="text/javascript">
html='<ul>';

html+='<li><div onclick="newsone()">' + title1 + '&nbsp;&nbsp;(' + date1 + ')</div></li>';

html+='</ul>';

document.write(html);

function newsone()
{
document.getElementById('newsarea').innerHTML='<h3 style="width:795px;">' + title1 + '&nbsp;&nbsp;<span style="font-size:75%;">(' + date1 + ')</span></h3><img src="common/' + photo1 + '" style="margin:5px;border:#000000 1px solid;float:right;" alt="' + photo1 + '" />' + news1 + '<br /><br />';
}

function newstwo()
{
document.getElementById('newsarea').innerHTML='<h3 style="width:795px;">' + title2 + '&nbsp;&nbsp;<span style="font-size:75%;">(' + date2 + ')</span></h3><img src="common/' + photo2 + '" style="margin:5px;border:#000000 2px solid;float:right;" alt="' + photo2 + '" />' + news2 + '<br /><br />';
}

function newsthree()
{
document.getElementById('newsarea').innerHTML='<h3 style="width:795px;">' + title3 + '&nbsp;&nbsp;<span style="font-size:75%;">(' + date3 + ')</span></h3><img src="common/' + photo3 + '" style="margin:5px;border:#000000 3px solid;float:right;" alt="' + photo3 + '" />' + news3 + '<br /><br />';
}

</script>

<div id="newsarea"></div>

<?php
require_once('bin/foot.php');
?>