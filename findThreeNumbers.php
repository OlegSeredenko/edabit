//дан массив с числами. Проверить, есть ли в массиве три одинаковых числа подряд
<?php
function findThreeNumbers($arr) {
    for ($i=0; $i < (count($arr)-2); $i++) {
        if (($arr[$i] == $arr[$i+1]) && ($arr[$i+1] == $arr[$i+2])) {
            return true;
        }
    }
    return false;
}
