/*
Напишите  функцию, которая будет сливать два массива таким образом: из, кпримеру, [1, 2, 3] и ['a', 'b', 'c'] она сделает [1, 'a', 2, 'b', 3, 'c']
*/
<?php
function array_strange_merge($a, $b) 
{
    $new_arr = [];
    for ($i= 0; $i < count($a); $i++) {
        $new_arr[] = $a[$i];
        $new_arr[] = $b[$i];
    }
    return $new_arr;
}
?>