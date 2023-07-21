<?php
  $a = [9,8,6,4,7];
  $b = [1,2,3,5];
  $c = [];

 $c = $a;
    foreach($a as $key=>$value){
        $c[] = $value;
    }
    echo '<pre>';
   print_r($c);
     echo '</pre>';

?>