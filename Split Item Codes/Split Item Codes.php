<?php
function splitCode($item) {
	$letters = '';
	$numbers = '';
	for ($i = 0; $i < strlen($item); $i++) {
		if (!is_numeric($item[$i])) {
			$letters .= '' . $item[$i];
		} else {
			$numbers = (int)substr($item, $i);
			return [$letters, $numbers];
		}
	}
}
?>