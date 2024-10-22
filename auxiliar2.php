<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/HW-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./auxiliar2.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="./main.js" defer></script>
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
    <main class="main-content">
        
    </main>
</body>
 <footer>
    <div id="footer">

        <div class="contato">
            <h2>Informações de Contato</h2>
            <p><strong>SESI Caçapava:</strong></p>
            <p>Endereço: Av. Monsenhor Theodomiro Lobo, 100 - Parque Res. Maria Elmira, Caçapava - SP, 12285-050</p>
            <p>Telefone: (12) 3653-1943</p>
            <p>E-mail: contato@sesi-cacapava.com.br</p>
    
            <p><strong>SENAI Taubaté:</strong></p>
            <p>Endereço: Av. Independência, 846 - Independência, Taubaté - SP, 12031-001</p>
            <p>Telefone: (12) 3609-5701</p>
            <p>E-mail: senaitaubate@sp.senai.br</p>
        </div>
    
        <div class="equipe">
            <h2>Equipe Desenvolvedora</h2>
            <ul>
                <p>Ana Lívia dos Santos Lopes</p>
                <li><a href="https://linktr.ee/analivialopess">Link para contato</a></li>
    
                <p>Gabriel Reis de Brito</p>
                <li><a href="https://linktr.ee/gabrielreiss">Link para contato</a></li>
    
                <p>Isadora Gomes da Silva</p>
                <li><a href="https://linktr.ee/isadoragomess">Link para contato</a></li>
    
                <p>Lucas Randal Abreu Balderrama</p>
                <li><a href="https://linktr.ee/lucasbalderrama">Link para contato</a></li>
            </ul>
        </div>
    
        <div class="links-adicionais">
            <h2>Links Adicionais</h2>
            <ul>
                <li><a href="termos.php">Termos de Uso</a></li>
                <li><a href="privacidade.php">Política de Privacidade</a></li>
            </ul>
        </div>
    
        <div id="img-footer">
        </div>
    </div>
 </footer>

</html>