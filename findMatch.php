/*На вход подается массив с набором букв и цифр, посчитать количество элементов, в которых есть хотя бы по одному экземпляру
четное число и гласная буква одновременно «A», «E», «I», «O», «U», «Y»
*/
<?php
function findMatch($arr)
{   
    $vowels = ['A', 'E', 'I', 'O', 'U', 'Y'];
    $count = 0;
    foreach ($arr as $value) {
        $value = (string)$value;
        $flag1 = false;
        $flag2 = false;
        for ($i = 0; $i < strlen($value); $i++) {
            if (is_numeric($value[$i]) && $value[$i] % 2 == 0) {
                $flag1 = true;
            }
            if (!is_numeric($value[$i]) && (in_array(strtoupper($value[$i]), $vowels))) {
                $flag2 = true;
            }
        }
        if ($flag1 && $flag2) {
            $count = $count + 1;
        }
    }
    return $count;
}
?>