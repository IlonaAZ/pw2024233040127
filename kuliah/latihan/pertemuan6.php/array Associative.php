<?php

//Deklarasi Array
$arr = array();
var_dump($arr);

$kota = array("Bandung","Jakarta");
echo"<br/>";
var_dump($kota);

$kota[2] = "Surabaya";
echo"<br/>";
var_dump($kota);

$kota[] = "Sukabumi";
echo"<br/>";
var_dump($kota);

echo"<br/>";echo"<br/>";

//Assignment Array
//$kota = array

echo"<br/>";echo"<br/>";

//Mencetak Array (dengan looping)
    for ($i=0; $i<count ($kota); $i++) {
echo $kota[$i];
echo"<br/>";
}

echo"<br/>";

    foreach ($kota as $x) {
echo $x;
echo"<br/>";
  }

echo"<br/>";

    foreach ($kota as $key) :
echo $key;
echo"<br/>";
endforeach;
