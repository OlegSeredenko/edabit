//вывести строку типа 1223334444 от единицы до введёного числа
<?php
function func($n) {
    $arr = range(1, $n);
    $str = '';
    foreach ($arr as $value) {
        for($i=0; $i < $value;  $i++) {
            $str .= $value;
        }
    }
    return $str;
}
?>