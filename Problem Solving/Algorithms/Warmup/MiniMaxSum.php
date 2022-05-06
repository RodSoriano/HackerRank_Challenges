<?php
# not finished yet

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

        for($i = 0; $i < $end; $i++)
            {
                #ciclo para encontrar la suma maxima
                if($arr[$i] > $min)
                    {
                        $resultMax += $arr[$i];
                    }
                #ciclo para encontrar la suma minima
                if($arr[$i] < $max)
                    {
                        $resultMin += $arr[$i];
                    }
            }

        echo $resultMin . " " . $resultMax;
    }

#testing 
$arr = [1,2,3,4,5];
#min = 6
#max = 14

#echo miniMaxSum($arr);
?>
