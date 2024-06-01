<?php  
 session_start(); 
 if (isset($_POST["submit"])) { 
     if ($_POST["username"] == "Ilona" && $_POST["password"] == "2207") { 
         $_SESSION["username"] = $_POST["username"]; 
         header("Location: 6c.php"); 
         exit; 
     } else { 
         $error = true; 
     } 
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
        --color-black: #CDE8E5;
        --color-white: #ffffff;
        --color-dark: #353535;
        --color-dark-variant: black;
        --transition: .4s ease;
    }

    h1 {
        font-size: 48px;
        color: var(--color-black);
    }

    .heading {
        color: white;
        text-align: center;
        margin-bottom: 2rem;
    }

    p {
        font-size: 17px;
        line-height: 140%;
        color: var(--color-dark-variant);
    }

    .heading-p {
        font-weight: bold;
        padding-top: 9rem;
        text-align: center;
    }

    a {
        font-size: 24px;
        color: var(--color-black);
        text-decoration-color: var(--color-white);
        transition: var(--transition);
    }

    a:hover {
        color: var(--color-dark);
        text-decoration-color: var(--color-dark-variant) !important;
        text-underline-offset: 1rem;
        text-decoration: underline;

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

    img {
        width: 100%;
        display: block;

    }

    section {
        position: relative;
    }

    .arrow {
        position: absolute;
        right: 5%;
        transition: var(--transition);
    }

    .container {
        margin: 0 auto;
        max-width: 1100px;
        width: 90%;
    }

    .contact-conta {

        max-width: 35rem;
        border: 1px solid var(--color-black);
        border-radius: 30px;
        padding: 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .contact-conta button a {
        color: var(--color-white);
        font-size: 15px;

    }

    .contact-conta button {
        height: 30px;
        width: 90px;
    }

    .contact-conta button a:hover {
        color: var(--color-dark);
        text-decoration: none;
    }

    input[type=text],
    input[type=password] {
        border-radius: 10px;
        width: 100%;
        padding: 12px;
        border: 1px solid black;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    #tmbl {
        background-color: #ffb534;
        border: 1px solid black;
        color: white;
        padding: 10px 20px;
        border-radius: 10px;
    }

    #mb {
        margin-top: -6rem;
        margin-bottom: -6rem;
    }
    </style>
</head>

<body>
    <svg style="background-color: #7AB2B2; margin-top:rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="white" fill-opacity="1"
            d="M0,224L26.7,208C53.3,192,107,160,160,138.7C213.3,117,267,107,320,138.7C373.3,171,427,245,480,229.3C533.3,213,587,107,640,96C693.3,85,747,171,800,208C853.3,245,907,235,960,224C1013.3,213,1067,203,1120,186.7C1173.3,171,1227,149,1280,154.7C1333.3,160,1387,192,1413,208L1440,224L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
        </path>
    </svg>
    <div id="mb">
        <section id="box">
            <a href="#mb" class="arrow"><img src="../itw2023_project1_233040122/galery/arrow.png" class="icon1"
                    style="margin-top:-200px ;" alt=""></a>
            <h1 class="heading" style="color: var(--color-black);">LogiloN</h1>
            <div class="contact-conta container">

                <form action="" method="post">
                    <label for="username">Name</label>
                    <input type="text" id="username" name="username" placeholder=" Enter Your Name..">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Your Email..">
                    <?php if (isset($error)) : ?>
                    <p>username / password kamu salah bro <?= $_POST["username"]; ?></p>
                    <?php endif; ?>
                    <br>
                    <button class="btn btn-dark" type="submit" name="submit">Login</button>

                </form>
            </div>

    </div>
    </section>
    </div>
    <svg style="background-color: #7AB2B2; margin-bottom:-10rem" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320">
        <path fill="white" fill-opacity="1"
            d="M0,160L24,176C48,192,96,224,144,224C192,224,240,192,288,165.3C336,139,384,117,432,128C480,139,528,181,576,181.3C624,181,672,139,720,144C768,149,816,203,864,229.3C912,256,960,256,1008,229.3C1056,203,1104,149,1152,128C1200,107,1248,117,1296,106.7C1344,96,1392,64,1416,48L1440,32L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z">
        </path>
    </svg>
</body>

</html>