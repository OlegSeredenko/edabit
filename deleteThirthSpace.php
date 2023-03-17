/*Удалить третий пробел.
Дана строка. Удалите из нее третий пробел. Пример: строка '12 34 56 78' станет '12 34 5678'
*/
<?php
function deleteThirthSpace($s)
{
    $s = str_split($s);
    $count = 0;
    $new_s = '';
    foreach ($s as $value) {
        if ($value == ' ') {
            $count = $count + 1;
        }
        if (!($value == ' ' && ($count == 3))) {
            $new_s .= $value;
        }
    }
    return $new_s;
}
?>