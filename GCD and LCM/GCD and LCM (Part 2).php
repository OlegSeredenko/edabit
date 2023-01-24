<?php
function lcm($a, $b) {
	$mini = min($a, $b);
	$maxi = max($a, $b);
	var_dump($mini);
	var_dump($maxi);
    for ($i = $maxi; $i <= ($a * $b); $i++) {
        if (($i % $maxi == 0) && ($i % $mini == 0)) {
            return $i;
        }
	}
}
?>