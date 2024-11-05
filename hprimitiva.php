<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js" defer></script>
    <title>História Primitiva</title>
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
        <?php session_start();

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

        <section id="secao4">
            <div id="historia-primitiva" class="historia pc"> <!-- com texto -->
                    <h2>História Primitiva</h2><hr id="hr1">
                    <p>

                        <h3>Paleolítico </h3>
                        
                        Foi o primeiro período da Pré-História, quando os hominídeos eram nômades e tinham como práticas cotidianas a caça, pesca e colheita de frutos. Os primeiros grupos humanos procuravam adaptar-se ao ambiente em que viviam e buscavam a sobrevivência por meio da caça de animais, pesca de peixes nos rios e colheita de vegetais e frutos disponíveis por onde passavam. Os primeiros seres humanos eram nômades e estavam em constante deslocamento, fugindo das intempéries da natureza ou de animais selvagens, como também em busca de espaço que pudesse fornecer alimentos ou proteção para o momento. A principal transformação ocorrida nesse período foi a descoberta do fogo. 
            
                        A descoberta do fogo transformou a vida dos hominídeos, pois, a partir disso, eles puderam ficar nas cavernas com segurança e se aquecer do frio. Além disso, o fogo assava os alimentos e espantava os animais silvestres. 
            
                        Outra transformação importante no Paleolítico foi o uso da pedra lascada. As experiências adquiridas a partir da vivência deram aos hominídeos conhecimento sobre a melhor maneira de caçar, pescar e colher. Ao lascarem as pedras, os instrumentos utilizados no dia a dia se tornavam mais eficazes. As lanças ficaram pontiagudas, o que favorecia os ataques dos primeiros grupos humanos quando caçavam animais. 
                        
            
                        <h3>Pintura Rupestre no Paleolítico</h3>
                        
                        Os primeiros registros da pintura rupestre são do Paleolítico. Ao se estabelecerem nas cavernas, seja para se proteger do frio, seja como abrigo provisório, os hominídeos desenhavam nas paredes os animais capturados em uma caça ou os que eles desejavam caçar. Essas pinturas eram feitas a partir de sangue de animais ou folhas e flores. A arte rupestre é a principal fonte de informações sobre a Pré-História. 
            
                        As pinturas representam os seres humanos de forma isolada ou realizando atividades do cotidiano. Os animais representados nas paredes das cavernas eram aqueles que os hominídeos conseguiam capturar durante as caças ou aqueles que os atacavam. Outra característica da arte rupestre é a religiosidade. Algumas pinturas representam os primeiros rituais religiosos praticados no Paleolítico. 
                        
            
                        <h3>Neolítico</h3>
                        
                        O período Neolítico ocorreu do ano 7000 a.C. até 2500 a.C., sendo conhecido também como período da Pedra Polida. Foi um momento marcante da Pré-História, pois a vida do humano primitivo passou por diversas transformações nele. Os grupos humanos sedentarizaram-se, isto é, fixaram-se em um único lugar e intensificaram a prática da agricultura. 
            
                        A sedentarização também influenciou nessa fixação dos grupos em um único lugar. A prática da agricultura possibilitou o plantio e a colheita de sementes. Isso influenciou na produção de peças feitas de argila para armazenar essa produção. Os animais selvagens eram mortos para afastar-se o perigo contra os grupos, ou para a retirada de seus ossos e dentes para a fabricação de armas, ou ainda para a alimentação; e os animais menores eram domesticados e introduzidos no cotidiano dos humanos, como cachorros e algumas aves. 
            
                        Durante o Neolítico, os hominídeos utilizavam a pedra polida para fabricar instrumentos mais eficazes, pois por meio dela havia maior precisão nos cortes. Esses instrumentos poderiam ser utilizados para caçar ou pescar e para atacar grupos inimigos. 
            
                        <h3>Revolução Agrícola no Neolítico</h3>
            
                        A revolução agrícola foi uma das marcas do período Neolítico. Com a sedentarização dos grupos humanos, pôde-se observar e reconhecer os fenômenos naturais e explorar a natureza em benefício do grupo. Além disso, o primitivo pôde utilizar a terra, plantando e colhendo seus frutos. Com essa mudança, aumentou-se o número populacional e os grupos humanos transformaram-se em sociedades mais complexas, abrindo espaço para a formação de um Estado que as administrasse. 
            
                        O período neolítico (8 mil a.C. a 5 mil a.C.) foi marcado pelo fenômeno que ficou denominado primeira revolução agrícola. Foi nesse período da história que ocorreu o domínio do fogo. Essa mudança possibilitou o início do controle de técnicas para dominar a produção de alimentos. As ferramentas rústicas do período paleolítico (3,5 milhões a.C. a 8 mil a.C.) foram aperfeiçoadas para a atividade agrícola. É por isso que essa fase também é denominada Revolução Neolítica. Além da agricultura, o homem passou a dominar a criação de animais. 
                </div>
                
                <div id="historia-primitiva" class="historia cel">
                    <h2>História Primitiva</h2><hr id="hr1">
                        <h3>Paleolítico</h3>
                        <p>Foi o primeiro período da Pré-História, marcado pelo nomadismo e práticas de caça, pesca e coleta de frutos. A principal transformação foi a descoberta do fogo, que trouxe segurança, calor e proteção, além do uso da pedra lascada, que melhorou as ferramentas de caça.</p>
            
                        <h3>Pintura Rupestre no Paleolítico</h3>
                        <p>As pinturas rupestres do Paleolítico, feitas com sangue de animais ou plantas, registravam caças e rituais religiosos. Elas são a principal fonte de informação sobre a vida dos hominídeos.</p>
            
                        <h3>Neolítico</h3>
                        <p>O Neolítico, ou período da Pedra Polida (7000 a.C. - 2500 a.C.), foi marcado pela sedentarização, agricultura e domesticação de animais. As ferramentas de pedra polida permitiam maior precisão nas atividades diárias.</p>
            
                        <h3>Revolução Agrícola no Neolítico</h3>
                        <p>A revolução agrícola trouxe a prática do cultivo e domesticação de animais, aumentando a população e levando à formação de sociedades mais complexas e à criação de um Estado. Houve avanços nas técnicas agrícolas e no uso de ferramentas.</p>
                </div>
                    </p>
        </section>

        <!-- partial:index.partial.html -->
