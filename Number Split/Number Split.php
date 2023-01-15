<?php
function numberSplit($n) {
	if ($n % 2 == 0) {
		return [($n / 2), ($n / 2)];
	} else {
		return [floor($n / 2), ceil($n / 2)];
	}
}
?>