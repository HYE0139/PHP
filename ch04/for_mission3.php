<?php
    //for 문을 활용하여 1~100을 모두 더한 값을 구하시오.

    $sum = 0;
    for($i=1; $i<=100; $i++){
        //$sum = $sum+$i;
        $sum+=$i;
        /*
            $sum += $i : sum에 i를 더한 값이 다시 sum 에 저장이 된다.
            이를 반복하면 i가 1씩 증감하며 아래와 같은 식이 된다.
             sum = 0+1 > sum = 1+2 > sum = 3+4
        */ 
    }

    echo $sum;

?>