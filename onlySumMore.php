/*дается массив с числами, нужно отсавить только те числа, у которых сумма цифр , возведена в степень, больше самого числа
*/
<?php
function onlySumMore($arr)
{
    foreach ($arr as &$value) {
        $digit = str_split((string)$value);
        if (pow(array_sum($digit), 2) < $value) {
            unset($arr[array_search($value,$arr)]);
        }
    }
    return $arr;
}
?>