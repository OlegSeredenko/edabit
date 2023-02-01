/*На вход подаётся строка. Необходимо выяснить, есть ли в строке два одинаковых символа, идущих подряд. Например для строки "loop" функция вернёт true, так как две буквы "о" подряд 
*/
<?php
function doubleLetters($word) {
	$word = str_split($word);
	for ($i = 1; $i < count($word); $i++) {
		var_dump($word[$i]);
		if ($word[$i-1] === $word[$i]) {
			return true;    
		}
	}
	return false;
}
?>