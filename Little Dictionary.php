/*На вход подается слово и массив (то же со словами), неободимо оставить в массиве только те слова, которые наниаются как и введённое слово.
Например для слова "bu" и массива ["button", "breakfast", "border"] функция вернёт  ["button"]
*/
<?php
function dictionary($initial, $words) {
	$l = strlen($initial);
	$new_arr = [];
	foreach ($words as $value) {
		if (substr($value, 0, $l) == $initial) {
			$new_arr[] = $value;
		}
	}
	return $new_arr;
}
?>