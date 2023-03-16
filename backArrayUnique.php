/*На вход подается массив со значениями, необходимо удалить все элементы, втстречающиеся только один раз,
а элементы, втстречающиеся более одного раза, избавить от повторений.
*/
<?php
function backArrayUnique($arr)
{
    $new_arr = array_count_values($arr);
    $result = [];
    foreach ($new_arr as $key => $value) {
        if ($value != 1) {
            $result[$key] = $value;
        }
    }
    $arr = [];
    foreach ($result as $key2 => $value2) {
        $arr[] = $key2;
    }
    print_r($arr);
}
?>