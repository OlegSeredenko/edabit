/*Сделайте функцию, которая параметром будет принимать два числа и возвращать массив их общих делителей.
*/ 
<?php
function friendlyNumbers($a, $b)
{
    $mini = min($a, $b);
    $maxi = max($a, $b);
    $new_arr = [];
    for ($i = 1; $i <= $mini; $i++) {
        if ($mini % $i == 0 && $maxi % $i == 0) {
            $new_arr[] = $i;
        }
    }
    return $new_arr;
}
?>