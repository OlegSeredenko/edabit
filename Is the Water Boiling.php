/*На вход подается температура в формате "212F" или "100C". Необходимо вывести true, если вода при такой температуре закипает.
*/
<?php
function isBoiling($temp) {
	$lastchar = substr($temp, -1);
	$temp = (int)(substr($temp, 0, (strlen($temp) -1)));
	if ($lastchar == "F") {
		if ($temp >= 212) {
			return true;
		} else {
			return false;
		}
	} else {
		if ($temp >= 100) {
			return true;
		} else {
			return false;
		}
	}
}
?>