<?php
function insertWhitespace($s) {
	$str = "$s[0]";
	$count = strlen($s);
	for ($i = 0; $i < strlen($s); $i++) {
	    if ($count == 1) {
	        return $str;
	    } elseif (($s[$i] === strtolower($s[$i])) && (($s[$i+1] === strtoupper($s[$i+1])))) {
			$str .= ' ' . $s[$i+1];
			$count -= 1;
		} else {
			$str .= $s[$i+1];
			$count -= 1;
		}
	}
	return $str;
}
?>