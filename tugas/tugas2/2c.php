<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c</title>
</head>

<style>
.kotak{
    width: 50px;
    heigth: 50px;
    text-align: center;
    line-height: 50px;
    background-color: #add8e6;
    border: 2px solid black;
}

.awal{
    display: flex;
}
</style>
<body>
    <?php
    for ($no = 10; $no >= 1; $no--) {
        echo "<div class=\"awal\">";
    for ($ni = 1; $ni <= $no; $ni++) {
        echo "<div class=\"kotak\"> $ni </div>";
    }
        echo "</div>";
    }
    ?>
</body>
</html>