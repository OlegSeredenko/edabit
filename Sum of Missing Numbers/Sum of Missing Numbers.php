<?php
function sumMissingNumbers($arr) {
	$mini = min($arr);
	$maxi = max($arr);
	$new_arr = range($mini, $maxi);
	$sum = 0;
	for ($i = 0; $i < count($new_arr); $i++) {
		if (!in_array($new_arr[$i], $arr)) {
			$sum += $new_arr[$i];
		}
	}
	return $sum;
}
?>