<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js" defer></script>
    <title>Idade Moderna</title>
    <link rel="stylesheet" href="conteudo.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="./main.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
    <link rel="shortcut icon" href="./img/HW-icon.png" type="image/x-icon">
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
        <section id="secao4">
    
            <div id="idade-moderna" class="historia pc"> <!-- com texto -->
                <h2>Idade Moderna</h2> <hr id="hr4">
                
                <p><h3>Renascimento</h3> 
                <img class="img-conteudo" src="img/renascimento.jfif" width="400" height="300" style="float: right; margin-left: 15px; margin-bottom: 2px;">
                O Renascimento foi um movimento cultural que emergiu na Europa entre os séculos XIV e XVI, caracterizado pela redescoberta do conhecimento clássico da Grécia e Roma. Este período trouxe um foco intenso no humanismo, que enfatizava a dignidade e o potencial humano. Artistas e pensadores como Leonardo da Vinci, Michelangelo e Galileu Galilei foram figuras proeminentes, promovendo inovações nas artes e nas ciências. A arte renascentista, com seu uso da perspectiva e representação realista, mudou para sempre o cenário artístico europeu. Além disso, o Renascimento também incentivou o desenvolvimento das ciências naturais e o pensamento crítico, estabelecendo as bases para a Revolução Científica que se seguiria. 
    
                <h3>Reforma Protestante</h3> 
                <img class="img-conteudo" src="img/reforma-protestante.jfif" width="400" height="300" style="float: left; margin-right: 15px; margin-bottom: 2px;">
                A Reforma Protestante, iniciada no século XVI, foi um movimento religioso que desafiou a autoridade da Igreja Católica. Martinho Lutero, com suas 95 Teses em 1517, criticou práticas como a venda de indulgências. O movimento rapidamente se espalhou pela Europa, resultando no surgimento de várias denominações cristãs, como o luteranismo e o calvinismo. Este processo também gerou uma reação da Igreja Católica, conhecida como Contrarreforma, que buscou revitalizar a Igreja e combater a disseminação do protestantismo. A Reforma teve um impacto profundo na religião, na política e na sociedade, promovendo a liberdade de interpretação das escrituras e uma nova relação entre o indivíduo e Deus. 
    
                <h3>Descobrimentos</h3> 
                <img class="img-conteudo" src="img/descobrimentos.jfif" width="400" height="300" style="float: right; margin-left: 15px; margin-bottom: 2px;">
                A Era dos Descobrimentos, que se estendeu do final do século XV até o século XVII, foi marcada por grandes navegações e a expansão marítima europeia, especialmente por nações como Portugal e Espanha. A expedição de Cristóvão Colombo em 1492, que resultou na descoberta das Américas, e a viagem de Vasco da Gama à Índia foram eventos-chave. Esse período de exploração levou ao contato entre diferentes culturas e à colonização de novas terras, estabelecendo rotas comerciais que mudaram o comércio global. Os europeus trouxeram novas culturas e tecnologias para as Américas, mas também causaram devastação nas populações indígenas. 
    
                <h3>Colonização</h3> 
                <img class="img-conteudo" src="img/colonizacao.jfif" width="400" height="300" style="float: left; margin-right: 15px; margin-bottom: 2px;">
                A colonização foi o processo pelo qual as potências europeias estabeleceram impérios coloniais na América, na África e na Ásia. Este fenômeno foi impulsionado pelo desejo de riquezas e pela expansão territorial. As colônias eram frequentemente exploradas economicamente, com recursos sendo extraídos para beneficiar as metrópoles europeias. O sistema colonial era rigidamente controlado, com monopólios comerciais que favoreciam os interesses das potências colonizadoras. Além disso, a colonização levou à escravidão e ao deslocamento de milhões de pessoas, com impactos sociais, culturais e econômicos duradouros. 
    
                <h3>Absolutismo</h3> 
                <img class="img-conteudo" src="img/absolutismo.jfif" width="400" height="300" style="float: right; margin-left: 15px; margin-bottom: 2px;">
                O absolutismo foi um sistema político que predominou na Idade Moderna, onde o poder estava centralizado nas mãos de monarcas absolutos, como Luís XIV da França, conhecido como o "Rei Sol". Este sistema era justificado pela ideia da "predestinação divina", que considerava o rei como um representante de Deus na Terra. As monarquias absolutistas buscavam controlar todas as esferas da vida, incluindo a economia, a religião e a justiça. O absolutismo, embora eficaz em unificar o poder, eventualmente enfrentou resistência que levaria a revoluções e a um movimento em direção a governos mais representativos.
    
                <h3>Revoluções Científicas e Iluminismo</h3> 
                <img class="img-conteudo" src="img/iluminismo.webp" width="400" height="300" style="float: left; margin-right: 15px; margin-bottom: 2px;">
                A Revolução Científica, que começou no século XVI, trouxe avanços significativos no entendimento do mundo natural, com figuras como Copérnico, Kepler e Newton desafiando as visões tradicionais e promovendo a observação empírica. O Iluminismo, que se seguiu no século XVIII, foi um movimento intelectual que enfatizou a razão, a ciência e os direitos individuais. Pensadores como Voltaire, Rousseau e Montesquieu questionaram a autoridade e os dogmas, defendendo a liberdade e a igualdade. O impacto do Iluminismo foi profundo, influenciando revoluções políticas, incluindo a Revolução Americana e a Revolução Francesa, que buscavam implementar os princípios da razão e da justiça social nas estruturas de governo. </p>
            </div>
    
            <div id="idade-moderna" class="historia cel">
                <h2>Idade Moderna</h2><hr id="hr4">
                <h3>Renascimento</h3>
                <p>O Renascimento (séculos XIV-XVI) foi um movimento cultural que redescobriu o conhecimento clássico da Grécia e Roma. Marcado pelo humanismo, destacou o potencial humano e trouxe inovações nas artes e ciências. Figuras como Leonardo da Vinci e Michelangelo transformaram a arte, enquanto Galileu Galilei impulsionou a ciência. Esse período lançou as bases para a Revolução Científica.</p>
    
                <h3>Reforma Protestante</h3>
                <p>A Reforma Protestante (século XVI), iniciada por Martinho Lutero em 1517, desafiou a Igreja Católica, criticando práticas como a venda de indulgências. Isso resultou no surgimento de novas denominações cristãs, como o luteranismo e o calvinismo, e na Contrarreforma Católica. A Reforma transformou a religião e a política europeias.</p>
    
                <h3>Descobrimentos</h3>
                <p>A Era dos Descobrimentos (séculos XV-XVII) foi impulsionada por nações como Portugal e Espanha. Navegações como as de Cristóvão Colombo e Vasco da Gama expandiram o contato entre culturas e abriram novas rotas comerciais, mas também levaram à colonização e à destruição de civilizações indígenas.</p>
    
                <h3>Colonização</h3>
                <p>A colonização europeia na América, África e Ásia foi motivada por interesses econômicos e territoriais. As colônias eram exploradas em benefício das metrópoles, levando à escravidão e ao deslocamento de milhões de pessoas, com consequências duradouras nas sociedades colonizadas.</p>
    
                <h3>Absolutismo</h3>
                <p>O absolutismo foi um sistema político da Idade Moderna, onde monarcas como Luís XIV da França concentravam todo o poder. Justificado pela ideia da "predestinação divina", o absolutismo controlava a economia, religião e justiça, mas enfrentou resistência que culminaria em revoluções.</p>
    
                <h3>Revoluções Científicas e Iluminismo</h3>
                <p>A Revolução Científica (século XVI) trouxe avanços como as teorias de Copérnico e Newton, enquanto o Iluminismo (século XVIII) enfatizou a razão, a ciência e os direitos individuais. Pensadores como Voltaire e Rousseau influenciaram as revoluções Americana e Francesa, promovendo liberdade e justiça social.</p>
            </div>
        </section>

        <section class="historia">
            <h2>Conteúdos adicionais</h2>
            <div class="video-grid">
                <div class="video-card">
                    <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/fxqxH5A3Ok8?si=gJFsGZTliYkWutDj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="video-card">
                    <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/aKYtD0e9NZY?si=VLgYnAGHkNEYAgs9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="video-card">
                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/4eHP0WBvU_4?si=2x6NoXLkUJPvHniR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="video-card">
                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/IIReUDezw-E?si=_rFkbUmKBQhQcXQ2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="video-card">
                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/TZyNLIAwCZ0?si=lm606fopF7HlhJe6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="video-card">
                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/1IChUwbKsOg?si=OnYLsB9gonDOvDkR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
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