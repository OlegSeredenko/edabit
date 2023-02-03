/*На вход подаётся строка и символ. Необходимо в массив вывести значения первого и последнего вхождений символа в строку
*/ 
<?php
function charIndex($word, $char) {
    $x1 = strpos($word, $char);
    $x2 = strrpos($word, $char);
    $new_arr = [$x1, $x2];
    return (($x1 !== false) && ($x2 !== false)) ? $new_arr : null;
  }
?>