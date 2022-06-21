<?php

#Reduce a string of lowercase characters in range ascii[‘a’..’z’]
#by doing a series of operations. In each operation, 
#select a pair of adjacent letters that match, and delete them. 

//still working on it

function superReducedString($s) 
    {
        $strArray = str_split($s);
        $length = count($strArray);
        $result = "";
        $current = "";

        for($i = 1; $i < $length; $i++)
            {        
                if($strArray[$i] == $strArray[$i - 1])
                    {
                        unset($strArray[$i]);
                        unset($strArray[$i - 1]);
                        $i++;
                    }

                $current = $strArray[$i];
            }
        
        print_r($strArray);
        echo "\n";

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

?>