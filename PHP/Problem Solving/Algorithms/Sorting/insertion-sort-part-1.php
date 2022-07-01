<?php

#Given a sorted list with an unsorted number in the rightmost cell
# write some simple code to insert into the array so that it remains sorted? 

function insertionSort1($n, $arr) 
{
    $unsortedNum = $arr[$n - 1];
    $temporary = 0;
    $result = "";

    for($i = $n - 1; $i >= 0; $i--)
        {
            $result = "";
            $temporary = $arr[$i]; //5
            
            if($unsortedNum < $arr[$i]) //3 < 5
                {
                    $arr[$i + 1] = $temporary;
                    $result = implode(" ", $arr);
                    echo $result;
                    echo "\n";

                    if(!isset($arr[$i - 1])) 
                    {
                        $arr[$i] = $unsortedNum;
                        $result = implode(" ", $arr);
                        echo $result;
                        echo "\n";
                    }

                }
            else if ($unsortedNum > $temporary)
                {
                    $arr[$i + 1] = $unsortedNum;
                    $result = implode(" ", $arr);
                    echo $result;
                    echo "\n";

                    break;
                }
        }
}

#https://www.hackerrank.com/challenges/insertionsort1/problem?isFullScreen=true
?>