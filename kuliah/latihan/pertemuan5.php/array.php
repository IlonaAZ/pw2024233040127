<?php
$hari1 = 'Senin';
$hari2 = 'Selasa';
$hari3 = 'Rabu';
$hari4 = 'Kamis';
$hari5 = 'Jumat';
$hari6 = 'Sabtu';
$hari7 = 'Minggu';

$nama_hari1 = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];

$nama_hari2 = array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');

var_dump($nama_hari1);

echo '<br>';
echo '<br>';
echo '<br>';

var_dump($nama_hari2);

echo '<br>';
echo '<br>';
echo '<br>';

//untuk memanggil index (mengakses elemen pada array)//
echo($nama_hari1[5]);
//Index dihitung mulai dari 0//

echo '<br>';
echo '<br>';
echo '<br>';


//array di dalam array (array multidimensi / array bersarang)//
$pembangkit = true;
$kereta = [
    'lokomotif',
    300.0,
    'gerbong_barang',
    //array di dalam array//
    ['penumpang_1','penumpamg_2'],
    $pembangkit,
    1

];

var_dump($kereta);

echo '<br>';
echo '<br>';
echo '<br>';

//untuk memanggil index (mengakses elemen pada array)//
echo($kereta[2]);
echo '<br>';
//memanggil array di dalam array//
echo($kereta[3][0]);

echo '<br>';
echo '<br>';
echo '<br>';