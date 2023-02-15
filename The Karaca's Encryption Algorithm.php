/*На вход подается строка, необходимо строку реверсировать, потом заменить все гласные на цифры a => 0, e => 1, i => 2, o => 2, u => 3 и добавить в конце 'aca'.
*/
<?php
function encrypt($str) {
	$str = strrev($str);
	$str = str_replace('a', '0', $str);
	$str = str_replace('e', '1', $str);
	$str = str_replace('i', '2', $str);
	$str = str_replace('o', '2', $str);
	$str = str_replace('u', '3', $str);
	return $str . 'aca';
}
?>