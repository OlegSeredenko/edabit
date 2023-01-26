<?php
function median($arr) {
	sort($arr);
	return (count($arr) % 2 == 0) ? (($arr[(count($arr) / 2 - 1)] + ($arr[(count($arr) / 2 )])) / 2) : $arr[(count($arr) / 2)];
}
?>
