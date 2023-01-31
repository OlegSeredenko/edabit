/*На вход подаётся строка с символами в нижнем и верхнем регистрах. Необходимо поменять регистр символов на обратный, например для строки "Happy Birthday" функция вернёт "hAPPY bIRTHDAY"
*/
<?php
function reverseCase($str) {
	$new_str = '';
	for ($i = 0; $i < strlen($str); $i++) {
		if ($str[$i] === (strtolower($str[$i]))) {
			$x = strtoupper($str[$i]);
			$new_str = $new_str . $x;
		} else {
			$x = strtolower($str[$i]);
			$new_str = $new_str . $x;
		}
	}
	return $new_str;
}
?>