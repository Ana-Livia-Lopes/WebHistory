<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/HW-icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/login.css">
    <title>Login - História na Web</title>
</head>
<body>
    <section id="secao-login">
        <div id="box-login">
                <h1>Entre na sua conta</h1>
                <form action="" method="POST">
                    <label for="email">Email</label>
                    <input class="inserir" type="email" name="email">

                    <label for="senha">Senha</label>
                    <input class="inserir" type="password" name="senha">

                    <?php

                        session_start();
                        include 'conexao.php';

                        if($_SERVER["REQUEST_METHOD"] == "POST") {
                            $var_email = $_POST["email"];
                            $var_senha = md5($_POST["senha"]);

                            $query = "SELECT * FROM usuarios WHERE email_usuario = '$var_email' AND senha_usuario = '$var_senha'";

                            $result = mysqli_query($conexao, $query);

                            if($result->num_rows > 0) {
                                $usuario_logado = $result->fetch_assoc();
                                $_SESSION['nome'] = $usuario_logado['nome_usuario'];
                                $_SESSION['email'] = $usuario_logado['email_usuario'];
                                $_SESSION['tipo'] = $usuario_logado['tipo_usuario'];
                                $_SESSION['imagem'] = $usuario_logado['imagem_usuario'];
                                
                                header('Location: index.php');
                            } else {
                                echo "<p style='color:red;'>Email ou senha incorretos</p>";
                            }
                        }
                        ?>

                    <button id="entrar" type="submit"><a href="./index.php">Entrar</a></button>
                    <p><a class="voltar" href="./index.php">Voltar para o início</a></p>
                </form>
        </div>
        <div id="box-welcome">
            <h2>Não tem uma conta?</h2>
            <p>Entre com seus dados pessoais e comece sua jornada conosco</p>
            <button id="cadastrar-button" class type="submit"><a href="./cadastro.php">Cadastre-se</a></button>
        </div>
    </section>
    </div>
</body>
</html>