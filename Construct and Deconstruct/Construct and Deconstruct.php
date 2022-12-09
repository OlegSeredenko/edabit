function constructDeconstruct($s) {
 	$z = (int)(strlen($s));
 	var_dump($z);
	$new_arr = [];
	for($i = 1; $i <= $z; $i++){
		$new_arr[]= substr($s, 0, $i);
	}
	for($x = ($z-1); $x > 0; $x--){
		$new_arr[]= substr($s, 0, $x);
	}
	return $new_arr;
}