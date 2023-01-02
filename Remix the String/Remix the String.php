<?php
function remix($str, $arr) {
	$str = str_split($str);
	$new_str = [];
	for ($i = 0; $i < count($str); $i++ ){
		$new_str["$arr[$i]"] = "$str[$i]";
	}
	ksort($new_str);
	return implode($new_str);
}
?>