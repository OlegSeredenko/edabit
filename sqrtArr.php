/*Дан массив с числами. Получите из него массив с квадратными корнями этих чисел
*/ 
<?php
function sqrtArr($arr) 
{
    foreach ($arr as &$value) {
        $value = sqrt($value);
    }
    return $arr;
} 
?>