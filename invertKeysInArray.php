/*скрипт, получить массив из ключей ассоциативного массива
*/
<?php

$arr = ['fi' => 1, 'se' => 2, 'th' => 3, 'fo' => 4, 'fa' => 5];
function invertKeys($arr) {
    $newArr = [];
    foreach ($arr as $key => $value) {
        $newArr[] = $key;
    }
    return $newArr;
}
var_dump(invertKeys($arr));
    