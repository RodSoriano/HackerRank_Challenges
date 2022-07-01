// Return the sum of all the elements of the array, some of them are Long Integers

function aVeryBigSum(ar) 
{
    let result = 0;
    let length = ar.length;
    
    for(let i = 0; i < length; i++)
        {
            result += ar[i];
        }
    
    return result;
}

//https://www.hackerrank.com/challenges/a-very-big-sum/problem?isFullScreen=true