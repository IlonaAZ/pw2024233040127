<?php
    function cetak_bintang($angka){
        for ($a = 1; $a <= $angka; $a++){
            echo str_repeat('*',$a)."<br>";
        }
    }
    cetak_bintang(3);
    ?>