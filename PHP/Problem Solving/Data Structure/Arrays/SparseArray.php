<?php

#There is a collection of input strings and a collection of query strings.
#For each query string, determine how many times it occurs in the list of input strings.
#Return an array of the results. 

function matchingStrings($strings, $queries)
    {
        $lenStrings = count($strings);
        $lenQueries = count($queries);
        $i = 0;
        $result = [];

        while($i < $lenQueries)
            {
                $result[$i] = 0;

                for($j = 0; $j < $lenStrings; $j++)
                    {
                        if($queries[$i] == $strings[$j])
                            {
                                $result[$i]++;
                            }
                    }
                $i++;
            }

        return $result;
    }

#https://www.hackerrank.com/challenges/sparse-arrays/problem?isFullScreen=true
?>