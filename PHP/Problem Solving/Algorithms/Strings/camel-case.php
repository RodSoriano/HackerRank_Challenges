<?php

#There is a sequence of words in CamelCase as a string of letters
#return how many words there are in the sinlge string

function camelcase($s) 
    {
        $length = strlen($s);
        $result = 1;

        for($i = 0; $i < $length; $i++)
            {
                if(ctype_upper($s[$i]))
                    {
                        $result++;
                    }
            }

        return $result;
    }

#https://www.hackerrank.com/challenges/camelcase/problem?isFullScreen=true
?>