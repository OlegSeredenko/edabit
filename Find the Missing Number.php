/*На вход подаётся массив с числами от 1 до 10. Необходимо найти пропущенное число. Например в массиве [1, 2, 3, 4, 6, 7, 8, 9, 10] пропущено число 5.
*/
<?php
function missingNum($arr) {
    if (min($arr) != 1) {
          return 1;
      } elseif (max($arr) != 10) {
          return 10;
      } else {
          sort($arr);
          for ($i = 0; $i < 10; $i++) {
              if(($arr[$i]+1) != $arr[$i+1]) {
                  return $arr[$i]+1;
              }
          }
      }
  }
?>