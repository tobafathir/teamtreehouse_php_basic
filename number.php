<?php

$number=1;  //integer

$float=3.3;  //float

$int_float=(int)$float;  // integer

$str_float=(string)$float;  // string

$str_boleean=(bool)$float; // bollean

var_dump($str_boleean);

function kali(int $satu,int $dua):int
{
    return $satu*$dua;
}


/**
 * Operator
 * subtract (-)
 * addition (+)
 * multiply (*) 
 * divide (/)
 * increment (++)
 * decrement (--)
 * 
 */

 echo 4/4;  //2
 echo 4%2; //0

 $angka=1;      //1
 $angka++;     //2
 $angka--;    //1
 $angka+=9;  //10
 $angka/=5; //2
 $angka.=7;// 2 dan 7 atau 27

 echo PHP_EOL;
 echo $angka;
 $a = 5;

 var_dump(--$a);