/*На вход подаётся строка, необходимо найти букву, которая встречается только один раз в стркое. Например для строки "EFFEAABbc" функция вернёт "C"
*/ 
<?php
function singleOccurrence($str) {
	if ($str == '') {
		return '';
	}
	$arr = range('A','Z');
	$str = strtoupper($str);
	foreach ($arr as $value) {
		$count = substr_count($str, $value);
		if ($count == 1) {
			return $value;
		}
	}
}
?>