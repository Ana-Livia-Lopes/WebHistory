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
        $_SESSION['tipo'] = $usuario_logado['tipo_usuario'];
        
        header('Location: auxiliar.php');
    } else {
        echo "<p style='color:red;'>Email ou senha incorretos</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>Login - História na Web</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="senha">Senha</label>
            <input type="password" name="senha">

            <button type="submit">Entrar</button>

            <p>Não tem uma conta? <a href="./cadastro.php">Cadastre-se!</a></p>
        </form>
    </div>
</body>
</html>