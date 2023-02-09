/*На вход подаётся число, выяснить, является ли число палиндроном, если его перевести в строку
<?php
function isPalindrome($n) {
	$n = (string)$n;
	  $n_f = substr($n, 0, (ceil(strlen($n)) / 2));
	  $n_s = strrev(substr($n, -(strlen($n_f))));
	  return ($n_f == $n_s) ? true : false;
  }
?>