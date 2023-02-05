/*На вход подаётся две строки, необходимо найти расстояние Хэмминга, например для строк "strong" и "strung" ответом будет 1, так как только один символ отличается
*/ 
<?php
function hammingDistance($str1, $str2) {
	$count = 0;
	for($i = 0; $i < strlen($str1); $i++) {
		if ($str1[$i] != $str2[$i]) {
			$count = $count + 1;
		}
	}
	return $count;
}
?>