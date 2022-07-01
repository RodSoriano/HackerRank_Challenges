<?php

#Consider an array of numeric strings where each string is a positive number
#Sort the array's elements in non-decreasing, or ascending order of their integer values and return the sorted array.


//Im only missing convert the string to big int, still working on it
function bigSorting($unsorted) 
    {
        $length = count($unsorted);

        if($length <= 1) return $unsorted;

        $pivot = $unsorted[$length - 1];
        $left = [];
        $right = [];

        for($i = 0; $i < $length - 1; $i++)
            {
                if($unsorted[$i] < $pivot)
                    {
                        $left[] = $unsorted[$i];
                    }
                else
                    {
                        $right[] = $unsorted[$i];
                    }
            }

        $sortLeft = bigSorting($left);
        $sortRight = bigSorting($right);
        
        $pivot = array($pivot);
        
        $result = array_merge($sortLeft, $pivot, $sortRight);
        
        return $result;
    }


?>