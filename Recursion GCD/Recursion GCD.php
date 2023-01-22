<?php
function gcd($a, $b) {
	$mini = min($a, $b);
	$maxi = max($a, $b);
	$number = 0;
	for ($i = 1; $i <= $mini; $i++) {
		if (($mini % $i == 0) && ($maxi % $i == 0)) {
			$number = $i;
		}
	}
	return $number;
}
?>