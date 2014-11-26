<?php
require_once 'vendor/autoload.php';
use EasyGallery\GalleryEndpoint;

$enpoint = new GalleryEndpoint(realpath(dirname(__FILE__) . '/images'), dirname(__FILE__) . '/unsupported.html');
$enpoint->listen();

?>
