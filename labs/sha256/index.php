<html>
<head>
</head>
<body>

<form method="post" action="index.php">
Text to convert: <input type="password" name="uncrypt" />
</form>
<br/>
<br/>
<?php

//get POST variable
if($_POST['uncrypt']!=NULL)
{
	echo("The SHA256 Hash is: ".hash('sha256', $_POST['uncrypt']));
}

?>

</body>
</html>