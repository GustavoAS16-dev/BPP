<?php
    /* session_start();

    $serverName = "localhost";
    $userName = "root";
    //$passWord = "g2016";
    $passWord = "";
    $dataBase = "web_38_db";
    $sql = "mysql:host=$serverName;dbname=$dataBase;";

    $userName_3 = $_POST["nome_1"];
    $password_3 = $_POST["senha_1"];
    $email_3 = $_POST["email_1"];

    try
    { 
        //$con1 = new PDO($sql, $userName, $passWord);
        $con1 = new mysqli($serverName, $userName, $passWord, $dataBase);
    }
    catch (PDOException $error)
    {
        echo "<p class=\"error_message_1\">Erro ao conectar-se com o servidor: " . $error->getMessage()."</p>";
    }

    $insertion_1 = $con1->prepare("insert into users (userName_1, password_1, email_1) values (:userName_2, :password_2, :email_2)");

    $insertion_1->bindParam(':userName_2', $userName_3);
    $insertion_1->bindParam(':password_2', $password_3);
    $insertion_1->bindParam(':email_2', $email_3);

    $verify_1 = "select * from users where userName_1 = \"".$userName_3."\" or email_1 = \"".$email_3."\"";

    $dados1 = mysqli_query($con1, $verify_1) or die(mysqli_error());

    if(isset($dados1))
    {
        echo("<p class=\"error_message_1\">Nome de usuário e/ou email já está(ão) em uso</p>");
    }
    else
    {
        if($insertion_1->execute())
        {
            $_SESSION["login"] = $userName_3;
            header("Location: ../home.php");
        }
        else
        {
            echo "<p class=\"error_message_1\">Erro ao efetuar o cadastro: " . $error->getMessage()."</p>";
        }
    } */


    session_start();

    $serverName = "localhost";
    $userName = "root";
    /* $passWord = "g2016"; */
    $passWord = "";
    $dataBase = "web_38_db";
    $sql = "mysql:host=$serverName;dbname=$dataBase;";

    $userName_3 = $_POST["nome_1"];
    $password_3 = $_POST["senha_1"];
    $password_4 = $_POST["senha_2"];
    $email_3 = $_POST["email_1"];

    if(empty($userName_3) or empty($password_3))
    {
        include("../register/register.php");

        echo("<script>alert(\"Nome de usuário e/ou senha inválidos\");</script>");

        //echo("<p class=\"error_message_1\">Nome de usuário e/ou senha inválidos</p>");
    }
    else
    {
        if($password_3 == $password_4)
        {
            try
            { 
                //$con1 = new PDO($sql, $userName, $passWord);
                $con1 = new mysqli($serverName, $userName, $passWord, $dataBase);
            }
            catch (PDOException $error)
            {
                include("../register/register.php");

                echo("<script>alert(\"Erro ao conectar-se com o servidor: " . $error->getMessage()."\");</script>");

                //echo "<p class=\"error_message_1\">Erro ao conectar-se com o servidor: " . $error->getMessage()."</p>";
            }

            $insertion_1 = $con1->prepare("insert into users (userName_1, password_1, email_1) values (?, ?, ?)");

            //$insertion_1->bindParam(':userName_2', $userName_3);
            //$insertion_1->bindParam(':password_2', $password_3);
            //$insertion_1->bindParam(':email_2', $email_3);

            $insertion_1->bind_param("sss", $userName_3, $password_3, $email_3);

            $verify_1 = "select * from users where userName_1 = \"".$userName_3."\" or email_1 = \"".$email_3."\"";

            //echo("<script>alert(\"$verify_1\");</script>");

            $dados1 = mysqli_query($con1, $verify_1) or die(mysqli_error());

            if(mysqli_num_rows($dados1) != 0)
            {
                include("../register/register.php");

                echo("<script>alert(\"Nome de usuário e/ou email já está(ão) em uso\");</script>");
            }
            else
            {
                if($insertion_1->execute())
                {
                    $_SESSION["login"] = $userName_3;
                    header("Location: ../home.php");
                }
                else
                {
                    include("../register/register.php");

                    echo("<script>alert(\"Erro ao efetuar o cadastro: " . $error->getMessage()."\");</script>");
                    
                    //echo "<p class=\"error_message_1\">Erro ao efetuar o cadastro: " . $error->getMessage()."</p>";
                }
            }
        }
        else
        {
            include("../register/register.php");

            echo("<script>alert(\"As senhas informadas não correpondem entre si\");</script>");

            //header("Location: ../register/register.php");
        }
    }
?>

<!-- <!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/a1.css" />
        <link rel="icon" href="../src/logo_2.png" type="image/png">
        <title>Web_38</title>
    </head>
    <body>
        <div class="objs_container_1">
            <div class="obj_1"></div>
            <div class="obj_2"></div>
            <div class="obj_3"></div>
            <div class="obj_4"></div>
            <div class="obj_1_1"></div>
        </div>
        <main id="mainID_2">
            <section id="login_1">
                <div class="form_1_div1">
                    <h1 class="login_title_1">Cadastro</h1>
                    <br />
                    <br />
                    <form name="form_1" id="form_1" class="c_form_1" autofocus method="post" action="./scripts/cadastrar_1.php">
                        <input type="text" name="nome_1" placeholder="Nome de usuário" class="input_text_1" required />
                        <br />
                        <br />
                        <br />
                        <input type="password" name="senha_1" placeholder="Senha" class="input_text_1" required />
                        <br />
                        <br />
                        <br />
                        <input type="email" name="email_1" placeholder="email@exemplo.com" class="input_text_1" required />
                        <br />
                        <br />
                        <br />
                        <input type="submit" name="send_1" value="Cadastrar" class="input_submit_1" />
                        <br />
                        <br />
                        <br />
                        <br />
                        <p class="p_login_1">Já possui uma conta?</p>
                        <br />
                        <a href="../login/login.php" class="a_login_1">Faça login</a>
                    </form>
                </div>
            </section>
        </main>
    </body>
</html> -->