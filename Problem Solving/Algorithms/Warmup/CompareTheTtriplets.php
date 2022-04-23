<?php

#Compare two arrays on each index position

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

#https://www.hackerrank.com/challenges/compare-the-triplets/problem?isFullScreen=true

?>