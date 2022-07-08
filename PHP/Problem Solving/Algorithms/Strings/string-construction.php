<?php

#copy each leter of a string to a new variable
#just take the original value of each character of the string if a letter repeats
#itself after wards just ignore it because you have one of those already
#return how many original characters do you have on your new string

function stringConstruction($s)
{
    $len = strlen($s);
    $b = [];

    for($i = 0; $i < $len; $i++)
        {
            $is_in = array_search($s[$i], $b, true);
            
            if(!is_int($is_in))
                {
                    $b[] = $s[$i];
                }
        }

    $result = count($b);

    return $result;
}

#https://www.hackerrank.com/challenges/string-construction/problem?isFullScreen=true
?>