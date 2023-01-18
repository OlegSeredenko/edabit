<?php
function birthdayCakeCandles($arr) {
	sort($arr);
	$maxi = array_pop($arr);
	$count = 1;
	while (array_pop($arr) == $maxi) {
		$count += 1;
	}
	return $count;
}   
?>
