<?php

#still working

#Given a time in -hour AM/PM format 
#convert it to military (24-hour) time. 

$s = '01:05:45PM';
$s = explode(':', $s);

$temp = $s[2];
$temp = str_split($temp, 2);

$amOrPm = $temp[1];

    if($amOrPm == 'PM')
        {
            switch($s[0])
                {
                    case 01:
                        $s[0] = 13;
                }
        }

var_dump($s[0]);

function timeConversion($s) 
    {
            
    }

?>