<?php

  // 오름차순으로 정렬
  $arr = [10, 33, 12, 8, 1, 89, 11];
  print_r ($arr);
  echo "<br>";

  for($i=count($arr)-1; $i>0; $i--)
  {
    for($z=0; $z<$i; $z++){
      if($arr[$z]>$arr[$z+1])
      {
        $temp = $arr[$z];
        $arr[$z] = $arr[$z+1];
        $arr[$z+1] = $temp;
      }
    }
  }

  echo "<br>";
  print_r ($arr);
?>