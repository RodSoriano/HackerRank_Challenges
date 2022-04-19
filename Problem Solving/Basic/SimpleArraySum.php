<?php

#Find the sum of all the elements in the array

function simpleArraySum($ar) 
    {
        $suma = 0;
        
        for($i = 0; $i < count($ar); $i++)
            {
                echo $ar[$i];
                $suma += $ar[$i];
            }
        
        return $suma;
    }

#https://www.hackerrank.com/challenges/simple-array-sum/problem?isFullScreen=true

?>