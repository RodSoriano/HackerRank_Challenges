<?php

# giving a 5 position array, find
# max sum using 4 elements of the array
# min sum using 4 elements of the array

function miniMaxSum($arr)
    {
        $min = min($arr);
        $max = max($arr);
        $end = count($arr);
        $resultMin = 0;
        $resultMax = 0;

        if($min != $max)
            {
                for($i = 0; $i < $end; $i++)
                    {

                        if($arr[$i] > $min)
                            {
                                $resultMax += $arr[$i];
                            }

                        if($arr[$i] < $max)
                            {
                                $resultMin += $arr[$i];
                            }
                    }

                echo $resultMin . " " . $resultMax;

            }
         else
            {
                for($i = 1; $i < $end; $i++)
                    {
                        $resultMax += $arr[$i];
                    }
                
                $resultMin = $resultMax;
                echo $resultMin . " " . $resultMax;
            }
    }

#https://www.hackerrank.com/challenges/mini-max-sum/problem?isFullScreen=true
?>
