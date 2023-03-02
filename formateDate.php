/*В переменной $x лежит дата в формате'2016-12-31'. Преобразуйте этудату в формат'31.12.2016'
*/
<?php
function formateDate($x)
{
    $date = date_create($x);
    return date_format($date, 'd.m.Y');
}
?>