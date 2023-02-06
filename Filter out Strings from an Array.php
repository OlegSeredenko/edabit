/*На вход подаётся массив c числами, необходимо оставить только целые числа
Например для массива [1, 2, "aasf", "1", "123", 123] функция венрнёт [1, 2, 123]
*/ 
<?php
function filterArray($arr) {
    $new_arr = [];
      foreach ($arr as $value) {
          if (is_int($value)) {
              $new_arr[] = $value;
          }
      }
      return $new_arr;
  }
?>