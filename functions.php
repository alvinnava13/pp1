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