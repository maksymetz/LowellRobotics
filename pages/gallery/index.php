<?php

$css =	array(	"gallery.css");
$js =	array(	"gallery.js",
				"/scripts/AJAX.js");

require_once('/bin/head.php');
?>

<!-- **** MAIN AREA **** -->

<div id="photo-gallery">
	<table id="photo-table">
	</table>
	<script type="text/javascript">
			var table = document.getElementById('photo-table');
			table.innerHTML = table.width + " " + table.height;
	</script>
</div>

<!-- **** END MAIN AREA **** -->

<?php
require_once('/bin/foot.php');
?>