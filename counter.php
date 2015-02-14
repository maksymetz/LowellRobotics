<?php

/* counter */

//opens countlog.txt to read the number of hits
$datei = fopen("/counterlog.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;
echo '$count' 
echo ' hits' ;
echo '\n' ;

// opens countlog.txt to change new hit number
$datei = fopen("/counterlog.txt","w");
fwrite($datei, $count);
fclose($datei);

?>