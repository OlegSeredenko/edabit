/*Дан массив. Выведите его элементы на экран следующим образом:
1 4 7
2 5 8
3 6 9
*/
<?php
function columnThree($arr)
{
    for ($i = 0; $i < (count($arr)); $i++){
        if (isset($arr[$i+1]) && isset($arr[$i+2])) {
           echo $arr[$i] . ' ' . $arr[$i+1] . ' ' . $arr[$i+2]; 
        } elseif (isset($arr[$i+1])) {
           echo $arr[$i] . ' ' . $arr[$i+1];
        } else {
           echo $arr[$i];
        }
        echo "\r\n";
        $i = $i + 2;
    }
}
?>