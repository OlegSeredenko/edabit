/*На вход подаётся строка, проверить, является ли она палиндроном. Например для строки Neuquen функия вернёт true
*/
<?php
function isPalindrome($str) {
	$str = preg_replace('/[^a-zа-я ]/ui', '', $str);
	$str = str_replace(' ', '',strtolower($str));
	$str_rev = strrev($str);
	return ($str_rev == $str) ? true : false;
}
?>