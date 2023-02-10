/*На вход подается строка, необходимо заменить буквы от от 'a' до 'm' на '0',  буквы от от 'n' до 'z' на '1'. Например для строки "excLAIM" вернуть "0100000"
*/
<?php
function convertBinary($str) {
	$arr_f = range('a', 'm');
	$str = strtolower($str);
	$new_s = '';
	for($i = 0; $i < strlen($str); $i++) {
		if (in_array($str[$i], $arr_f)) {
			$new_s .= '0';
		} else {
			$new_s .= '1';
		}
	}
	return $new_s;
}
?>