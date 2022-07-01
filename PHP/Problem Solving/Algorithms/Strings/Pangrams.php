<?php

#It should return the string pangram if the input string is a pangram. Otherwise, it should return not pangram. 

function pangrams($s)
    {
        $s      = strtolower($s);
        $s      = str_split($s);
        $sLen   = count($s);

        $alphabet       = range('a','z');
        $alphabetLen    = count($alphabet);

        $result     = true;
        $current    = [];
        $i          = 0;

        while($i < $alphabetLen)
            {
                $current[$i] = 0;

                for($j = 0; $j < $sLen; $j++)
                    {
                        if($alphabet[$i] == $s[$j])
                            {
                                $current[$i] += 1;
                            }
                    }
                
                $i++;
            }

        $i = 0;

        for($i; $i < $alphabetLen; $i++)
            {
                if($current[$i] == 0)
                    {
                        $result = false;
                    }
            }

        if(!$result)
            {
                return "not pangram";
            }
        else
            {
                return "pangram";
            }
    }

#https://www.hackerrank.com/challenges/pangrams/problem?h_r=internal-search
?>