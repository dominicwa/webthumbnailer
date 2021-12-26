<?php

	if (!isset($_GET['url'])) exit('Error: url missing.');

	require_once('vendor/autoload.php');
	require_once('inc/php-jwt-urlsafeB64.php');

	use WebThumbnailer\WebThumbnailer;

	$oWT = new WebThumbnailer();

	if (!isset($_GET['mw'])) $_GET['mw'] = 1000;
	if (!isset($_GET['mh'])) $_GET['mh'] = 1000;

	$oWT->maxWidth(intval($_GET['mw']));
	$oWT->maxHeight(intval($_GET['mh']));

	$oWT->crop(false);
	$oWT->noCache(true);

	if (@$_GET['b'] == '1') $_GET['url'] = urlsafeB64Decode($_GET['url']);

	$sImageSrc = $oWT->thumbnail($_GET['url']);
	if (!$sImageSrc) $sImageSrc = 'img/unknown.png';

	$aImgInfo = getimagesize($sImageSrc);
	header("Content-type: {$aImgInfo['mime']}");
	readfile($sImageSrc);

?>