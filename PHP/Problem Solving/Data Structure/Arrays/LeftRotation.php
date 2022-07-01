<?php

#Rotate a number to the left n times 
#d = n times of movement

function rotateLeft($d , $arr)
    {
        for ($i = 0; $i < $d; $i++)
            {
                $arr[] = $arr[$i];
                unset($arr[$i]);
            }
        return $arr;
    }

#https://www.hackerrank.com/challenges/array-left-rotation/problem?isFullScreen=true
?>