/*На вход подаётся строка, необходимо сдвинуть все буквы в верхнем регистре в самое начало строки
Например для строки "hApPy" функция вернёт "APhpy", а для "moveMENT" вернёт "MENTmove".
*/ 
<?php
function capToFront($s) {
	$start_str = '';
	$end_str = '';
	for($i = 0; $i < strlen($s); $i++) {
		if ($s[$i] === strtoupper($s[$i])){
			$start_str = $start_str . $s[$i];
		} else {
			$end_str = $end_str . $s[$i];
		}
	}
	return $start_str . $end_str;
}
?>