<?php

#Reverse an array

function reverseArray($a)
    {
        $b = [];
        for($i = count($a)- 1; $i >= 0; $i--)
            {
                $b[] = $a[$i];
            }
        
            return $b;
    }

#https://www.hackerrank.com/challenges/arrays-ds/problem?isFullScreen=true

?>