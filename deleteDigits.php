/*Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'.Удалите из нее все цифры.
*/
<?php
function deleteDigits($str)
{  
    for ($i = 0; $i < strlen($str); $i++) {
        if (is_numeric($str[$i])) {
            $str = str_replace($str[$i], '', $str);
        }
    }
    return $str;
}
?>