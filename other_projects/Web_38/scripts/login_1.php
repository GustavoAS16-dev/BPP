<?php
    session_start();

    $serverName = "localhost";
    $userName = "root";
    /* $passWord = "g2016"; */
    $passWord = "";
    $dataBase = "web_38_db";
    $sql = "mysql:host=$serverName;dbname=$dataBase;";

    $userName_3 = $_POST["nome_1"];
    $password_3 = $_POST["senha_1"];

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

    $verify_2 = "select * from users where userName_1 = \"".$userName_3."\" and password_1 = \"".$password_3."\"";

    //echo($verify_2);

    $dados2 = mysqli_query($con1, $verify_2) or die(mysqli_error());

    if(mysqli_num_rows($dados2) != 0)
    {
        $_SESSION["login"] = $userName_3;
        header("Location: ../home.php");
    }
    else
    {
        include("../login/login.php");

        echo("<script>alert(\"Nome de usuário e/ou senha incorretos\");</script>");

        //echo "<p class=\"error_message_1\">Nome de usuário e/ou senha incorretos</p>";
    }
?>