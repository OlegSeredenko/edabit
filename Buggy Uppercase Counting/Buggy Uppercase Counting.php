<?php
function countUppercase($arr) {
    $sum = 0;
    foreach ($arr as $value) {
       for ($x = 0; $x < strlen($value); $x++)
     if(ctype_upper($value[$x])){
           $sum += 1;
       }
    }
    return $sum;
   }
?>
