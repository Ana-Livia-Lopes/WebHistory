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
        <?php session_start();

        if ($_SESSION['nome'] != '') {
            echo "<div class='usuario'>";
            echo    "<img id='user-def-nav' src='img/" . $_SESSION['imagem'] . "' alt=''>";
            echo    "<div class='subclass-usuario'>";
            echo        "<p class='user-nome'>" . $_SESSION['nome'] ."</p>";
            echo        "<p id='user-nivel-acesso'>" . $_SESSION['tipo'] . "</p>";
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
            <div class="informacoes">

                <?php
                echo "<img id='user-perfil' src='img/" . $_SESSION['imagem'] . "' alt=''>";
                echo "<div class='info'>";
                    echo "<div class='nome-email'><p id='nome-acima'>NOME</p>";
                        echo "<h2>".$_SESSION['nome']." (".$_SESSION['tipo'].")</h2>";
                        echo "<p id='nome-acima'>EMAIL</p>";
                        echo "<h2>".$_SESSION['email']."</h2>";
                        echo "<p id='nome-acima'>SENHA</p>";
                        echo "<button id='editar-senha'>Editar senha</button>";
                        echo "<p id='nome-acima'>EXCLUIR SUA CONTA</p>";
                        echo "<button id='excluir-conta'>Excluir conta</button>";
                    echo "</div>";
                    echo "<div class='botoes'>";
                        echo "<button id='editar-nome'>Editar</button>";
                        echo "<button id='editar-email'>Editar</button>";
                    echo "</div>";
                echo "</div>";
                ?>
                
            </div>
        </div>
    </main>
    <script>
        document.getElementById('editar-nome').addEventListener('click', function(){

        })

        document.getElementById('editar-email').addEventListener('click', function(){

        })

        document.getElementById('editar-senha').addEventListener('click', function(){
            Swal.fire({
                input: "password",
                title: "Insira sua senha atual",
                showCancelButton: true,
                confirmButtonColor: "#438e4b",
                cancelButtonColor: "#ff3232",
                cancelButtonText: "Cancelar",
                confirmButtonText: "Prosseguir"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        input: "password",
                        title: "Insira sua nova senha",
                        showCancelButton: true,
                        confirmButtonColor: "#438e4b",
                        cancelButtonColor: "#ff3232",
                        cancelButtonText: "Cancelar",
                        confirmButtonText: "Alterar senha"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                title: "Sucesso!",
                                text: "Sua senha foi alterada",
                                icon: "success",
                                confirmButtonColor: "#438e4b"
                            });
                        }
                    });
                }
            });
        })

        document.getElementById('excluir-conta').addEventListener('click', function(){
            Swal.fire({
                input: "password",
                title: "Para prosseguir, insira sua senha",
                showCancelButton: true,
                confirmButtonColor: "#438e4b",
                cancelButtonColor: "#ff3232",
                cancelButtonText: "Cancelar",
                confirmButtonText: "Prosseguir"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Sua conta foi deleteda!",
                        text: 'Ao pressionar "OK" você será redirecionado(a) para a página inicial',
                        icon: "success",
                        confirmButtonColor: "#438e4b"
                    });
                }
            });
        })
    </script>
</body>
</html>