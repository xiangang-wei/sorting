<?php

  function bubble(array $arr){

    if (empty($arr)) {
      # code...
      die("The array can not empty!");
    }

    if (count($arr)<=1) {
      # code...
      return $arr;
    }

    for($i=0;$i<count($arr);$i++){

      for ($j=0; $j < count($arr)-1 ; $j++) {
        # code...
        if ($arr[$j]>$arr[$j+1]) {
          # code...
          $temp = $arr[$j+1];
          $arr[$j+1] = $arr[$j];
          $arr[$j] = $temp;
        }

      }

    }

    return $arr;

  }

  $arr = array(1,5,11,34,0,123,45,12,345,2,33,13);
  print_r("before sorting: \n");
  print_r($arr);
  echo "\n";
  print_r("after sorting: \n");
  print_r(bubble($arr));






 ?>
