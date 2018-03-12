<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2018/3/12
 * Time: 上午10:56
 * @param array $arr
 * @param $low
 * @param $high
 * @internal param array $array
 * @return mixed
 */
function partition(array &$arr,$low,$high){

    $pivot = $arr[$high];
    $i = $low -1;

    for ($j=$low;$j<$high;$j++){

        if ($arr[$j] <= $pivot){

            $i++;
            $temp = $arr[$j];
            $arr[$j] = $arr[$i];
            $arr[$i] = $temp;
        }
    }
    $temp = $arr[$i+1];
    $arr[$i+1] = $pivot;
    $arr[$high] = $temp;

    return $i+1;
}

function quick(array &$arr,$low,$high){

    if ($low < $high){

        $pi = partition($arr,$low,$high);
        quick($arr,$low,$pi-1);
        quick($arr,$pi+1,$high);

    }
}

$arr = [12,90,11,3,5,2,7,15,32,30];
echo "before quick sorting："."\n";
print_r($arr);
echo "\n";
quick($arr,0,9);
echo "after quick sorting："."\n";
print_r($arr);
echo "\n";
