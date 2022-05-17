<?php

#Given an array of N positios you have to find if the elements in the array are > 0, < 0 or zero value 
#then sum one point for each element counted as part of the three groups above
#divide the group number between the total of elements in the array and print the result with 6 decimal positions

function plusMinus($arr)
    {
        $len = count($arr);
        $greatter = 0;
        $zero = 0;
        $smaller = 0;
        
        for ($i = 0; $i < $len; $i++)
            {
                if($arr[$i] > 0)
                    {
                        $greatter++;
                    }
                if($arr[$i] < 0)
                    {
                        $smaller++;
                    }
                if($arr[$i] == 0)
                    {
                        $zero++;
                    }
            }

        $greatter = $greatter / $len;
        $smaller = $smaller / $len;
        $zero = $zero / $len;

        $greatter = number_format($greatter,6);
        $smaller = number_format($smaller,6);
        $zero = number_format($zero,6);

        echo $greatter . "\n";
        echo $smaller . "\n";
        echo $zero;
    }

#https://www.hackerrank.com/challenges/plus-minus/problem?isFullScreen=true
?>