<?php
require_once('/bin/head.php');
?>

<!-- **** MAIN AREA **** -->

<link type="text/css" rel="stylesheet" href="foliogallery/foliogallery.css" />
<link type="text/css" rel="stylesheet" href="colorbox/colorbox.css" />
<script type="text/javascript" src="foliogallery/jquery.1.11.js"></script>
<script type="text/javascript" src="colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    // initiate colorbox
	$(".albumpix").colorbox({rel:'albumpix', maxWidth:'98%', maxHeight:'98%', slideshow:true, slideshowSpeed:3500, slideshowAuto:false});
});	
</script>

<br>
<p>"Build Season" -- two little words that demand lots of sweat and blood. Starting with Kickoff, build season is six weeks for us to brainstorm, prototype, design, construction, program and troubleshoot our robot. When time is up, the robot is bagged. We then eagerly wait for the competitions. This gallery consists of our favorite moments from our ongoing and past seasons. We learn time management, solving seemingly infinite complications, as well as how to work diligently, with gracious professionalism and enthusiasm. At the end of the build season we get to enjoy competitions.  After all of it, relish in our success and wait for the next season.</p>
</br>

<?php $_REQUEST['fullalbum']=1; include 'foliogallery.php'; ?>

<br />
<br />

<?php
require_once('/bin/foot.php');
?>
