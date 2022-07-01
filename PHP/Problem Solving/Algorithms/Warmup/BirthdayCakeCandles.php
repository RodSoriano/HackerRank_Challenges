<?php

# only select the tallest number

function birthdayCakeCandles($candles)
    {
        $result = 0;
        $max = max($candles);
       
        for($i = 0; $i < count($candles); $i++)
            {
                if($candles[$i] == $max)
                    {
                        $result ++;
                    }
            }
        return $result;
    }

#https://www.hackerrank.com/challenges/birthday-cake-candles/problem?isFullScreen=false
?>