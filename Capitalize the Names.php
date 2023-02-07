/*На вход подаётся массив cо строками, необходимо перевести все слова в нижний регистр с заглавной первой буквой
Например для массива ["samuel", "MABELLE", "letitia", "meridith"] функция венрнёт ["Samuel", "Mabelle", "Letitia", "Meridith"]
*/ 
<?php
function capMe($arr) {
    foreach ($arr as &$value) {
          $value = ucfirst(strtolower($value));
      }
      return $arr;
  }
?>