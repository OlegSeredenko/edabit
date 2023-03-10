/*на вход подается строка, оставить только те символы, у которых индекс в таблице ASCII четный. Новую строку или новый массви создавать нельзя
*/
<?php
function evenASCII($str)
{
    for ($i = 0; $i < strlen($str); $i++) {
        var_dump(ord($str[$i]));
        if (ord($str[$i]) % 2 != 0) {
            $str = str_replace($str[$i], '', $str);  
        }
    }
    return $str;
}
?>