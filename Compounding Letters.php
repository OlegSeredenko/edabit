/*На вход подаётся строка типа "abcd", необходимо преобразовать её в "A-Bb-Ccc-Dddd".
*/
<?php
function accum($str) {
	$str = str_split(strtolower($str));
	$new_str = '';
	foreach ($str as $key => $value) {
		$x = '';
		for($i = 0; $i <= $key; $i++) {
			$x = $x . $value;
		}
		$new_str = $new_str . $x . '-';
	}
	$new_str = explode('-',$new_str);
	foreach ($new_str as &$value2) {
	    $value2 = ucfirst($value2);
	}
	$new_str = implode('-',$new_str);
	$new_str = substr($new_str,0,-1);
	return $new_str;
}
?>