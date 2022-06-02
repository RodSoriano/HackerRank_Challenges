<?php

#still working

#There is a collection of input strings and a collection of query strings.
#For each query string, determine how many times it occurs in the list of input strings.
#Return an array of the results. 

$strings = ["aba", "baba", "aba", "xzxb"];
$queries = ["aba", "xzxb", "ab"];

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
    }
#testing
echo matchingStrings($strings, $queries);