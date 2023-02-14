/*На вход подается строка с пин-кодом. Пин-код может состоять из 4 или 6 цифр (тольок цифр), если это не так, то вернуть false
*/
<?php
function validatePIN($pin) {
	$pin = str_split($pin);
	  foreach ($pin as $value) {
		  if (!is_numeric($value)) {
			  return false;
		  }
	  }
	  return (count($pin) == 4 || count($pin) == 6) ? true : false;
  }
?>