<?php
// xap sep noi bot  bubbleSort
 $mang = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
 
 for ($i = 0; $i < count($mang)-1; $i++)
 {
     for ($j = $i + 1; $j < count($mang)  ; $j++) 
     {
         if ($mang[$i] > $mang[$j]) 
         {
             $trung_gian = $mang[$j];
             $mang[$j] = $mang[$i];
             $mang[$i] = $trung_gian;
         }
     }
    
 }
 echo '<pre>';
 print_r($mang);
 echo '</pre>'
?>
