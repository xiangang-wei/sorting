<?php

  function shell(array $arr){

    for ($gap=intval(count($arr)/2); $gap > 0 ; $gap=intval($gap/2)) {
      # code...
      for ($i=$gap; $i < count($arr); $i++) {
        # code...
        $temp = $arr[$i];
        $j = $i - $gap;

        while($j>=0 && $arr[$j]>$temp){

          $arr[$j+$gap] = $arr[$j];
          $j-=$gap;

        }

        $arr[$j+$gap] = $temp;
      }

    }
    return $arr;

  }

  $arr = array(7,5,11,34,6,123,45,12,345,2,33,13);
  print_r("before sorting: \n");
  print_r($arr);
  echo "\n";
  print_r("after sorting: \n");
  print_r(shell($arr));




 ?>
