<?php

# Grades  are an array of int that can be between [0 - 100]
# grade < 40 means that it failed the test
# if grade difference next multiple of 5 < 3 = round up to the actual grade to the next multiple of 5

function gradingStudents($grades)
{
    $len = count($grades);

    for($i = 0; $i < $len; $i++)
        {
            if($grades[$i] < 38) continue;
            
            $grades[$i] += 1;
            
            if($grades[$i] % 5 == 0) continue;
            
            $grades[$i] += 1;
            
            if($grades[$i] % 5 != 0) $grades[$i] -= 2;
        }    

    return $grades;
}

# https://www.hackerrank.com/challenges/grading/problem?isFullScreen=true
?>