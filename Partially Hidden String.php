/*На вход подаётся строка со словами, необходимо оcтавить только первый и последний символ в каждой строке, а буквы в промежутке заменить на '-'
Например для строки "red is not my color" функция вернёт "r-d is n-t my c---r"
*/ 
<?php
function partiallyHide($phrase) {
	$phrase = explode(" ", $phrase);
	$new_arr = [];
	foreach ($phrase as $value) {
		if (strlen($value) <= 2) {
			$new_arr[] = $value;
		} else {
			$x = $value[0];
			for ($i = 1; $i < (strlen($value)-1); $i++) {
				$x = $x . "-";
			}
			$y = substr($value, -1);
			$x = $x . $y;
			$new_arr[] = $x;
		}
	}
	$new_arr = implode(" ", $new_arr);
	return $new_arr;
}
?>