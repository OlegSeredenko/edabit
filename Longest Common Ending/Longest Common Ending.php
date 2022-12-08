function longestCommonEnding($s1, $s2) {
	$s1 = str_split($s1);
	$s2 = str_split($s2);
	$new_str = '';
	if(count($s1) > count($s2)){
	    $big_arr = $s1;
	    $small_arr = $s2;
	}else{
	    $big_arr = $s2;
	    $small_arr = $s1;
	}
	$small_arr_count = count($small_arr)-1;
	$big_arr_count = count($big_arr)-1;
    	$y = $small_arr_count+1;
	$count = 0;
	for($i = 0; $i < $y; $i++){
		if(($small_arr[$small_arr_count] == $big_arr[$big_arr_count]) && ($count == $i)){
			$new_str = $new_str.$small_arr[$small_arr_count];
			$count = $count + 1;
		}
		$small_arr_count = $small_arr_count - 1;
		$big_arr_count = $big_arr_count - 1;
	}
	return strrev($new_str);
}
