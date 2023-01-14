<?php
function isSpecialArray($arr) {
	$flag = true;
	for ($i = 0; $i < count($arr); $i++) {
		if (($i == 0) || ($i % 2 == 0)) {
			if (($arr[$i]) % 2 != 0) {
				$flag = false;
			}
		} elseif ($i % 2 != 0) {
			if (($arr[$i]) % 2 == 0) {
				$flag = false;
			}
		}
	}
	return ($flag == true) ? true : false;
}
?>