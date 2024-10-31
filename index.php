<?php
session_start();
$_SESSION['nome'] = '';
$_SESSION['tipo'] = '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js" defer></script>
    <title>História na Web</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/servicos.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="./main.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Reem+Kufi:wght@400..700&display=swap" rel="stylesheet">
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
        <?php 
        

        if ($_SESSION['nome'] != '') {
            echo "<div class='usuario'>";
            echo    "<a href='perfil.php'><img id='user-def-nav' src='img/user_default.jpg' alt=''></a>";
            echo    "<div class='subclass-usuario'>";
            echo        "<p class='user-nome'>" . $_SESSION['nome'] . "</p>";
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
        
        <section id="secao1">
            <h1>História na Web<img id="folha" src="img/HW-icon-folha.png" alt=""></h1>
            <div class="div">História na Web,</div> 
            <div class="div"> 
                <span>Reviva o passado e entenda o presente</span>
            </div>
        </section>
        <section id="secao2">
            <div class=" pc imgSobre" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="sobre">
                    <h1>Sobre:</h1>
                    <p>Bem-vindo ao História na Web! Aqui, você terá acesso a uma vasta gama de recursos de qualidade sobre os mais variados momentos da história, que contribuirão para o seu aprendizado.</p>
                </div>
            </div>
            <div class="cel imgSobre" data-aos="fade" data-aos-duration="1000" data-aos-delay="200">
                <div class="sobre">
                    <h1>Sobre:</h1>
                    <p>Bem-vindo ao História na Web! Aqui, você terá acesso a uma vasta gama de recursos de qualidade sobre os mais variados momentos da história, que contribuirão para o seu aprendizado.</p>
                </div>
            </div>
        </section>
        <section id="secao3">
            
    <!-- computador -->
     <div id="pc">
         <div onclick="window.location='hprimitiva.php'" target="_blank" class="banner" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
             <div class="div-img-banner" >
             <img src="img/banner1.jpg" id="img-banner">
             </div>
                <div class="ag-courses-item_bg"></div>
             <div class="texto">
                 <h4>História Primitiva <i class="fa-solid fa-arrow-right"></i></h4>
             </div>
         </div>
         <div onclick="window.location='hantiga.php'" target="_blank" class="banner" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
             <div class="div-img-banner">
                 <img src="img/banner2.jpg" id="img-banner">
             </div>
             <div class="ag-courses-item_bg"></div>
             <div class="texto">
                 <h4>História Antiga <i class="fa-solid fa-arrow-right"></i></h4>
             </div>
         </div>
         
         <div onclick="window.location='imedia.php'" target="_blank" class="banner" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
             <div class="div-img-banner">
                 <img src="img/banner3.jpg" id="img-banner">
             </div>
             <div class="ag-courses-item_bg"></div>
             <div class="texto">
                 <h4>Idade Média <i class="fa-solid fa-arrow-right"></i></h4>
             </div>
         </div>
         
         <div onclick="window.location='imoderna.php'" target="_blank" class="banner" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
             <div class="div-img-banner">
             <img src="img/banner4.jpg" id="img-banner">
             </div>
             <div class="ag-courses-item_bg"></div>
             <div class="texto">
                 <h4>Idade Moderna <i class="fa-solid fa-arrow-right"></i></h4>
             </div>
         </div>
         
         <div onclick="window.location='icontemporanea.php'" target="_blank" class="banner" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
             <div class="div-img-banner">
             <img src="img/banner5.jpg" id="img-banner">
             </div>
             <div class="ag-courses-item_bg"></div>
             <div class="texto">
                 <h4>Idade Contemporânea <i class="fa-solid fa-arrow-right"></i></h4>
             </div>
         </div>
     </div>
     <!-- fim computador -->
      <!-- celular -->
    <div id="celular">
    
        <div onclick="window.location='hprimitiva.php'" target="_blank" class="banner" data-aos="fade" data-aos-duration="1000" data-aos-delay="1">
            <div class="div-img-banner" >
            <img src="img/banner1.jpg" id="img-banner">
            </div>
            <div class="ag-courses-item_bg"></div>
            <div class="texto">
                <h4>História Primitiva <i class="fa-solid fa-arrow-right"></i></h4>
            </div>
        </div>
    
        <div onclick="window.location='hantiga.php'" target="_blank" class="banner" data-aos="fade" data-aos-duration="1000" data-aos-delay="1">
            <div class="div-img-banner">
                <img src="img/banner2.jpg" id="img-banner">
            </div>
            <div class="ag-courses-item_bg"></div>
            <div class="texto">
                <h4>História Antiga <i class="fa-solid fa-arrow-right"></i></h4>
            </div>
        </div>
    
        <div onclick="window.location='imedia.php'" target="_blank" class="banner" data-aos="fade" data-aos-duration="1000" data-aos-delay="1">
            <div class="div-img-banner">
                <img src="img/banner3.jpg" id="img-banner">
            </div>
            <div class="ag-courses-item_bg"></div>
            <div class="texto">
                <h4>Idade Média <i class="fa-solid fa-arrow-right"></i></h4>
            </div>
        </div>
    
        <div onclick="window.location='imoderna.php'" target="_blank" class="banner" data-aos="fade" data-aos-duration="1000" data-aos-delay="1">
            <div class="div-img-banner">
            <img src="img/banner4.jpg" id="img-banner">
            </div>
            <div class="ag-courses-item_bg"></div>
            <div class="texto">
                <h4>Idade Moderna <i class="fa-solid fa-arrow-right"></i></h4>
            </div>
        </div>
    
        <div onclick="window.location='icontemporanea.php'" target="_blank" class="banner" data-aos="fade" data-aos-duration="1000" data-aos-delay="1">
            <div class="div-img-banner">
            <img src="img/banner5.jpg" id="img-banner">
            </div>
            <div class="ag-courses-item_bg"></div>
            <div class="texto">
                <h4>Idade Contemporânea <i class="fa-solid fa-arrow-right"></i></h4>
            </div>
        </div>
    </div>
      <!-- fim celular -->
        </section>

        <footer>
            <div id="footer">
        
                <div class="contato">
                    <h2>Informações de Contato</h2>
                    <p><strong>SESI Caçapava:</strong></p>
                    <p>Endereço: Av. Monsenhor Theodomiro Lobo, 100, Caçapava - SP, 12285-050</p>
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
                        <li><a href="https://linktr.ee/analivialopess" target="_blank">Link para contato</a></li>
            
                        <p>Gabriel Reis de Brito</p>
                        <li><a href="https://linktr.ee/gabrielreiss" target="_blank">Link para contato</a></li>
            
                        <p>Isadora Gomes da Silva</p>
                        <li><a href="https://linktr.ee/isadoragomess" target="_blank">Link para contato</a></li>
            
                        <p>Lucas Randal Abreu Balderrama</p>
                        <li><a href="https://linktr.ee/lucasbalderrama" target="_blank">Link para contato</a></li>
                    </ul>
                </div>
            
                <div class="links-adicionais">
                    <h2>Links Adicionais</h2>
                    <ul>
                        <li><a href="termos.php">Termos de Uso</a></li>
                        <li><a href="privacidade.php">Política de Privacidade</a></li>
                    </ul>
                </div>
            </div>
        </footer> 
    </main>
</body>
</html>