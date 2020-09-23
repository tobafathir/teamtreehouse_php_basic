<?php

$tanya=readline("Pilih Mana (yes/no) ?");

if($tanya=="yes")  // jika memilih yes
{
    echo "kamu memilih yes";
}elseif($tanya=="no") // jika memilih no
{
    echo "kamu memilih no";
}
elseif($tanya=="maybe") // jika memilih maybe
{
    echo "kamu memilih maybe";
}
else // jika tidak memilih yes/no/maybe (tidak memilih yang tersedi)
{
    echo  "kamu tidak memilih yang tersedia !!!";
}

echo PHP_EOL;

$menu=readline("Pilih angka 1-3 ?");

switch($menu)
{
    case 1 :                            // jika user menginput angka 1
        echo "anda memilih nomor 1";    
    break;
    case 2 :                            // jika user menginput angka 2
        echo "anda memilih nomor 2";
    break;
    case 3 :                            // jika user menginput angka 3
        echo "anda memilih nomor 3";
    break;
    default;                            //jika user tidak menginput angka yang tersedia
        echo "Anda tidak memilih pilihan yang tersedia";
}