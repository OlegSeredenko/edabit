/*На вход подается число, необходимо найти произведение все факториалов от 1 до этого числа. Например если на вход поадно число 4, то 4! * 3! * 2! * 1! = 288
*/
<?php
function factFact($n) {
	$arr = range(1, $n);
	$sum = 1;
	foreach ($arr as $value) {
		$new_sum = 1;
		$new_arr = range(1, $value);
		foreach ($new_arr as $new_value) {
			$new_sum = $new_sum * $new_value;
		}
		$sum = $sum * $new_sum;
	}
	return $sum;
}
?>