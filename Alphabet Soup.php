/*На вход подаётся строка, необходимо отсортировать символы по алфавиту
Например для строки "hello" функция венрнёт "ehllo"
*/ 
<?php
function AlphabetSoup($str) {
    $str = str_split($str);
      sort($str);
      $str = implode('', $str);
      return $str;
  }
?>