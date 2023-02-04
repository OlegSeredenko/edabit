/*На вход подаётся строка с цифрами. необходимо оставить только последние четыре цифры, а все сотальнеы символы заменить на '#'. Например для строки "4556364607935616" 
функция вернёт "############5616"
*/ 
<?php
function maskify($str) {
    $new_str = '';
    if ($str == '') {
		return '';
    } elseif (strlen($str) <= 4) {
		return $str;
	} else {
		for( $i = 0; $i < (strlen($str) - 4); $i++) {
			$new_str = $new_str . '#';
		}
	}
	$position = strlen($str) - 4;
	for ($k = $position; $k < ($position + 4); $k++) {
	    $x = $str[$k];
	    $new_str = $new_str . $x;
	}
	return $new_str;
}
?>