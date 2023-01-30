/*На вход подается строка. Необходимо вернуть строку, где сначала будут символы с четными индексами, а потом с нечетными
Например для строки "abcd" функция вернёт "acbd"
*/
<?php
function indexShuffle($str) {
	$str_odd = '';
	$str_even = '';
	for($i = 0; $i < strlen($str); $i++) {
		if ($i % 2 != 0) {
			$str_odd .= $str[$i];
		} else {
			$str_even .= $str[$i];
		}
	}
	return $str_even . $str_odd;
}
?>