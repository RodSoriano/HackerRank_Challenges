<?php

#Return the sum of all the elements of the array, some of them are Long Integers

function aVeryBigSum($ar)
    {
        $sum = 0;
        
        for($i = 0; $i < count($ar); $i++)
            {
                $sum += $ar[$i];
            }
        
        return $sum;
    }

#https://www.hackerrank.com/challenges/a-very-big-sum/problem?isFullScreen=true

?>