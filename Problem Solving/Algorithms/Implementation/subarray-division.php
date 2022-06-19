<?php

//Two children, Lily and Ron, want to share a chocolate bar. Each of the squares has an integer on it.
//Lily decides to share a contiguous segment of the bar selected such that:
//The length of the segment matches Ron's birth month, and,
//The sum of the integers on the squares is equal to his birth day.

//Determine how many ways she can divide the chocolate.

function birthday($s, $d, $m) 
    {
        $len = count($s);
        $result = 0;

        if($len == 1)
            {
                $result++;
                return $result;
            }
        else
            {
                for($i = 0; $i <= $len - $m; $i++)
                    {
                        $j = $i;
                        $loop = 0;
                        $current = 0;
                        
                        while($loop < $m)
                            {
                                $current += $s[$j];
                                $j++;
                                $loop++;
                            }

                        if($current == $d)
                            {
                                $result++;
                            }
                    }
            }

        return $result;
    }

#https://www.hackerrank.com/challenges/the-birthday-bar/problem?isFullScreen=true
?>