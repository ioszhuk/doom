<?php

require_once("vendor/autoload.php");

Tinify\setKey("jvJg7SL4r5EuFynzzajwqOy6XeBVtrc7");

$dir = scandir('media');

unset($dir[0]);
unset($dir[1]);

$startFolder = 'media/';

$finishFolder = 'done/';

$i = 1;

foreach ($dir as $image) {

Tinify\fromFile($startFolder . $image)->toFile($finishFolder . $image);

echo $i . "<br>";

$i++;

}

