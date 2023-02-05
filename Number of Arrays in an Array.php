/*На вход подаётся массив, необходимо посчитать количество массивов, входящих в основной массив. Напрмиер для [[1, 2, 3], [1, 2, 3], [1, 2, 3]] функция вернёт 3
*/ 
<?php
function num_of_subarrays($arr) {
	$count = 0;
	foreach ($arr as $value) {
		if (is_array($value)) {
			$count = $count + 1; 
		}
	}
	return $count;
}
?>