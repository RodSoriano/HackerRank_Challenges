<?php

#Choose some pivot element, and partition your unsorted array, 
#into three smaller arrays let, pivot, right

function quickSort($arr) {
    $length = count($arr);
     $pivot[] = $arr[0];
     $left = [];
     $right = [];
 
     for($i = 1; $i < $length; $i++)
         {
             if($arr[$i] < $pivot[0])
                 {
                     $left[] = $arr[$i];
                 }
             else if($arr[$i] == $pivot[0])
                 {
                     $pivot[] = $arr[$i];
                 }
             else
                 {
                     $right[] = $arr[$i];
                 }
         }
 
     $result = array_merge($left, $pivot, $right);
 
     return $result;
}

#https://www.hackerrank.com/challenges/quicksort1/problem?isFullScreen=true
?>