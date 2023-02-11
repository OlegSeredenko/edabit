/*На вход подается строка email, необходимо сделать простую проверку на корректность email
*/
<?php
function validateEmail($str) {
    $pos_dog = strpos($str,'@');
      if ($pos_dog == false) {
          return false;
      } elseif (strlen(substr($str, 0, $pos_dog)) < 1) {
          return false;
      } elseif ((strpos(substr($str, $pos_dog+1), '.') == '')) {
          return false;
      } elseif (substr_count($str, '@') > 1 ) {
          return false;
      }
      return true;
  }
  
?>