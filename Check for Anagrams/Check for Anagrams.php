<?php
function isAnagram($s1, $s2) {
    $s1 = strtolower($s1);
    $s2 = strtolower($s2);
    $s1 = str_split(str_replace(' ', '', $s1));
    $s2 = str_split(str_replace(' ', '', $s2));
    sort($s1);
    sort($s2);
    return ($s1 == $s2) ? true : false;
  }
?>