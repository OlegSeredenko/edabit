/*На вход подается строка, если символ строки имеет четный код  ASCII , то букву следует перевести в верхний регистр, иначе в нижний. Например  для
строки "to be or not to be!" функция вернёт "To Be oR NoT To Be!"
*/
<?php
function asciiCapitalize($s) {
	$new_s = '';
	for($i = 0; $i < strlen($s); $i++) {
		if ($s[$i] == ' ') {
			$new_s = $new_s . ' ';
		} elseif (ord($s[$i]) % 2 == 0) {
			$x = strtoupper($s[$i]);
			$new_s = $new_s . $x;
		} else {
			$x = strtolower($s[$i]);
			$new_s = $new_s . $x;
		}
	}
	return $new_s;
}
?>