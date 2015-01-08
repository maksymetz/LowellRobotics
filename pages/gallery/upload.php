<?php

//Show All PHP Errors
error_reporting(-1);

require_once('/bin/head.php');

//redirect if not logged in
if(!$user->data['is_registered'])
{
	header('Location: http://www.lowellrobotics.org/pages/gallery');
}

head('Lowell FIRST Robotics Team 3234');
?>

<!-- **** MAIN AREA **** -->



<!-- **** END MAIN AREA **** -->

<?php
require_once('/bin/foot.php');
?>