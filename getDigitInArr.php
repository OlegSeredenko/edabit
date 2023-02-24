/*
Дан массив с числами и цифра. Запишите в новый массив только те числа, в которых есть эта цифра
*/
<?php
function functiongetMultiArray($arr, $digit) 
{
    $new_arr = [];
    foreach ($arr as $value) {
        $value = (string)$value;
        $digit = (string)$digit;
        if (strpos($value, $digit) !== false) {
            $new_arr[] = $value;
        }
    }
    return $new_arr;
}
?>