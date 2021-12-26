<html><body><?php

	require_once('inc/php-jwt-urlsafeB64.php');

	function TestURL($sTestURL) {

		$sPlainURL = './?url=' . $sTestURL;

		echo '<p>Plain:</p>';
		echo '<img src="' . $sPlainURL . '" alt="" />';

		$sEncodedURL = './?url=' . urlsafeB64Encode($sTestURL) . '&b=1';

		echo '<p>Encoded:</p>';
		echo '<img src="' . $sEncodedURL . '" alt="" />';

	}

	TestURL('github.com/ArthurHoaro');
	TestURL('https://github.com/dominicwa');
	TestURL('https://www.youtube.com/watch?v=ZXsQAXx_ao0');
	
?></body></html>