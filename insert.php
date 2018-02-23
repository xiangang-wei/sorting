<?php

  function insert(array $arr){

    for ($i=1; $i < count($arr); $i++) {
      # code...
      $temp = $arr[$i];
      $j=$i-1;

      while($j>=0 && $arr[$j]>$temp){

        $arr[$j+1] = $arr[$j];
        $j = $j-1;

      }

      $arr[$j+1] = $temp;
    }
    return $arr;

  }

  $arr = array(7,5,11,34,6,123,45,12,345,2,33,13);
  print_r("before sorting: \n");
  print_r($arr);
  echo "\n";
  print_r("after sorting: \n");
  print_r(insert($arr));


 ?>
