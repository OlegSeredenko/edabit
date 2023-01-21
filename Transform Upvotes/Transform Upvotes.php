<?php
function transformUpvotes($str) {
	$str = explode(" ", $str);
	foreach ($str as &$value) {
		if (strpos($value, 'k')) {
			$value = str_replace('k', '', $value);
			$value *= 1000;
			$value = (int)$value;
		}
		$value = (int)$value;
	}
	return $str;
}
?>