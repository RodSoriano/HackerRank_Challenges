--MySQL

SELECT CONCAT(ROUND(SUM(LAT_N),2),SPACE(1),ROUND(SUM(LONG_W),2))
FROM STATION;

--https://www.hackerrank.com/challenges/weather-observation-station-2/problem?isFullScreen=true