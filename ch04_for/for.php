<?php
    // 몇 번을 반복할지 정하는 것
    // (초기화 공간;반복문;증감식)
    for($i=0; $i<10; $i++){ //0을 10번 반복 출력하는데 1씩 증가하게
        print $i. "<br>";
    }

    for($i=2; $i<=9; $i++){
        print "${i}단 입니다.";
        for($j=1; $j<=9; $j++){
            print $i. "X" .$j. "=" .($i*$j);
        }
    }

?>