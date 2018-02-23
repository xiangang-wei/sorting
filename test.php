<?php

  $arr = [1,2,3];

  function add(array $arr){

    $arr[0] = 123;

  }

  add($arr);

  var_dump($arr);


 ?>
