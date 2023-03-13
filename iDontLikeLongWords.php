/*Дан длинный текст, в нём встречаются слова длиннее 7 символов! 
Если слово длиннее 7 символов, то необходимо: оставить первые 6 символа и добавить звёздочку.
*/
<?php
function iDontLikeLongWords($str)
{
    $str = explode(' ', $str);
    foreach ($str as &$value) {
        if (strlen($value) > 6) {
            $value = substr($value, 0, 6) . '*';
        }
    }
    $str = implode(" ", $str);
    return $str;
}
?>