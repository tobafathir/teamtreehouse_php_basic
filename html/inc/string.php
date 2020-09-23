<?php

// buat fanction askName
// parameternya $nama
// askName("Ahmad Dani"); // namamu Dalah Ahmad Dhani

function askName($name)
{
    $format_name=ucwords(strtolower($name));
    echo "Namamu Adalah  $format_name ! ";

}

askName("Ahmad Dhani Preasetyo");

echo 'hello\'';