<?php
function countAll($str) {
	$count_letters = 0;
	  $count_digits = 0;
	  $str = str_split($str);
	  foreach($str as $value){
		  if(is_numeric($value)){
			  $count_digits += 1;
		  }elseif(ctype_alpha($value)){
			  $count_letters += 1;
		  }
	  }
	  $result = [];
	  $result["LETTERS"] = $count_letters;
	  $result["DIGITS"] = $count_digits;
	  return $result;
  }
?>