<?php

#Reduce a string of lowercase characters in range ascii[‘a’..’z’]
#by doing a series of operations. In each operation, 
#select a pair of adjacent letters that match, and delete them. 

function superReducedString($s) 
    {
        $strArray = str_split($s);
        $length = count($strArray);
        $result = "";

        for($i = 1; $i < $length; $i++)
            {
                if(isset($strArray[$i]))
                    {
                        if($strArray[$i] == $strArray[$i - 1])
                            {
                                array_splice($strArray, $i, 1);
                                array_splice($strArray, $i - 1, 1);
                                $i = 0;
                            }
                    }
            }

        if(!$strArray)
            {
                return "Empty String";
            }
        else
            {
                $result = implode("", $strArray);
                return $result;
            }
    }

#https://www.hackerrank.com/challenges/reduced-string/problem?isFullScreen=true
?>