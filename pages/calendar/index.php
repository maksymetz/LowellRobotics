<?php

//Show All PHP Errors
error_reporting(-1);

$css =	array(	0=>"calendar.css");
$js =	array(	0=>"calendar.js",
				1=>"/scripts/AJAX.js");
$onload = "javascript:initCalendar();";

require_once('/bin/head.php');

//redirect if not logged in
if(!$user->data['is_registered'])
{
	header('Location: http://www.lowellrobotics.org/pages/calendar');
}
?>

<!-- **** MAIN AREA **** -->

<div id="calendar">
</div>

<!-- **** END MAIN AREA **** -->

<?php
require_once('/bin/foot.php');
?>