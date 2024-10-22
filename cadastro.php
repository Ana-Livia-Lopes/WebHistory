<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $var_nome = $_POST["nome"];
    $var_email = $_POST["email"];
    $var_tel = $_POST["tel"];
    $var_senha = md5($_POST["senha"]);

    $sql_insercao = "INSERT INTO usuarios (nome_usuario, email_usuario, tel_usuario, senha_usuario, tipo_usuario) VALUES (?, ?, ?, ?, 'aluno')";
    
    $stmt = $conexao->prepare($sql_insercao);
    
    $stmt->bind_param("ssss", $var_nome, $var_email, $var_tel, $var_senha);
    
    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Erro ao cadastrar usuário: " . $conexao->error;
    }

    $stmt->close();
    $conexao->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Cadastrar - História na Web</title>
</head>
<body>
<section id="secao1">
    <div id="box-login">
            <div id="box-img-login">
                    <img id="img-login" src="img/HW-icon.png" alt="">
                </div>
        <form action="" method="POST">
        <h1>CADASTRO</h1>
            <label for="nome">Nome</label>
            <input class="inserir" type="text" name="nome">

            <label for="email">Email</label>
            <input class="inserir" type="email" name="email">

            <label for="senha">Senha</label>
            <input class="inserir" type="password" name="senha">

            <button id="entrar" type="submit">Cadastrar</button>

            <p>Já tem uma conta? <a href="./login.php">Entre!</a></p>
            <p><a href="./index.php">Voltar para o início</a></p>
        </form>
    </div>
</section>
</body>
</html>