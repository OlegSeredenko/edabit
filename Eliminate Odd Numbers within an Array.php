/*На вход подаётся массив с числами. Необходимо удалить нечетные числа
*/ 
<?php
function noOdds($arr) {
	$new_arr = [];
	foreach($arr as $value) {
		if ($value % 2 == 0) {
			$new_arr[] = $value;
		}
	}
	return $new_arr;
}
?>