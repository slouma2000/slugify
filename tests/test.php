<?php
	require_once __DIR__ . '/../vendor/autoload.php';
	use Slugify\Slugify;

	echo Slugify::convert('Héllo World héhé to My world!!!!','-'); // hello-world
?>