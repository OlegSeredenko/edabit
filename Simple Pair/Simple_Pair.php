<?php
function simplePair($arr, $n) {
	for($i = 0; $i < (count($arr)-1); $i++){
	    if($arr[$i] == 0) {
	        continue;
	    }elseif(!is_int($n / $arr[$i])) {
	        continue;
	    }
		$x = $n / $arr[$i];
		$new_arr = $arr;
		unset($new_arr[$i]);
		if(in_array($x, $new_arr)){
			$key = array_search($x, $new_arr);
			$new_arr = [];
			$new_arr[] = $arr[$i];
			$new_arr[] = $arr[$key];
			return $new_arr;
		}
	}
	return null;
}
?>