/*Дана строка '1234567890'. Найдите сумму цифр из этой строки.
*/ 
<?php
$a = '1234567890';
function sumDigits($a) 
{
    $sum = 0;
    for($i = 0; $i < strlen($a); $i++) {
        $sum = $sum + ((int)$a[$i]);
    }
    return $sum;
} 
 
var_dump(sumDigits($a));
?>