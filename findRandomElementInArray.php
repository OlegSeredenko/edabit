/*скрипт, где пбудет получен случайный элемент массива
*/
<?php

$arr = ['fi', 'se', 'th', 'fo', 'fi'];
function randomElement($arr) {
    $random = mt_rand(0, count($arr)-1);
    echo $arr[$random];
}
randomElement($arr);
    