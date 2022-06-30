<?php

#The median of a list of numbers is essentially its middle element after sorting.

#excecution time error, too slow 
#seems like bubble sorting is to slow for hacker ranks tests, 
#still working on it

function findMedian($arr) {
    $length = count($arr);
    $swapped = false;
    $temp = 0;
    $result = 0;

    do
        {
            $swapped = false;
            
            for($i = 0;$i < $length - 1; $i++)
                {
                    if($arr[$i] > $arr[$i + 1])
                        {
                            $temp = $arr[$i];
                            $arr[$i] = $arr[$i + 1];
                            $arr[$i + 1] = $temp;
                            $swapped = true;
                        }   
                }
        }
    while($swapped);

    $result = floor($length/2);

    return $arr[$result];
}

#https://www.hackerrank.com/challenges/find-the-median/problem?isFullScreen=true
?>