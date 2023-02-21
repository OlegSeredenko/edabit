/*Дана некоторая строка с числами, например, такая:'1234567890'. Найдите сумму пар чисел: 12 + 34 + 56 + 78 + 90
*/ 
<?php
$str = '1234567890';
function findSumPairs($str)
{   
    $sum = [];
    for ($i = 0; $i < strlen($str); $i++) {
        $x = $str[$i] . $str[$i+1];
        $sum[] = (int)$x;
        $i = $i + 1;
    }
    $sum = array_sum($sum);
    return $sum;
}
?>