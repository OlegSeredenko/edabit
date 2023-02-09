/*На вход подаётся массив с числами. Необходимо посчитать произведение всех нечетных чисел
*/
<?php
function oddProduct($arr) {
	$product = 1;
	foreach($arr as $value) {
		if ($value % 2 != 0) {
			$product = $product * $value;
		}
	}
	return $product;
}
?>