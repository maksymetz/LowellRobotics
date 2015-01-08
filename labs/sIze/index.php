<?php
/*** An attempt at reducing image size inline.***/
?><html><head><title>sIze</title></head><body><img src="img/PTC.jpg" alt="PTC" />
<br/>Other Image:
<img src="pic.php?src=img/PTC.jpg&percent=25" alt="PTC" />
<br/>
Bin Image:
<img src="/bin/pic.php?src=/labs/sIze/img/PTC.jpg&percent=25" alt="PTC" />
<br/>
<?
print ($_SERVER['DOCUMENT_ROOT']);
?></body></html>