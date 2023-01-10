<?php
function alternatingCaps($str) {
	$str = str_split($str);
	var_dump($str);
	$new_str = '';
	$count = 0;
    foreach ($str as $value) {
        if ((($count % 2 == 0) || ($count == 0)) && ($value != ' ')) {
            $x = strtoupper($value);
            $new_str = $new_str . $x;
            $count += 1;
        } elseif  ((($count % 2 != 0) || ($count != 0)) && ($value != ' ')) {
            $x = strtolower($value);
            $new_str = $new_str . $x;
            $count += 1;
        } elseif ($value == ' ') {
            $new_str = $new_str . ' ';
        }
    }
	return $new_str;
}
?>