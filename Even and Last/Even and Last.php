<?php
function evenLast($arr) {
	if(empty($arr)){
		return 0;
	}
	$sum = 0;
    for($i = 0; $i < count($arr); $i++){
        if (($i % 2 == 0) || ($i === 0)) {
            $sum = $sum + $arr[$i];
        }
    }
		return (array_pop($arr) * $sum);
}
?>