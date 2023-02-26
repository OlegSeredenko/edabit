/*Напишите  функцию, которая корректно будет складывать часы и минуты.Примеры: на вход функции подается такое –1h10min+30min –в результатте  функция
выведет 1h40min
*/
<?php
function timePlusMinutes($str)
{
    $str = str_split($str);
    if (is_numeric($str[1])) {
        $hours = array_slice($str, 0, 2);
        $str = array_slice($str, 3);
    } else {
        $hours = array_slice($str, 0, 1);
        $str = array_slice($str, 2);
    }
    $hours = (int)implode('',$hours);
    if (is_numeric($str[1])) {
        $minutes = array_slice($str, 0, 2);
        $str = array_slice($str, 6);
    } else {
        $minutes = array_slice($str, 0, 1);
        $str = array_slice($str, 5);
    }
    $minutes = (int)implode('',$minutes);
    if (is_numeric($str[1])) {
        $minutes_plus = array_slice($str, 0, 2);

    } else {
        $minutes_plus = array_slice($str, 0, 1);
        
    }
    $minutes_plus = (int)implode('',$minutes_plus);
    $result = ($hours * 60) + $minutes + $minutes_plus;
    $hours = floor($result / 60);
    $minutes = $result - ($hours * 60);
    return $hours . "h" . $minutes . "min";
}
  
?>