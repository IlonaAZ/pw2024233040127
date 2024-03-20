<?php
$mahasiswa = [
    [
    "nama" => "Ilona Aqila Zahra",
    "nim" => "233040127",    
    "email" => "ilona@gmail.com",
    "jurusan" => "Teknik Informatika",
    "foto" => "img/image.jpg",
    ],
    [
    "nama" => "Zeina Qurotun Nisa",
    "nim" => "233040128",    
    "email" => "zeina@gmail.com",
    "jurusan" => "Teknik Informatika",
    "foto" => "img/image.jpg",
    ],
    [
    "nama" => "Milda Khaerunnisa",
    "nim" => "233040129",    
    "email" => "milda@gmail.com",
    "jurusan" => "Teknik Informatika",
    "foto" => "img/image.jpg",
    ],
    [
    "nama" => "Fitriyani Rahmadini",
    "nim" => "233040130",    
    "email" => "fitri@gmail.com",
    "jurusan" => "Teknik Informatika",
    "foto" => "img/image.jpg",
    ],
    [
    "nama" => "Dera Triyadi Fatimah",
    "nim" => "233040131",    
    "email" => "dera@gmail.com",
    "jurusan" => "Teknik Informatika",
    "foto" => "img/image.jpg",
    ],
    [
    "nama" => "Anindya Gita Lestari",
    "nim" => "233040132",    
    "email" => "anin@gmail.com",
    "jurusan" => "Teknik Informatika",
    "foto" => "img/image.jpg",
    ],
    [
    "nama" => "Anandita Putri Salsabila Athaya",
    "nim" => "233040133",    
    "email" => "anna@gmail.com",
    "jurusan" => "Teknik Informatika",
    "foto" => "img/image.jpg",
    ],
    [
    "nama" => "Adinda Juliana Ruhiyat",
    "nim" => "233040134",    
    "email" => "adinda@gmail.com",
    "jurusan" => "Teknik Informatika",
    "foto" => "img/image.jpg",
    ],
    [
    "nama" => "Adell Lailla Amallia",
    "nim" => "233040135",    
    "email" => "adell@gmail.com",
    "jurusan" => "Teknik Informatika",
    "foto" => "img/image.jpg",
    ],
    [
    "nama" => "Rama Sadea Putra",
    "nim" => "233040136",    
    "email" => "rama@gmail.com",
    "jurusan" => "Teknik Informatika",
    "foto" => "img/image.jpg",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>
<style>
    img{
        width: 10%;
    }
</style>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $a) :?>

    <ul>
    <li>Nama : <?=$a["nama"]; ?></li>
    <li>NIM : <?=$a["nim"]; ?></li>
    <li>Email : <?=$a["email"]; ?></li>
    <li>Jurusan : <?=$a["jurusan"]; ?></li>
    <li>Foto : <img src="<?=$a["foto"]; ?>" alt=""></li>
    </ul>

    <?php endforeach;?>
    
</body>
</html>