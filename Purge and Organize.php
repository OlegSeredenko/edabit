/*На вход подаётся массив с числами. Необходимо отсортировать его и оставить только уникальные значения.
*/ 
<?php
function uniqueSort($arr) {
	$arr = array_unique($arr);
	sort($arr);
	return $arr;
}
?>