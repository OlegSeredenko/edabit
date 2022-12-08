function scaleTip($arr) {
  $x = array_search('I',$arr);
  $y = (int)(count($arr) / 2);
  $left_arr = array_sum(array_slice($arr, 0, $y));
  $right_arr = array_sum(array_slice($arr, ($y+1)));
  return ($left_arr === $right_arr) ? "balanced" : (($left_arr > $right_arr) ? "left": "right");				 
}