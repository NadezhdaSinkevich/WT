<?php
$main = file_get_contents("inf/pages/main_page.html");

$main= str_replace(
    '{general}',
    file_get_contents('inf/pages/template.html'),
    $main);


print $main;
?>