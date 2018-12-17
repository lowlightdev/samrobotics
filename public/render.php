<?php
$path    = './files/';
$files = scandir($path);



$files = array_diff(scandir($path), array('.', '..'));
$myJSON = json_encode($files);

print $myJSON;
?>