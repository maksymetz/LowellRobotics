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

<br />
<br />

<?php $_REQUEST['fullalbum']=1; include 'foliogallery.php'; ?>

<br />
<br />

<?php
require_once('/bin/foot.php');
?>
