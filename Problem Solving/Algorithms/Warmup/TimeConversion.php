<?php

#Given a time in-hour AM/PM format 
#convert it to military (24-hour) time. 

function timeConversion($s) 
    {
        $s      = explode(':', $s);

        $temp   = $s[2];
        $temp   = str_split($temp, 2);

        $amOrPm = $temp[1];

        $hours      = "";
        $minutes    = strval($s[1]);
        $seconds  = strval($temp[0]);

        if($amOrPm == 'PM')
            {
                switch($s[0])
                    {
                        case 01:
                            $s[0] = 13;
                        break;

                        case 02:
                            $s[0] = 14;
                        break;

                        case 03:
                            $s[0] = 15;
                        break;

                        case 04:
                            $s[0] = 16;
                        break;

                        case 05:
                            $s[0] = 17;
                        break;

                        case 06:
                            $s[0] = 18;
                        break;

                        case 07:
                            $s[0] = 19;
                        break;

                        case 8:
                            $s[0] = 20;
                        break;

                        case 9:
                            $s[0] = 21;
                        break;

                        case 10:
                            $s[0] = 22;
                        break;

                        case 11:
                            $s[0] = 23;
                        break;

                        case 12:
                            $s[0] = 12;
                        break;
                    }
                $hours = strval($s[0]);

                return $hours . ":" . $minutes . ":" . $seconds;
            }
        elseif($s[0] == 12)
            {
                $s[0] = 00;
                $hours = strval($s[0]);

                return "0" . $hours . ":" . $minutes . ":" . $seconds;
            }
        else
            {
                $hours = strval($s[0]);

                return $hours . ":" . $minutes . ":" . $seconds;
            }
    }

#https://www.hackerrank.com/challenges/time-conversion/problem?isFullScreen=true
?>