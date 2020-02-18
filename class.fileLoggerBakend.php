<?php

$url = "ftp://anonymous@ftp.gnu.org:21/pub/gnu/gcc";
$arParts = parse_url($url);
var_dump($arParts);

?>
