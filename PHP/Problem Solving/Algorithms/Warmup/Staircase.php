<?php

#make a staircase of # starting from 1 until reaching n

function staircase($n)
    {
        $stair = '#';
        
        for ($i = 1,$j = $n; $i <= $n, $j >= 1; $i++, $j--)
            {
                echo str_repeat(" ", $j - 1);
                echo str_repeat($stair, $i) . "\n";
            }
    }

#https://www.hackerrank.com/challenges/staircase/problem?isFullScreen=true
?>
