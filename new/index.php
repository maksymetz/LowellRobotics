<html>
<head>

	<title>Team #3234</title>
	
<link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>

<?

	//require 'SQL/connect.php';
	

	function pconnect($database, $table, $value, $column)
	{

		$con = mysql_connect("mysql","Al.Eckman","001497") or die ("Unable to connect!");
	
		mysql_select_db($database);
		
		//return mysql_query("SELECT * FROM index WHERE index=1") or die ("Error in query:".mysql_error());
	
		return mysql_query("SELECT * FROM `".$table."` WHERE `".$column."`=".$value) or die ("Error in query:".mysql_error());
	}
	

?>

<div class="hi">

<div class="header">
	<?
	
		$result = pconnect("pages", 'index', 1, "id");
		
		$row = mysql_fetch_array($result) or die(mysql_error());
		print stripslashes($row['header']);


		
		/*while ( $row = mysql_fetch_array($result) )
		{
		
		echo $row["header"];
		
		}*/
		
		//echo "<table> <tr> <td><img src=\"Pics/Logo.png\" width=\"237\" height=\"110\"/></td> <td align=\"center\"> <center class=\"header\"> <h2>Red Arrow Robotics</h2> <h3>FRC Team #3234</h3> </center> </td> </tr> </table>";
	
	?>
</div>

<div class="menu">
	<?
	
		require 'php/menu.php';
	
	?>
</div>

<div class="sponsors">
	<?
	
		require 'php/sponsors.php';
	
	?>
</div>

<div class="footer">

	<?
	
		require 'php/footer.php';
	
	?>
</div>

<div class="main">
<center>

	<?
	
		require 'php/index.php';
	
	?>

</center>
</div>

</div>

</body>

</html>