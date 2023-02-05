/*На вход подаётся число, необходимо заполнить массив другими массивами в таком виде: для числа 1 ➞ [[1]], для числа 3 ➞ [[1], [2, 2], [3, 3, 3]]
*/ 
<?php
function pyramidArrays($n) {
	if ($n == 1) {
		return [[1]];
	}
	$arr = range(1, $n);
	$new_arr = [];
	foreach ($arr as $value) {
		$x = [];
		for ($i = 0; $i < $value; $i++) {
			$x[] = $value;
		}
		$new_arr[] = $x;
	}
	return $new_arr;
}
?>