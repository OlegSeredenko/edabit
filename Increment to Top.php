/*На вход подаётся массив с числами. Необходимо найти максимальное число в массиве и посчитать, скольго "шагов" должны сделать другие элементы
массива, чтобы стать равными максимальному. Например для массива [3, 4, 5] функция вернёт "3", так как максимальное число - это 5. И чтобы другие элементы
стали тоже пятерками, нужно тройку увеличить на 1, потом еще раз на единицу (2 шага) и четверку увеличить на единицу (один шаг). В сумме три шага
*/
<?php
function incrementToTop($arr) {
	$maxi = max($arr);
	unset($arr[array_search($maxi,$arr)]);
	$arr = array_values($arr);
	$count = 0;
	foreach ($arr as &$value) {
		while ($value != $maxi) {
			$value = $value + 1;
			$count = $count + 1;
		}
	}
	return $count;
}
?>