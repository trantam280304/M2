<?php
      $array =[3,5,7,9,10,1];

    for ($i = 0; $i < count($array); $i++) {
        $val = $array[$i];
        // biến trung gian
        $j = $i - 1;
        // j hiện tại = 3
        while ($j >= 0 && $array[$j] > $val) {
         // khi j >= 0 và  // thì ở đây 3 sẽ không lớn hơn 5 nên k thão mãn điều kiện 
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $val;
        
    }
   echo "<pre>";
   print_r($array);
   echo "</pre>"


?>
