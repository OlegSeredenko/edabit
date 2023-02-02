/*На вход подаётся массив с числами, например [1, 5, 9], необходимо посчитать сумму его кубов, то есть 1^3 + 5^3 + 9^3 = 1 + 125 + 729 = 855. Функция вернёт 855
*/
<?php
function sumOfCubes($nums) {
	foreach ($nums as &$value) {
		$value = $value ** 3;
	}
	return array_sum($nums);
}
?>