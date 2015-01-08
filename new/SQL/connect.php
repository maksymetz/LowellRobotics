<?php

function connect($database, $table, $value, $column)
{

	$con = mysql_connect("mysql","Al.Eckman","001497") or die ("Unable to connect!");
	
	mysql_select_db($database);
	
	/*$result = mysql_query("SELECT " . $column . " FROM" . " " . $table);
	
	while($row = mysql_fetch_array($result))
	{
		$out = $row[$column];
	}*/
	
	return mysql_query("SELECT * FROM ".$table." WHERE ".$column."=".$value) or die ("Error in query:".mysql_error());
	
	//return $out;
	
	
}
?>