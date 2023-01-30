/*На вход подается строка. Необходимо проверить: 1). Все ли смволы в строке цифры 2). Длина строки равна пяти
*/
<?php
function isValid($zip) {
	return ((strlen($zip) == 5) && (ctype_digit($zip))) ? true : false;
}
?>