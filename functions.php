<?php

function printArr($numbers)
{
    foreach($numbers as $value)
    {
        echo "$value <br>";
    }
}

function largest($numbers)
{
    return max($numbers);
}

function average($numbers)
{
    $count = count($numbers);
    $sum =0;

    foreach($numbers as $num)
    {
        $sum+=$num;
    }
    $average = $sum/$count;
    return $average;
}