<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./img/HW-icon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js" defer></script>
    <title>História Antiga</title>
    <link rel="stylesheet" href="conteudo.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="./main.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>

    
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
                    <?php
                    session_start();
                    if(isset($_SESSION['nome'])  && $_SESSION['nome'] != ''){
                        echo "<a href='index.php?id=". $_SESSION['id'] ."'>
                                <i class='bx bx-home'></i>
                                <span class='item-nav'>Início</span>
                            </a>";
                    } else {
                        echo "<a href='index.php'>
                                <i class='bx bx-home'></i>
                                <span class='item-nav'>Início</span>
                            </a>";
                    }
                    ?>
                </li>
                <li>
                    <?php
                    if(isset($_SESSION['nome'])  && $_SESSION['nome'] != ''){
                        echo "<a href='glossario.php?id=". $_SESSION['id'] ."'>
                                <i class='bx bx-book'></i>
                                <span class='item-nav'>Glossário</span>
                            </a>";
                    } else {
                        echo "<a href='glossario.php'>
                                <i class='bx bx-book'></i>
                                <span class='item-nav'>Glossário</span>
                            </a>";
                    }
                    ?>
                </li>
                <li>
                    <?php
                    if(isset($_SESSION['nome'])  && $_SESSION['nome'] != ''){
                        echo "<a href='jogos.php?id=". $_SESSION['id'] ."'>
                                <i class='bx bx-joystick'></i>
                                <span class='item-nav'>Jogos</span>
                            </a>";
                    } else {
                        echo "<a href='jogos.php'>
                                <i class='bx bx-joystick'></i>
                                <span class='item-nav'>Jogos</span>
                            </a>";
                    }
                    ?>
                </li>
                <li>
                    <a id="conteudo-select">
                        <i class="bx bx-hourglass" type='solid' id="ampulheta"></i>
                        <select id="select-nav" class="item-nav" onchange="changePag()">
                            <?php
                            if(isset($_SESSION['nome'])  && $_SESSION['nome'] != ''){
                                echo   "<option value='' id='opt-periodos'>Períodos</option>
                                        <option value='hprimitiva.php?id=".$_SESSION['id']."'>História Primitiva</option>
                                        <option value='hantiga.php?id=".$_SESSION['id']."'>História Antiga</option>
                                        <option value='imedia.php?id=".$_SESSION['id']."'>Idade Média</option>
                                        <option value='imoderna.php?id=".$_SESSION['id']."'>Idade Moderna</option>
                                        <option value='icontemporanea.php?id=".$_SESSION['id']."'>Idade Contemporânea</option>";
                            } else {
                                echo   "<option value='' id='opt-periodos'>Períodos</option>
                                        <option value='hprimitiva.php'>História Primitiva</option>
                                        <option value='hantiga.php'>História Antiga</option>
                                        <option value='imedia.php'>Idade Média</option>
                                        <option value='imoderna.php'>Idade Moderna</option>
                                        <option value='icontemporanea.php'>Idade Contemporânea</option>";
                            }
                            ?>
                        </select>
                    </a>
                </li>
            </ul>
        </div>
        <script>       
            function changePag() {
                const dropdown = document.getElementById("select-nav");
                const pagina = dropdown.value;

                if (pagina) { 
                    window.location.href = pagina; 
                }
            }
        </script>
        <?php 

        if (isset($_SESSION['nome']) && $_SESSION['nome'] != '') {
            include 'id_verify.php';
            echo "<div class='usuario'>";
            echo    "<a href='perfil.php?id=". $_SESSION['id'] ."'>";
            ?>
            <img id='user-def-nav' src='img/<?php echo $usuario['imagem_usuario']; ?>' alt=''></a>
            <?php 
            echo    "<div class='subclass-usuario'>";
            echo        "<p class='user-nome'>" . $usuario['nome_usuario'] . "</p>";
            echo        "<p id='user-nivel-acesso'>" . $usuario['tipo_usuario'] . "</p>";
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
        
        
        <section id="secao1S">
    
            <div id="historia-antiga" class="historia pc"> <!-- com texto -->
                <h2>História Antiga</h2><hr id="hr2">
                <p>
                    <h3>Civilizações da Mesopotâmia</h3>
                    <img class="img-conteudo" src="img/civil_mesopotamia.jpg" width="400" height="300" style="float: right; margin-left: 15px; margin-bottom: 2px;">
        
                    A Mesopotâmia, situada entre os rios Tigre e Eufrates, foi berço de algumas das civilizações mais antigas e avançadas da história: sumérios, babilônios, assírios e acádios. Os sumérios fundaram as primeiras cidades-estados, como Ur e Uruk, e desenvolveram a escrita cuneiforme, essencial para o registro de leis e administração. Essa escrita influenciaria profundamente as culturas vizinhas. 
        
                    Os babilônios são lembrados pelo Código de Hamurabi, um conjunto de leis que regulava a sociedade com base em uma noção de justiça retributiva: "olho por olho, dente por dente". Esse código é considerado um dos primeiros sistemas jurídicos codificados da história. Já os assírios, conhecidos por sua capacidade militar e suas conquistas, dominaram a região por meio da guerra e da administração eficaz. Eles também se destacaram pela criação de uma das primeiras bibliotecas conhecidas, a de Nínive. Essas civilizações influenciaram o desenvolvimento posterior da organização social, jurídica e cultural em todo o Oriente Médio. 
                    
                    <h3>Egito Antigo</h3>
                    <img class="img-conteudo" src="img/egito-antigo.jfif" width="400" height="300" style="float: left; margin-right: 15px; margin-bottom: 2px;">
                    O Egito Antigo se desenvolveu às margens do Rio Nilo, aproveitando suas enchentes regulares para a agricultura. Essa civilização ficou marcada pela centralização política e religiosa na figura do faraó, considerado um deus na Terra. A construção das pirâmides, como as de Gizé, demonstra o avanço em engenharia e arquitetura, assim como a crença na vida após a morte. Os egípcios praticavam mumificação para preservar os corpos e acreditavam que a alma precisava de um corpo intacto para alcançar a vida eterna. 
        
                    A religião e a organização social eram registradas em hieróglifos, uma forma complexa de escrita que utilizava símbolos para representar ideias e sons. O papiro, uma espécie de papel produzido a partir de uma planta local, permitiu que registros administrativos e religiosos fossem preservados. As práticas culturais, os mitos e o conhecimento técnico dos egípcios influenciaram muitas civilizações posteriores. 
        
                    <h3>Grécia Antiga</h3>
                    <img class="img-conteudo" src="img/grecia-antiga.jfif" width="400" height="300" style="float: right; margin-left: 15px; margin-bottom: 2px;">

                    A Grécia Antiga é conhecida como o berço da filosofia, democracia, arte e ciência ocidental. Na cidade-estado de Atenas, surgiu a primeira experiência democrática, na qual os cidadãos participavam diretamente das decisões políticas. 
        
                    Filósofos como Sócrates, Platão e Aristóteles influenciaram o pensamento ocidental por séculos, discutindo ética, política e o papel da razão. Além disso, a literatura grega, com obras épicas como a Ilíada e a Odisseia, de Homero, moldou a tradição literária ocidental. 
        
                    A arquitetura e arte gregas destacam-se pela busca da beleza e harmonia, com templos como o Partenon e esculturas que exaltavam o corpo humano. As Guerras Médicas, travadas entre gregos e persas, fortaleceram o espírito de união entre as cidades-estado e consolidaram a identidade grega. A Grécia também se destacou nos Jogos Olímpicos e na tragédia teatral, expressando valores e reflexões sociais por meio das artes cênicas. 
        
                    <h3>Roma Antiga</h3>
                    <img class="img-conteudo" src="img/roma_antiga.jfif" width="400" height="300" style="float: left; margin-right: 15px; margin-bottom: 2px;">

                    A Roma Antiga evoluiu de uma pequena cidade às margens do Rio Tibre para um dos maiores impérios da história. No período da República Romana, o governo era liderado por senadores e magistrados, sendo um modelo inspirador para muitas democracias modernas. Durante as Guerras Púnicas, Roma derrotou Cartago e ampliou sua influência no Mediterrâneo. Posteriormente, a República entrou em crise e foi substituída pelo Império Romano, liderado por imperadores como Júlio César e Augusto. 
        
                    O direito romano, codificado e aprimorado ao longo dos séculos, tornou-se um dos pilares do sistema jurídico ocidental. A expansão territorial trouxe uma diversidade cultural, mas também desafios de administração e defesa, culminando na divisão do império e, eventualmente, na queda de Roma em 476 d.C. No entanto, a cultura, o direito e a arquitetura romanos deixaram uma herança duradoura. Estruturas como o Coliseu e o Pantheon exemplificam a grandiosidade e engenhosidade da engenharia romana. 
        
                    Essas quatro civilizações são fundamentais para a compreensão do desenvolvimento da humanidade. A Mesopotâmia nos deu a escrita e as primeiras leis; o Egito consolidou a ideia de governo centralizado e crenças espirituais complexas; a Grécia formulou princípios filosóficos e políticos que influenciam até hoje; e Roma estruturou o direito e a administração, moldando grande parte do mundo contemporâneo. 
                </p>
            </div>

            <div id="historia-antiga" class="historia cel">
                <h2>História Antiga</h2><hr id="hr2">
                <h3>Civilizações da Mesopotâmia</h3>
                <p>A Mesopotâmia, entre os rios Tigre e Eufrates, abrigou civilizações como sumérios, babilônios e assírios. Os sumérios criaram a escrita cuneiforme, essencial para a administração. Os babilônios instituíram o Código de Hamurabi, um dos primeiros conjuntos de leis, e os assírios se destacaram pela capacidade militar e pela Biblioteca de Nínive.</p>
    
                <h3>Egito Antigo</h3>
                <p>O Egito Antigo desenvolveu-se ao longo do Rio Nilo, com centralização política no faraó e a construção de pirâmides, como as de Gizé. A mumificação refletia a crença na vida após a morte. Hieróglifos e papiro foram usados para registrar a cultura e religião, influenciando civilizações posteriores.</p>
    
                <h3>Grécia Antiga</h3>
                <p>A Grécia Antiga, berço da democracia e filosofia, teve Atenas como pioneira na política participativa. Filósofos como Sócrates e Aristóteles moldaram o pensamento ocidental. A arquitetura, literatura épica e arte gregas também são legados importantes, com destaque para o Partenon e obras como a "Ilíada".</p>
    
                <h3>Roma Antiga</h3>
                <p>Roma passou de cidade-estado a grande império. A República Romana inspirou democracias modernas, e o direito romano influenciou o sistema jurídico ocidental. Com a expansão do Império, Roma deixou um legado duradouro na arquitetura, como o Coliseu, e na cultura.</p>
    
                <p>Essas civilizações são fundamentais para entender a evolução da humanidade, cada uma contribuindo com avanços essenciais em governança, cultura e leis.</p>
            </div>
        </section>

        <section class="historia">
            <h2>Conteúdos adicionais</h2>
            <div class="video-grid">
                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/ICqKQU42mjQ?si=Ql-KX-krKf1kGeXz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/-JLY_hoJUNE?si=Ml8fXHscZb2PzBDo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/TNmwlPfSRR0?si=aiDTqA8qvsidVblH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/qh7CKGQvTwY?si=-SRwMLk5pmxtHG6U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/fZ6tc3fvA3w?si=a2e_KtpV9AuVasQd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/SfoAgpJwF5g?si=lhACW1YuTixTysam" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>



        <section class="historia">
            <h2>Veja também</h2>
            <div class="banner-grid">

                <?php if(isset($_SESSION['nome']) && $_SESSION['nome'] != ''){
                        echo "<a href='hprimitiva.php?id=".$_SESSION['id']."'>";
                    } else {
                        echo "<a href='hprimitiva.php'>";
                    }?>
                    <div class="banner">
                        <img src="img/banner1.jpg" id="img-banner" alt="Imagem História Primitiva">
                        <div class="texto">
                            <h4>História Primitiva</h4>
                        </div>
                    </div>
                </a>
    
                <?php if(isset($_SESSION['nome']) && $_SESSION['nome'] != ''){
                        echo "<a href='imedia.php?id=".$_SESSION['id']."'>";
                    } else {
                        echo "<a href='imedia.php'>";
                    }?>
                    <div class="banner">
                        <img src="img/banner3.jpg" id="img-banner" alt="Imagem Idade Média">
                        <div class="texto">
                            <h4>Idade Média</h4>
                        </div>
                    </div>
                </a>
    
                <?php if(isset($_SESSION['nome']) && $_SESSION['nome'] != ''){
                        echo "<a href='imoderna.php?id=".$_SESSION['id']."'>";
                    } else {
                        echo "<a href='imoderna.php'>";
                    }?>
                    <div class="banner">
                        <img src="img/banner4.jpg" id="img-banner" alt="Imagem Idade Moderna">
                        <div class="texto">
                            <h4>Idade Moderna</h4>
                        </div>
                    </div>
                </a>
    
                <?php if(isset($_SESSION['nome']) && $_SESSION['nome'] != ''){
                        echo "<a href='icontemporanea.php?id=".$_SESSION['id']."'>";
                    } else {
                        echo "<a href='icontemporanea.php'>";
                    }?>
                    <div class="banner">
                        <img src="img/banner5.jpg" id="img-banner" alt="Imagem Idade Contemporânea">
                        <div class="texto">
                            <h4>Idade Contemporânea</h4>
                        </div>
                    </div>
                </a>
            </div>
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
            </div>
        </footer> 
    </main>

    <a href="#" class="btn" id="scrollToTopButton"></a>

    
</body>
</html>