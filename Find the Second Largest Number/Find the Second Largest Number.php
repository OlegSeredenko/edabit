<?php
function secondLargest($a) {
	unset($a[array_search(max($a),$a)]);
	return max($a);
}
?>