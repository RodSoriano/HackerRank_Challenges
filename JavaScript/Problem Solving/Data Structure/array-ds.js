// Reverse an array

function reverseArray(a) {
    let b = [];
    let length = a.length;
    
    for(let i = length - 1; i >= 0; i--)
        {
            b.push(a[i]);
        }

    return b;
}

//https://www.hackerrank.com/challenges/arrays-ds/problem?isFullScreen=true