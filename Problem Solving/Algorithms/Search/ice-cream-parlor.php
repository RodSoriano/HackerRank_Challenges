<?php

#Given a list of prices for the flavors of ice cream
# select the two that will cost all of the money they have. 
#m = money | arr = [array of flavors]

function icecreamParlor($m, $arr)
    {
        $length = count($arr);

        for($i = 0; $i < $length; $i++)
            {
                for($j = $i + 1; $j < $length; $j++)
                    {
                        $operation = $arr[$i] + $arr[$j];
                        
                        if($operation == $m)
                            {
                                $result[] = $i +1;
                                $result[] = $j + 1;
                                
                                return $result;
                            }
                    }
            }
    }

#https://www.hackerrank.com/challenges/icecream-parlor/problem?isFullScreen=true
?>