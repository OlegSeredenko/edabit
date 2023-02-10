/*На вход подаётся массив с чсилами необходимо разбить числа на два массива, в первом оставить четные числа, а во втором нечетные. Например для [5, 8, 9, 2, 0]
функция вернёт [[8, 2, 0], [5, 9]]
*/
<?php
function evenOddPartition($arr) {
	$arr_even = [];
	$arr_odd = [];
	foreach($arr as $value) {
		if ($value % 2 == 0) {
			$arr_even[] = $value;
		} else {
			$arr_odd[] = $value;
		}
	}
	return [$arr_even, $arr_odd];
}
?>