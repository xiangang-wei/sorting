<?php

// 归并排序适用于数据量比较大的，相比于数组的数据结构，基于链表的数据结构更加适合
// 使用归并排序

  function merge(array &$arr, $left, $center, $right){

    $temp_left = array_slice($arr,$left,$center-$left+1);
    $temp_right = array_slice($arr,$center+1,$right-$center);


    $i = 0;
    $j = 0;

    $k = $left;
    while($i<count($temp_left) && $j<count($temp_right)){

      if ($temp_left[$i]<$temp_right[$j]) {
        # code...
        $arr[$k] = $temp_left[$i];
        $i++;
        $k++;
      }else {
        # code...
        $arr[$k] = $temp_right[$j];
        $j++;
        $k++;
      }

    }

    while ($i < count($temp_left)) {
      # code...
      $arr[$k] = $temp_left[$i];
      $i++;
      $k++;
    }

    while ($j < count($temp_right)) {
      # code...
      $arr[$k] = $temp_right[$j];
      $j++;
      $k++;
    }

  }

  function divide(array &$arr,$left,$right){

    if ($left<$right) {
      # code...
      $center = intval(($left+$right)/2);
      divide($arr,$left,$center);
      divide($arr,$center+1,$right);

      merge($arr,$left,$center,$right);

    }


  }


$arr = [25,12,3,56,45,1,2,44];
print_r("before sorting: \n");
print_r($arr);
echo "\n";
divide($arr,0,count($arr)-1);
print_r("after sorting: \n");
print_r($arr);





 ?>
