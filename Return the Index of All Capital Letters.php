/*На вход подаётся строка, необходимо найти индексы всех букв, записанных в верхнем регистре. Например для "eQuINoX" функция вернёт [1, 3, 4, 6]
*/ 
<?php
function indexOfCaps($str) {
	$new_arr = [];
	$str = str_split($str);
	foreach ($str as $key => $value) {
		if (($value == strtoupper($value)) && (ctype_alpha($value))){
			$new_arr[] = $key;
		}
	}
	return $new_arr;
}
?>