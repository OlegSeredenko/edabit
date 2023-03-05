/*На вход подается массив со строками, необходимо поменять регистр каждого символа на противоположный
*/
<?php
function reversRegister($arr)
{
    foreach ($arr as &$value) {
        $value_arr = str_split($value);
        for ($i = 0; $i < count($value_arr); $i++) {
            if ($value_arr[$i] == strtoupper($value_arr[$i])) {
                $value_arr[$i] = strtolower($value_arr[$i]);
            } else {
                $value_arr[$i] = strtoupper($value_arr[$i]);
            }
        }
        $value = implode($value_arr);
    }
    return $arr;
}
?>