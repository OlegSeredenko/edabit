/*На вход подается массив сос троками двух типов "run" и "jump", а так же визуализация бега атлета, то есть если к примеру в массиве у нас "run", "jump","run" - значит визуализация
будет такой _|_. Если массив не совпадает с визуалищацией, то нужно это изменить. Например для ["run", "jump", "run", "run", "run"] и визуализации "_|_|_" функция вернёт "_|_/_"
*/
<?php
function runningAthlete($act, $txt) {
	$new_txt = '';
	for($i = 0; $i < count($act); $i++) {
		if (($act[$i] == "run") && ($txt[$i] == '_')) {
			$new_txt = $new_txt . '_';
		} elseif (($act[$i] == "jump") && ($txt[$i] == '|')) {
			$new_txt = $new_txt . '|';
		} elseif (($act[$i] == "run") && ($txt[$i] != '_')) {
			$new_txt = $new_txt . '/';
		} elseif (($act[$i] == "jump") && ($txt[$i] != '|')) {
			$new_txt = $new_txt . 'x';
		}
	}
	return $new_txt;
}
?>