<?php
$dir = "static/banners/";
$files = scandir($dir);
$images = array_diff($files, array('.', '..'));
$name = $images[array_rand($images)];
// open the file in a binary mode
$ext = pathinfo($name, PATHINFO_EXTENSION);

// send the right headers
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1
header('Pragma: no-cache'); // HTTP 1.0
header('Expires: 0'); // Proxies
header("Content-type: image/" . $ext);
header("Content-Disposition: inline; filename=" . $name);

// dump the picture and stop the script
readfile($dir.$name);
exit;
?>
