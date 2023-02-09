/*На вход подаётся число, необходимо найти факториал
*/
<?php
function factorial($int) {
	$arr = range(1, $int);
	$fact = 1;
	foreach ($arr as $value) {
		$fact = $fact * $value;
	}
	return $fact;
}
?>