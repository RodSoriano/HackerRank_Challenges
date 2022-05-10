<?php

#still working

#given a 6x6 array
#find the hourglasses patterns an sum the elements withing each hour glass so you have the sum of each hourglass
#print the max number of all the sums

$arr[0][0] = 1; $arr[0][1] = 1; $arr[0][2] = 1; $arr[0][3] = 0; $arr[0][4] = 0; $arr[0][5] = 0;
$arr[1][0] = 0; $arr[1][1] = 1; $arr[1][2] = 0; $arr[1][3] = 0; $arr[1][4] = 0; $arr[1][5] = 0;
$arr[2][0] = 1; $arr[2][1] = 1; $arr[2][2] = 1; $arr[2][3] = 0; $arr[2][4] = 0; $arr[2][5] = 0;
$arr[3][0] = 0; $arr[3][1] = 0; $arr[3][2] = 2; $arr[3][3] = 4; $arr[3][4] = 4; $arr[3][5] = 0;
$arr[4][0] = 0; $arr[4][1] = 0; $arr[4][2] = 0; $arr[4][3] = 2; $arr[4][4] = 0; $arr[4][5] = 0;
$arr[5][0] = 0; $arr[5][1] = 0; $arr[5][2] = 1; $arr[5][3] = 2; $arr[5][4] = 4; $arr[5][5] = 0;

function hourglassSum($arr)
    {
        $arrLen     =   count($arr);
        $hourGlass  =   [];
        $all        =   "";
        $hourG1     =   [];
        $hourG2     =   [];

        for ($i = 0; $i < $arrLen; $i++)
            {
                for($j = 0;$j < $arrLen; $j++)
                    {
                        if($arr[$i][$j] > 0)
                            {
                                $hourGlass[] = $arr[$i][$j];
                            }
                    }
            }

    #one option
        // $all    = implode( "" , $hourGlass);
        // $hourG1 = substr($all, 0, 6);
        // $hourG2 = substr($all, 7, 13);

        // $hourG1 = str_split($hourG1);
        // $hourG2 = str_split($hourG2);

        // $hourG1 = array_sum($hourG1);
        // $hourG2 = array_sum($hourG2);

        // if($hourG1 > $hourG2)
        //     {
        //         return $hourG1;
        //     }
        // else
        //     {
        //         return $hourG2;
        //     }
    }


#testing
// echo hourglassSum($arr). "\n";