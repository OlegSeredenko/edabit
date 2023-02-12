/*На вход подается строка, необходимо посчитать количество прилагательных
*/
<?php
function countAdverbs($sentence) {
	$count = 0;
	$sentence = explode(' ', str_replace('.', '', (str_replace(',', '', $sentence))));
	foreach($sentence as $value) {
		if ((substr($value, -2) == 'ly') && (strlen($value) > 2)) {
			$count = $count + 1;
		}
	}
	return $count;
}
?>