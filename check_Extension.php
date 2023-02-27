/*Дана строка. Проверьте, что она заканчивается на: 'jpg', 'png', 'gif', 'JPG', 'PNG', 'GIF'. Если это так, выведите
'да', если не так –'нет'.
*/
<?php
function check_Extension($str)
{
    $allowedExtensions = ['jpg', 'png', 'gif', 'JPG', 'PNG', 'GIF'];
    if (in_array((substr($str, -3)),$allowedExtensions)) {
        return 'да';
    }
    return 'нет';
}
?>