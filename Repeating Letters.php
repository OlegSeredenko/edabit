/*На вход подаётся строка, необходимо сделать дублирование каждого символа, например для строки "String" вернуть "SSttrriinngg"
*/
<?php
function doubleChar($str) {
	$new_str = '';
	  for($i = 0; $i < strlen($str); $i++) {
		  $new_str .= $str[$i];
		  $new_str .= $str[$i];
	  }
	  return $new_str;
  }
?>