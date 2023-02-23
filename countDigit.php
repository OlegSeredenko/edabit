/*
Вам нужно разработать программу, 
которая считала бы количество вхождений какой-нибуть выбранной вами цифры в выбранном вами числе. 
Например: цифра 5 в числе 442158755745 встречается 4 раза
*/ 
<?php

function countDigit($digit, $number)
{   
    $number = (string)$number;
    $count = 0;
    for ($i = 0; $i < strlen($number); $i++) {
        if ($digit == (int)$number[$i]) {
            $count = $count + 1;
        }
    }
    return $count;
}
?>