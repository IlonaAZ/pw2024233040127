<?php

    $i = 10;
    $j = 3.14;

    echo "<br><b>Menghitung Luas Lingkaran</b></br>";
    function hitungLuasLingkaran($i,$j) {
    $luaslingkaran = $j*$i*$i;
    return $luaslingkaran;
}

echo " Jari - Jari = " .$i ."cm.<br>";
echo "Luas lingkaran = " .$luas = hitungLuasLingkaran($i,$j)."cm <sup> 2 </sup> <br> <hr>";

echo "<br><b>Menghitung keliling Lingkaran</b><br><br>";
function hitungkelilingLingkaran($i,$j) {
    $kelilinglingkaran =2*$j*$i;
    return $kelilinglingkaran ;
}
echo "Jari-jari = ". $i * 2 . "cm.<br>";
echo "Keliling Lingkaran = ".$keliling = hitungkelilingLingkaran($i,$j* 2). "cm <sup>2</sup> <br> <hr>";

?>