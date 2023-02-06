/*На вход подаётся массив с числами, необходимо найти сумму двух самых маленьких положительных чисел. Например для [19, 5, 42, 2, 77] функция вернёт 7, так как самые маленькие 
положительные числа это 5 и 2.
*/ 
<?php
function sumTwoSmallestNums($arr) {
	$sum = 0;
	foreach ($arr as &$value) {
		if ($value <= 0) {
			unset($arr[array_search($value,$arr)]);
		}
	}
	$mini = min($arr);
	$sum = $sum + $mini;
	unset($arr[array_search($mini,$arr)]);
	$mini = min($arr);
	$sum = $sum + $mini;
	return $sum;
}
?>