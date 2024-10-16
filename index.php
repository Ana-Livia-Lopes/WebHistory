<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js" defer></script>
    <title>História na Web</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="main.js"></script>
</head>
<body>
    <header>
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
                    <a href="#">
                        <i class="bx bx-home-alt"></i>
                        <span class="item-nav">Início</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-book"></i>
                        <span class="item-nav">Glossário</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-cog"></i>
                        <span class="item-nav">Admin</span>
                    </a>
                </li>
            </ul>
            </div>
            
            <div class="usuario">
                <img id="user-def-nav" src="img/user_default.jpg" alt="">
                <div class="subclass-usuario">
                    <p class="user-nome">
                        <?php session_start();
                        if ($_SESSION['nome'] == "") {
                            echo "teste";
                        } else {
                            echo $_SESSION['nome'];
                        } ?>
                    </p>
                    <p id="user-nivel-acesso">
                        <?php if ($_SESSION['tipo'] == "") {
                            echo "teste";
                        } else {
                            echo $_SESSION['tipo'];
                        } ?></p>
                    <?php if ($_SESSION['nome'] == "") {
                        echo "<a href='./php/login.php'><button id='nav-entrar'>Entrar</button></a>";
                    } ?>
                </div>
            </div>
        </nav>
    </header>
    <a href="logout.php">Sair</a>
    <section id="secao1">
        <div class="div">História na Web,</div> 
        <div class="div"> 
            <span>Reviva o passado e entenda o presente</span>
        </div>
    </section>
    <section id="secao2">
        <div class="imgSobre">
            <div class="sobre">
                <h1>Sobre:</h1>
                <p>Bem-vindo ao História na Web, onde disponilizaremos diversos recursos confiaveis sobre muitos momentos na histótia.</p>
            </div>
        </div>
    </section>
</body>
</html>