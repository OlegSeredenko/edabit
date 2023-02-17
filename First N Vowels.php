/*На вход подается строка, необходимо оставить только первые n-цифр, например для строки "sharpening skills" и числа 3 функция вернёт  "aei"
*/
<?php
function firstNVowels($s, $n) {
	$arr = ['a', 'e', 'i', 'o', 'u'];
	$s = str_split(str_replace(' ', '',$s));
	$new_str = '';
	$count = 0;
	foreach ($s as $value) {
		if (in_array($value, $arr)) {
			$new_str = $new_str. $value;
			unset($s[array_search($value,$s)]);
			$count = $count + 1;
		}
		if ($count == $n) {
		    break;
		}
	}
	return (strlen($new_str) < $n) ? "invalid" : $new_str;
}
?>