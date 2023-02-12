/*На вход подается строка, необходимо поменять первый и последний символы строик местами. Если символы равны, то вывести соответсвующее сообщение
*/
<?php
function flipEndChars($str) {
	if (!is_string($str) || $str == '') {
		return "Incompatible.";
	} elseif (substr($str, 0, 1) === substr($str, -1)) {
		return "Two's a pair.";
	} elseif (substr($str, 0, 1) != substr($str, -1)) {
		$f = substr($str, 0, 1);
		$l = substr($str, -1);
		$str = substr($str, 1, (strlen($str)-2));
		return $l . $str . $f;
	} elseif (strlen($str) == 1) {
		return "Incompatible.";
	}
}
?>