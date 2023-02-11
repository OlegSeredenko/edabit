/*На вход подается строка, необходимо вывести символы из середины. Например для строки "test" функция вернёт "es", а для строки "testing" функция вернёт "t"
*/
<?php
function getMiddle($str) {
	if ((strlen($str) == 1) || (strlen($str) == 2)) {
		return $str;
	} elseif (strlen($str) % 2 == 0) {
		$res = substr($str, (strlen($str) / 2 - 1), 2);
		return $res;
	} elseif (strlen($str) % 2 != 0) {
		$res = substr($str, floor(strlen($str) / 2), 1);
		return $res;
	}
}
?>