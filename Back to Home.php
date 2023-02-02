/*На вход подаётся строка с символами направлений компаса. Нужно посчитать, если человек вышел из пункта отправления и шёл по каждому направлению из строки
по одной минуте, то вернётся ли этот человек в пункт отправления?
*/
<?php
function backToHome($direction) {
	$N = substr_count($direction, 'N');
	$S = substr_count($direction, 'S');
	$W = substr_count($direction, 'W');
	$E = substr_count($direction, 'E');
	return (($N == $S)&&($W == $E)) ? true : false;
}
?>