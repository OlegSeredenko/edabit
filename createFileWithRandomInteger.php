/*записать файл, где именем файла будет ьекущее время, а содержимым - рандомное чилсо от нуля до максимально возможного целлого числа
*/
<?php
function addFile() {
    $maxi = PHP_INT_MAX;
    $random = mt_rand(0, $maxi);
    $name = date("Y-m-d-G-i-s") . '.txt';
    file_put_contents($name, $random);
}

    