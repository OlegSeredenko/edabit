<?php
function solution(string $s): int {
  $s = str_split($s);
  $maxi = 0;
  for ($i = 0; $i < (count($s)-4); $i++) {
    if (implode((array_slice($s, $i, 5))) > $maxi) {
      $maxi = implode((array_slice($s, $i, 5)));
    }
  }
  return $maxi;
}
