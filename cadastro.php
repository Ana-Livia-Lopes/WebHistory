<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $var_nome = $_POST["nome"];
    $var_email = $_POST["email"];
    $var_senha = md5($_POST["senha"]);

    $sql_insercao = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario, imagem_usuario, tipo_usuario) VALUES (?, ?, ?, 'user_default.jpg', 'aluno')";
    
    $stmt = $conexao->prepare($sql_insercao);
    
    $stmt->bind_param("sss", $var_nome, $var_email, $var_senha);
    
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
    <link rel="shortcut icon" href="./img/HW-icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/login.css">
    <title>Cadastrar - História na Web</title>
</head>
<body>
<section class="secao-cadastro">
    
    <div class="box-cadastro">
        <form action="" method="POST">
            <h1>Cadastro</h1>
            <label for="nome">Nome</label>
            <input class="campo-inserir" type="text" name="nome">
            
            <label for="email">Email</label>
            <input class="campo-inserir" type="email" name="email">
            
            <label for="senha">Senha</label>
            <input class="campo-inserir" type="password" name="senha">
            
            <button id="botao-cadastrar" type="submit"><a href="./index.php">Cadastrar</a></button>
            
            <p><a class="voltar" href="./index.php">Voltar para o início</a></p>
        </form>
    </div>
    <div class="box-bemvindo">
        <h2>Já tem uma conta?</h2>
        <p>Para continuar sua jornada conosco, entre com suas credenciais.</p>
        <button id="botao-entrar" type="submit"><a href="./login.php">Entrar</a></button>
    </div>
</section>
</body>
</html>

