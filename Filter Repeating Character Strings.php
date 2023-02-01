/*На вход подаётся массив со строками. Необходимо оставить только те строки, которые состоят из одного элемента Например для массива ["aaaaaa", "bc", "d", "eeee", "xyz"] функция вернёт ["aaaaaa", "d", "eeee"]  
*/
<?php
function identicalFilter($arr) {
	$new_arr = [];
	foreach ($arr as $value) {
		if (strlen($value) == 1) {
			$new_arr[] = $value;
		} else {
			$x = $value[0];
			$count = strlen($value) - 1;
			for ($i = 1; $i < strlen($value); $i++) {
				if ($value[$i] == $x) {
					$count = $count - 1;
				}
			}
			if ($count == 0) {
				$new_arr[] = $value;
			}
		}
	}
	return $new_arr;
}
?>