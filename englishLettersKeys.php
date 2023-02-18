/*Заполните массив числами от 1 до 26 так, чтобы ключами этих чисел были буквы английского алфавита
*/ 
<?php
function englishLettersKeys() 
{
    $letters = range('a', 'z');
    $new_arr = [];
    $count = 1;
    foreach ($letters as $value) {
        $new_arr[$value] = $count;
        $count = $count + 1;
    }
    return $new_arr;
} 
 
var_dump(englishLettersKeys());
?>