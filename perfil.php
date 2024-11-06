<?php include './conexao.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id_usuario = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows == 1){
        $usuario = $result->fetch_assoc();
    } else {
        die("Usuário não encontrado.");
    }
} else {
    die("ID do usuário não especificado.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/HW-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/perfil.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./main.js" defer></script>
    <title>Perfil</title>
</head>
<body>
<nav class="sidebar">
        <div>
            <div class="topo">
                <div class="logo">
                    <img id="logo-nav" src="img/HistWeb.png" alt="">
                </div>
                <i class="bx bx-menu" id="but-menu"></i>
            </div>
            <ul>
                <li>
                    <a href="index.php">
                        <i class="bx bx-home-alt"></i>
                        <span class="item-nav">Início</span>
                    </a>
                </li>
                <li>
                    <a href="glossario.php">
                        <i class="bx bx-book"></i>
                        <span class="item-nav">Glossário</span>
                    </a>
                </li>
                <li>
                    <a href='perfil.php'>
                        <i class="bx bx-user"></i>
                        <span class="item-nav">Perfil</span>
                    </a>
                </li>
            </ul>
        </div>
        <?php
        session_start();

        if ($_SESSION['nome'] != '') {
            echo "<div class='usuario'>";
            echo    "<img id='user-def-nav' src='img/" . $usuario['imagem_usuario'] . "' alt=''>";
            echo    "<div class='subclass-usuario'>";
            echo        "<p class='user-nome'>" . $usuario['nome_usuario'] ."</p>";
            echo        "<p id='user-nivel-acesso'>" . $usuario['tipo_usuario'] . "</p>";
            echo    "</div>";
            echo    "<div id='botao-acoes'>";
            if ($_SESSION['nome'] != '') {
                echo "<a href='logout.php'><button id='nav-sair'>Sair</button></a>";
            }
            echo    "</div>";
            echo "</div>";
        }

        if ($_SESSION['nome'] == '') {
            echo "<a href='login.php'><button id='nav-entrar'>Entrar</button></a>";
        }
        ?>
    </nav>
    <main class="main-content">
        <div class="pagina-perfil">
            <div id="fundo">
                <img id="banner-histweb" src="img/HistWebWhite.svg" alt="">
            </div>
            <form class="informacoes" action="" method="POST">
                <img id='user-perfil' src='img/<?php echo $usuario['imagem_usuario']; ?>' alt=''>
                <input type="file" name="imagem">
                <div class='info'>
                    <div class='nome-email'>

                        <input type="hidden" name="id" value="<?php echo $usuario['id_usuario']; ?>">

                        <label class='nome-acima'>NOME</label>
                        <input id='campo-nome' name="nome" type='text' value='<?php echo $usuario['nome_usuario']; ?>'>

                        <label class='nome-acima'>EMAIL</label>
                        <input id='campo-email' name="email" type='email' value='<?php echo $usuario['email_usuario']; ?>'>

                        <label class='nome-acima'>SENHA</label>
                        <input id='campo-senha' name="senha" type='password' value='<?php echo $usuario['senha_usuario']; ?>'>

                        <div id='mostrar'>
                            <input type='checkbox' onclick='mostrarSenha()'> Mostrar senha
                        </div>

                        <button type="submit" id="confirma">Confirmar alterações</button>

                    </div>
                </div>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];

                $sql = "UPDATE usuarios SET nome_usuario = ?, email_usuario = ?, senha_usuario = ? WHERE id_usuario = ?";
                $stmt = $conexao->prepare($sql);
                $stmt->bind_param("sssi", $nome, $email, $senha, $id);

                if ($stmt->execute()) {
                    header("Location: perfil.php");
                } else {
                    echo "Erro ao atualizar informações: " . $conexao->error;
                }
                $stmt->close();
            }
            ?>

            <div class="exclusao">
                <p class='nome-acima'>EXCLUIR SUA CONTA</p>
                <button id='excluir-conta'>Excluir conta</button>
            </div>

        </div>
    </main>
    <script>
        function mostrarSenha() {
            var x = document.getElementById("campo-senha");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>