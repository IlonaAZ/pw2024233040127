<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
} else {
    header("Location: 6ca.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style: none;
        font-family: 'Poppins', sans-serif;
        border: none;
        outline: none;
        scroll-behavior: smooth;
        letter-spacing: .4px;
    }

    :root {
        --color-black: #7AB2B2;
        --color-white: #ffffff;
        --color-dark: #353535;
        --color-dark-variant: black;

        --transition: .4s ease;
    }

    .awal {

        z-index: 2;
        padding-bottom: 71px;
        background-size: cover;
        background-image: url(galery/4857390.jpg);
    }

    header {
        padding-top: 6rem;
    }

    .header-conta {
        display: grid;
        grid-template-columns: 1fr 1fr;
        max-width: 1100px;
        justify-content: space-between;
        ;
        margin: auto;
        gap: 90px;
    }

    .header-right {
        text-align: center;
        margin: auto;
    }

    .header-right p {
        color: var(--color-dark-variant);
    }

    .header-right h2 {
        margin: auto;
    }

    .header-action {
        margin-top: 1rem;
        display: flex;
        gap: 1rem;
        justify-content: center;
    }

    .header-action a {
        padding: 10px;
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .header-left img {
        width: 90%;
        border-radius: 30rem;
        box-shadow: 2px 2px 10px black;
    }

    h1 {
        font-size: 48px;
        color: var(--color-black);
    }

    h2 {
        font-size: 28px;
        color: var(--color-dark-variant);
    }

    .btn {
        display: inline-block;
        width: fit-content;
        padding: 1rem;
        width: 9rem;
        border-radius: 2rem;
        cursor: pointer;
        color: black;
        border: 1px solid var(--color-dark-variant);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 17px;
        transition: var(--transition);
    }

    .btn:hover {
        background-color: var(--color-dark-variant);
        color: var(--color-white)
    }

    .btn-dark {
        color: var(--color-white);
        background: var(--color-black);
        text-decoration: none !important;

    }

    .btn-dark:hover {
        background-color: transparent;
        color: var(--color-dark-variant);

    }
    </style>
</head>

<body>
    <div class="awal">




        <header id="home">
            <div class=" header header-conta">
                <div class="header-left">
                    <img src="image//badut kotak.jpeg" alt="Foto Gue">
                </div>
                <div class="header-right">
                    <p><b>Selamat Datang</b></p>
                    <h1><?= $username ?></h1>
                    <h2>Mahasiswa Universitas Pasundan</h2>
                    <div class="header-action">
                        <a href="6ca.php" class="btn btn-dark ">Logout</a>
                    </div>
                </div>
            </div>
        </header>
    </div>
</body>

</html>