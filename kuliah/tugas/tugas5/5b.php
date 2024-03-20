<?php
$bulan =['Januari','Februari','Maret'];
print_r($bulan);

echo "</br>";
echo'----------------------------------------------------';
echo"</br>";
    echo"Array Pop :";
    // Untuk menghapus elemen terakhir pada Array //
    echo"</br>";
    $setelah = array_pop($bulan);
    print_r($bulan);

echo"</br>";
echo'----------------------------------------------------';
echo"</br>";

    echo"Array Push :";
    // Menambahkan elemen akhir pada Array //
    echo"</br>";
    $setelah = array_push($bulan,'April','Mei','Juni');
    print_r($bulan);

echo"</br>";
echo'----------------------------------------------------';
echo"</br>";

    echo"Array Shift :";
    // Menghapus awal elemen pada Array //
    echo"</br>";
    $setelah = array_shift($bulan);
    print_r($bulan);

echo"</br>";
echo'----------------------------------------------------';
echo"</br>";

    echo"Array Unshift :";
    // Menambah awal elemen pada Array //
    echo"</br>";
    $setelah = array_unshift($bulan,'Januari');
    print_r($bulan);

echo"</br>";
echo'----------------------------------------------------';
echo"</br>";

    echo"Array Slice :";
    // Memilih sebagian elemen menggunakan index //
    echo"</br>";
    $setelah = array_slice($bulan,0,3);
    print_r($bulan);
?> 