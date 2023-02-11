/*На вход подается строка, выяснить нет ли повторяющихся символов в строке. Например для строки "Algorism" функция вернёт true, а для строки "PasSword" функция вернёт false, так как 
дважды написан символ 'S'
*/
<?php
function isIsogram($str) 
{
	$str = str_split(strtolower($str));
	sort($str);
	for($i = 1; $i < count($str); $i++) {
		if ($str[$i-1] == $str[$i]) {
			return false;
		}
	}
	return true;
}
?>