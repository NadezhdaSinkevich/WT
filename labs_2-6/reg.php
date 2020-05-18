<?php
$main = file_get_contents("inf/pages/form.html");
$main=preg_replace("/<h[1-6]{1}>(.*?)<\/h[1-6]{1}>/ims",'<font color= blue>\0</font>',$main);
$main=preg_replace("/<em>(.*?)<\/em>/ims",'<font color= green>\0</font>',$main);
$main=preg_replace("/<b>(.*?)<\/b>/ims",'<font color= red>\0</font>',$main);

print $main;
?>

