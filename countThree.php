/*Дан массив с числами. Посчитайте суммарное количество цифр 3 в этихчислах
*/
<?php
function countThree($arr)
{
    $sum = 0;
    foreach ($arr as $value) {
        $value = (string)$value;
        $value = str_split($value);
        foreach ($value as $value2) {
            if ($value2 == '3') {
                $sum = $sum + 1;
            }
        }
    }
    return $sum;
}
?>