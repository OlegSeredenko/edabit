<?php
function removeNull($arr) {
	$new_arr = [];
	for ($i = 0; $i < count($arr); $i++) {
		if ($arr[$i] != null) {
			$new_arr[] = $arr[$i];
		}
	}
	return $new_arr;
}
?>