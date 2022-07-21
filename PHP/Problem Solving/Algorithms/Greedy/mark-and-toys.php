<?php

/*
    Given a list of numbers you have to sort them, 
    each number is the price of a toy you have to buy as many toys as you can
 */

function maximumToys($prices, $k)
{
    $toys = 0;
    $operation = 0;
    
    sort($prices);

    while($k >= 0)
        {
            $k -= $prices[$toys];
            $toys++;
        }
        
    return $toys -= 1;
}

# https://www.hackerrank.com/challenges/mark-and-toys/problem?isFullScreen=true
?>