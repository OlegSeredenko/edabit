<?php
function sevenBoom($arr) {
	$flag = false;
	foreach ($arr as $value) {
		$value = (string)$value;
		if (strpbrk($value, "7") != false) {
			$flag = true;
		}
	}
	return ($flag == true) ? "Boom!" : "There is no 7 in the array." ;
}
?>