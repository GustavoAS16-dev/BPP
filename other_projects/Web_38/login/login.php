<?php

?>

<!doctype html>
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
                <h1 class="login_title_1">Login</h1>
                <br />
                <br />
                <form name="form_1" id="form_1" class="c_form_1" autofocus method="post" action="../scripts/login_1.php">
                    <input type="text" name="nome_1" placeholder="Nome de usuário" class="input_text_1" required />
                    <br />
                    <br />
                    <br />
                    <input type="password" name="senha_1" placeholder="Senha" class="input_text_1" required />
                    <br />
                    <br />
                    <br />
                    <input type="submit" name="send_1" value="Entrar" class="input_submit_1" />
                    <br />
                    <br />
                    <br />
                    <br />
                    <p class="p_login_1">Não possui uma conta?</p>
                    <br />
                    <a href="../register/register.php" class="a_login_1">Cadastre-se</a>
                </form>
            </div>
        </section>
    </main>
</body>
</html>