<?php
function letters($word1, $word2) {
    $word1 = array_unique(str_split($word1));
    $word2 = array_unique(str_split($word2));
   $share_arr = [];
   $notshare_word1 = [];
   while(count($word1) > 0){
       $element = array_shift($word1);
       if(in_array($element, $word2)){
           $share_arr[] = $element;
           $key = array_search($element, $word2);
           unset($word2[$key]);
       }else{
           $notshare_word1[]=$element;
       }
   }
   sort($share_arr);
   sort($notshare_word1);
   sort($word2);
   $share_arr = implode($share_arr);
   $notshare_word1 = implode($notshare_word1);
   $word2 = implode($word2);
   return array($share_arr, $notshare_word1, $word2 );
}
?>