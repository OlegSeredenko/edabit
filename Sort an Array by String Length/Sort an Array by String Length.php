<?php
function sortByLength($arr) {
	$new_arr = [];
	foreach ($arr as $value1) {
		$new_arr["$value1"] = strlen($value1);
	}
	asort($new_arr);
	$result_arr = [];
	foreach ($new_arr as $key => $value2) {
		$result_arr[] = $key;
	}
	return $result_arr;
}
?>