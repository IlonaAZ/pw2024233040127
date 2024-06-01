<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6a</title>
    <style>
    .bx {
        width: 50px;
        height: 50px;
        border: 1px solid black;
        color: white;
        display: flex;
        border-radius: 3px;
        margin: 5px;
    }

    h1 {
        font-family: Arial, Helvetica, sans-serif;
    }

    .bx h2 {
        margin: auto;
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
    }


    .b {
        display: flex;
        width: fit-content;
        height: fit-content;
    }

    .satu {
        .bx {
            background-color: lightgreen;
        }
    }

    .dua {
        .bx {
            background-color: lightpink;
            color: black;
        }
    }
    </style>
</head>

<body>
    <?php if(!isset($_GET["no"])) : ?>
    <h1>Masukan variable "no" dalam URL </h1>
    <?php else : ?>
    <?php for ($i = $_GET["no"]; $i >= 1; $i--) : ?>
    <?php if($i % 2 === 0) : ?>
    <div class="b satu">
        <?php else : ?>
        <div class="b dua">
            <?php endif; ?>
            <?php for ($j = 1; $j <= $i; $j++) : ?>
            <div class="bx">
                <h2><?= "$i" ?></h2>
            </div>
            <?php endfor ; ?>
            <br>
        </div>
        <?php endfor ; ?>
        <?php endif; ?>
</body>

</html