/*Дана строка. Проверьте, что она начинается 
на'http://'или на'https://'. Еслиэто так, выведите 'да', если не так –'нет'
*/
<?php
function check_http($str)
{
    $flag = false;
    if (substr($str, 0, 7) == 'http://') {
        $flag = true;
    } elseif (substr($str, 0, 8) == 'https://') {
        $flag = true;
    }
    return $flag;
}
?>