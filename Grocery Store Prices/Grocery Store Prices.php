<?php
function getPrices($arr) {
	$new_arr = [];
	foreach($arr as $value){
		$x = preg_match_all("/\d+.\d+/", $value, $matches);
		$new_arr[] = $matches[0][0];
	}
	return $new_arr;
}
?>