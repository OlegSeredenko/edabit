<?php
function sumOfTwo($a, $b, $v) {
	for($i = 0; $i < count($a); $i++){
		foreach($b as $value){
			if(($value + $a[$i]) == $v){
				return true;
			}
		}
	}
	return false;
}
?>