<?php

#Letters in some of the SOS messages are altered by cosmic radiation during transmission.
# Given the signal received by Earth as a string, , determine how many letters of the SOS message have been changed by radiatio

function marsExploration($s) {
    $sArr = str_split($s);
    $length = count($sArr);
    $result = 0;

    for($i = 0; $i < $length - 2; $i++)
        {
            if($i % 3 == 0)
                {
                    if($s[$i] != "S") $result++;
                    if($s[$i + 1] != "O") $result++;
                    if($s[$i + 2] != "S") $result++;
                }
        }

    return $result;
}

#https://www.hackerrank.com/challenges/mars-exploration/problem?isFullScreen=true
?>