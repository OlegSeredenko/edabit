/*На вход подаётся массив с числами. проверить является ли последовательность чисел в массиве восходящей и являются ли все элементами типа 'integer'
Например для массива [1, 2, 6, 5, 7, 8] функция вернёт false, так как числа не отсортированы по восходящей последовательности
*/
<?php
function upwardTrend($arr) {
	foreach ($arr as $value) {
		if(gettype($value) != 'integer') {
			return "Strings not permitted!";
		}
	}
	$sort_arr = $arr;
	sort($sort_arr);
	return ($sort_arr == $arr) ? true : false;
}
?>