/*Сделайте функцию, выводящую на экран сумму чисел от 1 до 100.
*/
<?php
function sumFromOneToHundred() 
{
	$sum = 0;
	for ($i = 1; $i <= 100; $i++ ) {
		$sum += $i;
	}
	return $sum;
}
var_dump(sumFromOneToHundred());
?>