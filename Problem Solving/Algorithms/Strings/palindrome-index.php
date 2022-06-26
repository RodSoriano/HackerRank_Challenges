<?php

#Given a string of lowercase letters in the range ascii[a-z]
#determine the index of a character that can be removed to make the string a palindrome
#If the word is already a palindrome or there is no solution, return -1. Otherwise, return the index of a character to remove. 


# unfinished

$s = "aaab";

$sArr = str_split($s);
$length = count($sArr);
$middle = floor($length / 2);
$arrCompare = [];


// if($length % 2 == 0) //es par
//     {
//         $arrCompare[] = array_chunk($sArr,$middle);

//         print_r($arrCompare);
//     }

for($i = 0, $j = $length - 1; $i < $length, $j >= 0; $i++, $j--)
    {
        if($sArr[$i] != $sArr[$j])
            {
                
            }
    }



function palindromeIndex($s) {
    // Write your code here
}

#https://www.hackerrank.com/challenges/palindrome-index/problem?isFullScreen=true
?>