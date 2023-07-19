<?php
    $count=0;
for( $i = 0; $i <100;$i++){

    for( $j = 1; $j <=$i ;$j++){
        if($i % $j==0){
            $count=$count+1;
        }
    }

    if( $count== 2){
        echo $i . "<br>";
       
    }
    $count=0;
}

  ?>