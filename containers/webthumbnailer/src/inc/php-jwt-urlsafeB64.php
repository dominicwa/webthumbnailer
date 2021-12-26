<?php 

	// https://github.com/firebase/php-jwt/blob/feb0e820b8436873675fd3aca04f3728eb2185cb/src/JWT.php#L350
	function urlsafeB64Encode($input) {
		return \str_replace('=', '', \strtr(\base64_encode($input), '+/', '-_'));
	}

	// https://github.com/firebase/php-jwt/blob/feb0e820b8436873675fd3aca04f3728eb2185cb/src/JWT.php#L333
	function urlsafeB64Decode($input) {
		$remainder = \strlen($input) % 4;
		if ($remainder) {
			$padlen = 4 - $remainder;
			$input .= \str_repeat('=', $padlen);
		}
		return \base64_decode(\strtr($input, '-_', '+/'));
	}

?>