/*На вход подаётся массив с отрицательными и положительными числами, необходимо найти количество положительных чисел и сумму отрицательных чисел, и вывести ответ в массиве.
Например для [91, -4, 80, -73, -28] функция вернёт [2, -105]
*/ 
<?php
function countPosSumNeg($arr) {
	if (empty($arr)) {
		return [];
	}
	$positive = 0;
	$negative = 0;
	foreach ($arr as $value) {
		if ($value > 0) {
			$positive = $positive + 1;
		} else {
			$negative = $negative + $value;
		}
	}
	return [$positive, $negative];
}
?>