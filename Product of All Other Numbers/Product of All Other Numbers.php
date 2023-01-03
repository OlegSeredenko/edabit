<?php
function getProducts($arr) {
	$new_arr = [];
	for( $i = 0 ; $i < count($arr); $i++){
		$copy_arr = $arr;
		unset($copy_arr[$i]);
		$new_arr[] = array_product($copy_arr);
	}
	return $new_arr;
}
?>