<?php

// buat fanction celcius to  fahrenthite
//rumus (nilai celcius *9/5) +32 
// parameter function int celcius
// invoke function celcius to fahrenheit(12); //print 53,5

function celciusToFahrenheit($celcius)
{
    $convertion=($celcius*9/5)+32;

    echo "$celcius celcius = $convertion fahrenheit";
}

// celciusToFahrenheit(80);