<!-- partial -->

        <section class="historia">
            <h2>Conteúdos adicionais</h2>
            <div class="video-grid">
                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/Ce2cfR-g508?si=p5KHdQjDGbMAmReO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/jcb6VrYNxYc?si=wyHTmFMM2f9BDI3v" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/h2h24Q_J7M8?si=YzExuYcASNGmHWr7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/M1hzC3DcOSY?si=kfD3dnOLIdEUC5tt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/trxtcdsbbFo?si=Km8_sqfozLPHJvcz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/nDsr0Ge47nE?si=NrvIt1Vpq1rUyzeq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>

        <section class="historia">
            <h2>Veja também</h2>
            <div class="banner-grid">
                <a href="hantiga.php">
                    <div class="banner">
                        <div class="div-img-banner">
                            <img src="img/banner2.jpg" id="img-banner" alt="Imagem História Antiga">
                        </div>
                        <div class="texto">
                            <h4>História Antiga</h4>
                        </div>
                    </div>
                </a>
    
                <a href="imedia.php">
                    <div class="banner">
                        <div class="div-img-banner">
                            <img src="img/banner3.jpg" id="img-banner" alt="Imagem Idade Média">
                        </div>
                        <div class="texto">
                            <h4>Idade Média</h4>
                        </div>
                    </div>
                </a>
    
                <a href="imoderna.php">
                    <div class="banner">
                        <div class="div-img-banner">
                            <img src="img/banner4.jpg" id="img-banner" alt="Imagem Idade Moderna">
                        </div>
                        <div class="texto">
                            <h4>Idade Moderna</h4>
                        </div>
                    </div>
                </a>
    
                <a href="icontemporanea.php">
                    <div class="banner">
                        <div class="div-img-banner">
                            <img src="img/banner5.jpg" id="img-banner" alt="Imagem Idade Contemporânea">
                        </div>
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