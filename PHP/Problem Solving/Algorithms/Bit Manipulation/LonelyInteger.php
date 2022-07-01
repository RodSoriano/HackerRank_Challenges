<?php

#Given an array of integers, where all elements but one occur twice 
#find the unique element. 

function lonelyinteger($a)
    {
        $len = count($a);
        $i = 0;

        while($i < $len)
            {                
                for($j = $i + 1; $j < $len; $j++)
                    {
                        if($a[$i] == $a[$j])
                            {
                                $a[$i] = 0;
                                $a[$j] = 0;
                            }
                    }

                $i++;
            }

        return array_sum($a);
    }

#https://www.hackerrank.com/challenges/lonely-integer/problem?isFullScreen=true
?>