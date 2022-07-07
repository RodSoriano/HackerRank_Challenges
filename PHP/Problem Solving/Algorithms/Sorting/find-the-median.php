<?php

#The median of a list of numbers is essentially its middle element after sorting.

function findMedian($arr) {
    $length = count($arr);
    sort($arr);
    $result = floor($length/2);

    return $arr[$result];
}

#https://www.hackerrank.com/challenges/find-the-median/problem?isFullScreen=true
?>