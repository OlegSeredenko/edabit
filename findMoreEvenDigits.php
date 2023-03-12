/*на вход подается массив с числами, необходимо оставить только те числа, где четных цифр больше, чем нечетных
*/
<?php
function findMoreEvenDigits($arr)
{
    foreach ($arr as &$value){
        $num = str_split((string)$value);
        $len = count($num);
        $count = 0;
        foreach ($num as $value2) {
            if ($value2 % 2 == 0) {
                $count = $count + 1;
            }
        }
        if (($len - $count) >= $count) {
            unset($arr[array_search($value,$arr)]);
        }
    }
    return $arr;
}
?>