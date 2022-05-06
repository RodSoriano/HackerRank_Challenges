<?php

#Rotate a number to the left n times

function rotateLeft($d , $arr)
    {
        $b = [];
        for ($i = 0; $i < $d; $i++)
            {
                $arr[] = $arr[$i];
                unset($arr[$i]);
            }
        return $arr;
    }

#https://www.hackerrank.com/challenges/array-left-rotation/problem?isFullScreen=true
?>