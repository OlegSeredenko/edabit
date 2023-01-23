<?php
function gcd($arr) {
	$mini = min($arr);
	$divisor = 0;
	for ($i = 1; $i <= $mini; $i++) {
		$count = 0;
		foreach ($arr as $value) {
			if ($value % $i == 0) {
				$count += 1;
			}
		}
		if ($count == count($arr)) {
			$divisor = $i;
		}
		$count = 0;
	}
	return $divisor;
}
?>