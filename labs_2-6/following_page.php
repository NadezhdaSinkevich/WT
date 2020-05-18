<?php
$main=file_get_contents("inf/pages/following_page.html");
$main= str_replace(
    '{general}',
    file_get_contents('inf/pages/template.html'),
    $main);
	
$main= str_replace(
    '{back}',
    file_get_contents('inf/pages/template.html'),
    $main);
	
$id=($_GET["perem"]);

$main = str_replace('{download_text}',
				 file_get_contents("inf/common/".$id."/".$id.".txt"),
				 $main);

$img='<img class="sign{download_image}" src="inf/common/{image_id}/{download_image}.png">';

$img = str_replace('{image_id}',
				 $id,
				 $img);

$blank='';
for ($i = 1; $i <= 3; $i++) {
$img_change=$img;
	$img_change = str_replace('{download_image}',
	$i,
    $img_change);
$blank=$blank.$img_change;
}
$main=str_replace('{image}',$blank,$main);
echo $main;



?>