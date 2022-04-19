<?php

function compareTheTriplets($a , $b)
    {
        $result = [0,0];

        for($i = 0; $i <= count($a)-1; $i++)
            {
                if($a[$i] > $b[$i])
                    {
                        $result[0] += 1;
                    }
                if ($a[$i] < $b[$i])
                    {
                        $result[1] += 1;
                    }
            }

        return $result;
    }

#testing

$a = [1,2,3,4];
$b = [4,3,2,1];

var_dump(compareTheTriplets($a,$b));

#https://www.hackerrank.com/challenges/compare-the-triplets/problem?isFullScreen=true