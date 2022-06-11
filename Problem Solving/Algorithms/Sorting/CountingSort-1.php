<?php

//Given a list of integers, count and return the number of times 
//each value appears as an array of integers.

function countingSort($arr) 
    {
        $arrLength  = count($arr);
        $result     = array_fill(0, 100, 0);
        $current    = 0;

        for($i = 0; $i < $arrLength; $i++)
            {
                $current = $arr[$i];
                $result[$current] += 1;
            }

            return $result;
    }

#https://www.hackerrank.com/challenges/countingsort1/problem?isFullScreen=true
?>