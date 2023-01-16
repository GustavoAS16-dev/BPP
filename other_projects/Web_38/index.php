<?php
    session_start();
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/a1.css" />
        <link rel="icon" href="./src/logo_2.png" type="image/png">
        <title>Web_38</title>
    </head>
    <body>

        <?php
            if(isset($_SESSION["login"]))
            {
                header("Location: ./home.php");

                die();
            }
        ?>

        <div class="objs_container_1">
            <div class="obj_1"></div>
            <div class="obj_2"></div>
            <div class="obj_3"></div>
            <div class="obj_4"></div>
            <div class="obj_1_1"></div>
        </div>

        <header id="headerID_1">
            <div class="h_div1">
                <a class="a1" href="./index.php"><li class="li_1">Início</li></a>
                <a class="a1" href=""><li class="li_1">Relevantes</li></a>
            </div>
            <div class="h_div2">
                <a class="a1" href="./register/register.php"><li class="li_2">Registrar-se</li></a>
                <a class="a1" href="./login/login.php"><li class="li_2">Login</li></a>
            </div>
        </header>
        <main id="mainID_1">

        </main>
        <footer id="footerID_1">

        </footer>
    </body>
</html>