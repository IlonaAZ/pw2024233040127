<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d</title>
<style>
    *{
        margin: 5;
        padding: 1;
    }
    .awal{
        width: 38%;
        border: 3px solid black;
    }
    .kotak{
        width: 100px;
        height: 100px;
        display: inline-block;
    }
    .dua{
        background-color: white;
    
    }
    .tiga{
        background-color: black;
        color: white;
    }
</style>
</head>
<body>

<div class="awal">
    <?php
    for ($k = 1; $k <= 5; $k++) {
        echo "<div>";
    for ($j = 1; $j <= 5; $j++) {
        $class = ($k + $j) % 2 == 0? "dua":"tiga";
        echo "<div class = 'kotak $class'></div>";
    }
        echo "</div>";
    }
    ?>
</div>
</body>
</html>