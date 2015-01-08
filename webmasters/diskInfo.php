<?

$freespace = disk_free_space("/");
echo ($freespace);echo ("<br/>");$bytes=$freespace % 1024;echo "Bytes: ".($bytes)." ";$kilobytesI=($freespace-$bytes)/1024;//Number of Kilobytes in the whole value$kilobytes=$kilobytesI % 1024;echo "Kilobytes: ".($kilobytes)." ";$megabytesI=($kilobytesI-$kilobytes)/1024;//Number of Megabytes in the whole remaining value$megabytes=$megabytesI % 1024;echo "Megabytes: ".($megabytes)." ";echo ($kilobytes);
?>