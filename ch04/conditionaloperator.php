<?php

    $num = 10;
    // ? : 삼항연산자 - 참 : 거짓 - if else문을 간단하게 줄인 것
    print "${num}는(은)" . ($num%2 === 0 ? "짝" : "홀") . "수입니다.";
    //$num은 2로 나눈 나머지가 0일 때 true면 짝 false면 홀을 출력한다.
?>