<?php// File and new size$filename = $_GET["src"];$percent = $_GET["percent"]/100;// Content typeheader('Content-type: image/jpeg');// Get new sizeslist($width, $height) = getimagesize($filename);$newwidth = $width * $percent;$newheight = $height * $percent;// Load$thumb = imagecreatetruecolor($newwidth, $newheight);$source = imagecreatefromjpeg($filename);// Resizeimagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);// Outputimagepng($thumb);imagedestroy($thumb);?>