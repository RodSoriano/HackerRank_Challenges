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


$length = count($arr);
$i = 0;
$j = 0;
$hourLoop = 0;
$currentHourglass = 0;
$results = [];
$result = 0;
$done = false;

while(!$done) //recordar cambiar done = true para que salga del ciclo
    {
        
    }













































function hourglassSum($arr)
    {
        $arrLen = count($arr);
        $i = 0;
        $j = 0;
        $loop = 0;
        $currentHourglass = 0;
        $results = [];
        $result = 0;

    }


#testing
// echo hourglassSum($arr). "\n";