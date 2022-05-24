<?php

#Given a square matrix, calculate the absolute difference between the sums of its diagonals.

function diagonalDifference($arr)
    {
        $len    = count($arr);
        $sumR   = 0;
        $sumL   = 0;
        $result = 0;

        for($i = 0, $j = $len -1; $i < $len, $j >= 0; $i++, $j--)
            {
                $sumR = $sumR + $arr[$i][$j];
            }

        for($i =0, $j = 0; $i < $len, $j < $len; $i++, $j++)
            {
                $sumL = $sumL + $arr[$i][$j];
            }

        $result = $sumL - $sumR;

        if($result < 0)
            {
                $result = $result * -1;
                return $result;
            }
        else
            {
                return $result;
            }
    }

#https://www.hackerrank.com/challenges/diagonal-difference/problem?isFullScreen=true
?>