<?php
include './conexao.php';
include './id_verify.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] == 0) {
        $imagem = $_FILES["imagem"];
        $extensao = strtolower(pathinfo($imagem["name"], PATHINFO_EXTENSION));

        if (in_array($extensao, ["jpg", "jpeg", "png", "gif"])) {
            $novoNome = uniqid() . "." . $extensao;
            $diretorio = "img/" . $novoNome;

            if (move_uploaded_file($imagem["tmp_name"], $diretorio)) {
                if (!empty($senha)) {
                    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
                    $sql = "UPDATE usuarios SET nome_usuario = ?, email_usuario = ?, senha_usuario = ?, imagem_usuario = ? WHERE id_usuario = ?";
                    $stmt = $conexao->prepare($sql);
                    $stmt->bind_param("ssssi", $nome, $email, $senhaHash, $novoNome, $id);
                } else {
                    $sql = "UPDATE usuarios SET nome_usuario = ?, email_usuario = ?, imagem_usuario = ? WHERE id_usuario = ?";
                    $stmt = $conexao->prepare($sql);
                    $stmt->bind_param("sssi", $nome, $email, $novoNome, $id);
                }
            } else {
                echo "Erro ao fazer upload da imagem.";
                exit;
            }
        } else {
            echo "Formato de imagem inválido. Apenas JPG, JPEG, PNG e GIF são permitidos.";
            exit;
        }
    } else {
        if (!empty($senha)) {
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "UPDATE usuarios SET nome_usuario = ?, email_usuario = ?, senha_usuario = ? WHERE id_usuario = ?";
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param("sssi", $nome, $email, $senhaHash, $id);
        } else {
            $sql = "UPDATE usuarios SET nome_usuario = ?, email_usuario = ? WHERE id_usuario = ?";
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param("ssi", $nome, $email, $id);
        }
    }

    if ($stmt->execute()) {
        header("Location: perfil.php?id=".$id);
        exit;
    } else {
        echo "Erro ao atualizar informações: " . $conexao->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/HW-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/perfil.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
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
            </ul>
        </div>
        <?php 

        if (isset($_SESSION['nome']) && $_SESSION['nome'] != '') {
            echo "<div class='usuario'>";
            echo    "<a href='perfil.php?id=". $_SESSION['id'] ."'><img id='user-def-nav' src='img/user_default.jpg' alt=''></a>";
            echo    "<div class='subclass-usuario'>";
            echo        "<p class='user-nome'>" . $_SESSION['nome'] . "</p>";
            echo        "<p id='user-nivel-acesso'>" . $_SESSION['tipo'] . "</p>";
            echo    "</div>";
            echo    "<div id='botao-acoes'>";
            echo        "<a href='logout.php'><button id='nav-sair'>Sair</button></a>";
            echo    "</div>";
            echo "</div>";
        } else {
            echo "<a href='login.php'><button id='nav-entrar'>Entrar</button></a>";
        }
        ?>
    </nav>
<main class="main-content">
    <div class="pagina-perfil">
        <div id="fundo">
            <img id="banner-histweb" src="img/HistWebWhite.svg" alt="">
        </div>
        <form class="informacoes" action="perfil.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <img id='user-perfil' src='img/<?php echo $usuario['imagem_usuario']; ?>' alt=''>
            <div class='info'>
                <div class='nome-email'>
                    <input type="hidden" name="id" value="<?php echo $usuario['id_usuario']; ?>">
                    <label class="nome-acima" for="upload">IMAGEM</label>
                    <input id="upload" type="file" name="imagem" accept="image/*">
                    <label class='nome-acima'>NOME</label>
                    <input id='campo-nome' name="nome" type='text' value='<?php echo $usuario['nome_usuario']; ?>'>
                    <p id="aviso">O novo nome é visível na barra lateral apenas após o usuário sair da conta e entrar novamente</p>
                    <label class='nome-acima'>EMAIL</label>
                    <input id='campo-email' name="email" type='email' value='<?php echo $usuario['email_usuario']; ?>'>
                    <label class='nome-acima'>SENHA</label>
                    <input id='campo-senha' name="senha" type='password' placeholder="Nova senha">
                    <div id='mostrar'>
                        <input type='checkbox' onclick='mostrarSenha()'> Mostrar senha
                    </div>
                    
                    <button type="submit" id="confirma">Confirmar alterações</button>
                </div>
            </div>
        </form>

        <div class="exclusao">
            <p class='nome-acima'>EXCLUIR SUA CONTA</p>
            <?php echo "<a href='./exclusao.php?id=". $_SESSION['id'] ."'><button id='excluir-conta'>Excluir conta</button></a>"; ?>
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