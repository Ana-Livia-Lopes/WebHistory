<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "historia_na_web";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_errno);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar - História na Web</title>
</head>
<body>
    
</body>
</html>