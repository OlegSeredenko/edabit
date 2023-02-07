/*На вход подаётся массив со строками и указанный тип данных (названия или аббревиатуры), необходимо вывести массив с элементами, соответствующими типу данных.
Например для массива ["Arizona", "CA", "NY", "Nevada"] и типа данных "abb" функция венрнёт ["CA", "NY"],
а для ["Arizona", "CA", "NY", "Nevada"] и типа данных "full" функция венрнёт ["Arizona", "Nevada"]
*/ 
<?php
function filterStateNames($arr, $type) {
	$new_arr = [];
	if ($type == "abb") {
		foreach ($arr as $value) {
			if (strlen($value) == 2) {
				$new_arr[] = $value;
			}
		}
	} else {
		foreach ($arr as $value) {
			if (strlen($value) != 2) {
				$new_arr[] = $value;
			}
		}
	}
	return $new_arr;
}
?>