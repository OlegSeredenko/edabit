/*На вход подаётся  массив со строковыми элементами. необходимо оставить только те элементы, в которых строка состоит тольок из уникальных (неповторяющихся) символов 
Например для массива ["abb", "abc", "abcdb", "aea", "bbb"] функция вернёт только ["abc"]
*/ 
<?php
function filterUnique($arr) {
	$new_arr = [];
	foreach ($arr as $value) {
		$value_arr = str_split($value);
		$x = array_unique($value_arr);
		$y = $value_arr;
		sort($x);
		sort($y);
		if ($x === $y) {
			$new_arr[] = $value;
		} 
	}
	return $new_arr;
}
?>