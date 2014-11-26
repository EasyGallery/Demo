<!DOCTYPE html>
<?php

require_once 'vendor/autoload.php';

use EasyGallery\ThumbFactory;
use EasyGallery\GalleryService;

$localdir = dirname(__FILE__);

$gal = new GalleryService($localdir . "/thumbs", $localdir . "/images");
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<header></header>
		<main>
<?php
$gal->print_images(0, 10, function ($code, $img, $thumb_relative) {
?>
	<a href="image.php?code=<?=$code?>">
		<img src="thumbs<?=$thumb_relative?>"/>
	</a>
<?php
});
?>
				</main>
		<footer></footer>
		<div id="body">
		</div>
	</body>
</html>