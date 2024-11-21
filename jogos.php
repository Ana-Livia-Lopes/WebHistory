<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jogos</title>
        <script src="./main.js" defer></script>
        <link rel="stylesheet" href="css/jogos.css">
        <link rel="shortcut icon" href="./img/HW-icon.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Reem+Kufi:wght@400..700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        </head>
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
      <body>
        <section class="secao1">
          <div class="div-jogo">
            <div class="texto-secao">
              <h1>Navegue na história através de nossos jogos</h1>
              <p class="p-jogos">Teste seus conhecimentos sobre eventos históricos, figuras importantes e fatos curiosos, enquanto se diverte e aprende.</p>
            </div>
          </div>
        </section>
        <div class="quiz"> 
          <form>
              <div class="btn" onclick="Conteudo('linha'); resetQuiz(formId, resultDisplayId)" ><div id="texto">Quiz - História Primitiva</div></div>
          </form>
          <div id="linha">
          <section class="historia">
            <h2>H.W. Quiz - História Primitiva</h2>
            <div id="quiz-container">
            <form id="quizForm">
                <div class="question" id="question1">
                    <p>1. Qual foi a principal transformação tecnológica no período Paleolítico?</p>
                    <label><input type="radio" name="q1" value="Uso de metais para fabricação de ferramentas"> Uso de metais para fabricação de ferramentas</label><br>
                    <label><input type="radio" name="q1" value="Construção de moradias permanentes"> Construção de moradias permanentes</label><br>
                    <label><input type="radio" name="q1" value="Descoberta do fogo"> Descoberta do fogo</label><br>
                    <label><input id="end_options" type="radio" name="q1" value="Criação de sistemas de escrita"> Criação de sistemas de escrita</label>
                </div>

                <div class="question" id="question2">
                    <p>2. O que caracteriza o estilo de vida dos primeiros hominídeos no período Paleolítico?</p>
                    <label><input type="radio" name="q2" value="Sedentarismo e agricultura"> Sedentarismo e agricultura</label><br>
                    <label><input type="radio" name="q2" value="Vida nômade com caça, pesca e coleta"> Vida nômade com caça, pesca e coleta</label><br>
                    <label><input type="radio" name="q2" value="Domesticaram animais de grande porte"> Domesticaram animais de grande porte</label><br>
                    <label><input id="end_options" type="radio" name="q2" value="Construíram cidades e aldeias"> Construíram cidades e aldeias</label>
                </div>

                <div class="question" id="question3">
                    <p>3. Quais materiais eram utilizados para fazer as pinturas rupestres no Paleolítico?</p>
                    <label><input type="radio" name="q3" value="Tinta à base de óleo vegetal"> Tinta à base de óleo vegetal</label><br>
                    <label><input type="radio" name="q3" value="Sangue de animais, folhas e flores"> Sangue de animais, folhas e flores</label><br>
                    <label><input type="radio" name="q3" value="Pó de argila misturado com água"> Pó de argila misturado com água</label><br>
                    <label><input id="end_options" type="radio" name="q3" value="Carvão e resina de árvores"> Carvão e resina de árvores</label>
                </div>

                <div class="question" id="question4">
                    <p>4. Qual foi uma mudança importante ocorrida no Neolítico?</p>
                    <label><input type="radio" name="q4" value="Desenvolvimento da metalurgia"> Desenvolvimento da metalurgia</label><br>
                    <label><input type="radio" name="q4" value="Início da escrita"> Início da escrita</label><br>
                    <label><input type="radio" name="q4" value="Sedentarização e prática da agricultura"> Sedentarização e prática da agricultura</label><br>
                    <label><input id="end_options" type="radio" name="q4" value="Uso da roda para transporte"> Uso da roda para transporte</label>
                </div>

                <div class="question" id="question5">
                    <p>5. O que ficou conhecido como Revolução Agrícola no Neolítico?</p>
                    <label><input type="radio" name="q5" value="A utilização de metais para fabricar armas"> A utilização de metais para fabricar armas</label><br>
                    <label><input type="radio" name="q5" value="A criação de instrumentos de pedra lascada"> A criação de instrumentos de pedra lascada</label><br>
                    <label><input type="radio" name="q5" value="O domínio da agricultura e criação de animais"> O domínio da agricultura e criação de animais</label><br>
                    <label><input id="end_options" type="radio" name="q5" value="A construção de abrigos em cavernas"> A construção de abrigos em cavernas</label>
                </div>

                <button id="button-quiz" type="button" onclick="checkAnswers('quizForm', 'result')">Enviar</button>
                <button id="button-quiz" type="button" onclick="resetQuiz('quizForm', 'result')">Resetar</button>
            </form>

                <p id="result"></p>
            </div>
        </section>
          </div>
          <form>
              <div class="btn" onclick="Conteudo('linha2')" ><div id="texto">Quiz - História Antiga</div></div>
          </form>
          <div id="linha2">
          <section class="historia">
            <h2>H.W. Quiz - História Antiga</h2>
            <div id="quiz-container">
                <form id="quizForm2">
                    <div class="question" id="question6">
                        <p>1. Qual civilização desenvolveu a escrita cuneiforme?</p>
                        <label><input type="radio" name="q6" value="Babilônios"> Babilônios</label><br>
                        <label><input type="radio" name="q6" value="Sumérios"> Sumérios</label><br>
                        <label><input type="radio" name="q6" value="Assírios"> Assírios</label><br>
                        <label><input id="end_options" type="radio" name="q6" value="Acádios"> Acádios</label>
                    </div>

                    <div class="question" id="question7">
                        <p>2. O Código de Hamurabi é associado a qual civilização?</p>
                        <label><input type="radio" name="q7" value="Sumérios"> Sumérios</label><br>
                        <label><input type="radio" name="q7" value="Babilônios"> Babilônios</label><br>
                        <label><input type="radio" name="q7" value="Egípcios"> Egípcios</label><br>
                        <label><input id="end_options" type="radio" name="q7" value="Gregos"> Gregos</label>
                    </div>

                    <div class="question" id="question8">
                        <p>3. O que os egípcios praticavam para preservar os corpos?</p>
                        <label><input type="radio" name="q8" value="Embalsamamento"> Embalsamamento</label><br>
                        <label><input type="radio" name="q8" value="Cremacão"> Cremacão</label><br>
                        <label><input type="radio" name="q8" value="Mumificação"> Mumificação</label><br>
                        <label ><input id="end_options" type="radio" name="q8" value="Sepultamento"> Sepultamento</label>
                    </div>

                    <div class="question" id="question9">
                        <p>4. Qual filósofo grego é conhecido por sua contribuição à ética e à política?</p>
                        <label><input type="radio" name="q9" value="Aristóteles"> Aristóteles</label><br>
                        <label><input type="radio" name="q9" value="Platão"> Platão</label><br>
                        <label><input type="radio" name="q9" value="Sócrates"> Sócrates</label><br>
                        <label ><input id="end_options" type="radio" name="q9" value="Homero"> Homero</label>
                    </div>

                    <div class="question" id="question10">
                        <p>5. Qual estrutura é um exemplo da engenharia romana?</p>
                        <label><input type="radio" name="q10" value="Pirâmides de Gizé"> Pirâmides de Gizé</label><br>
                        <label><input type="radio" name="q10" value="Partenon"> Partenon</label><br>
                        <label><input type="radio" name="q10" value="Coliseu"> Coliseu</label><br>
                        <label><input id="end_options" type="radio" name="q10" value="Templo de Apolo"> Templo de Apolo</label>
                    </div>

                    <button id="button-quiz" type="button" onclick="checkAnswers2('quizForm2', 'result')">Enviar</button>
                    <button id="button-quiz" type="button" onclick="resetQuiz('quizForm2', 'result')">Resetar</button>

                </form>

                <p id="result"></p>
            </div>
        </section>
          </div>
          <form>
              <div class="btn" onclick="Conteudo('linha3')" ><div id="texto">Quiz - Idade Média</div></div>
          </form>
          <div id="linha3">
          <section class="historia">
            <h2>H.W. Quiz - Idade Média</h2>
            <div id="quiz-container">
                <form id="quizForm3">
                    <div class="question" id="question11">
                        <p>1. Qual foi uma das causas do surgimento do feudalismo?</p>
                        <label><input type="radio" name="q11" value="Aumento da população urbana"> Aumento da população urbana</label><br>
                        <label><input type="radio" name="q11" value="Invasões bárbaras e insegurança"> Invasões bárbaras e insegurança</label><br>
                        <label><input type="radio" name="q11" value="Estabelecimento de comércio internacional"> Estabelecimento de comércio internacional</label><br>
                        <label><input type="radio" name="q11" value="Descoberta de novas rotas marítimas" id="end_options"> Descoberta de novas rotas marítimas</label>
                    </div>

                    <div class="question" id="question12">
                        <p>2. Qual civilização é conhecida por ter estabelecido o Califado de Córdoba na Península Ibérica?</p>
                        <label><input type="radio" name="q12" value="Romanos"> Romanos</label><br>
                        <label><input type="radio" name="q12" value="Vikings"> Vikings</label><br>
                        <label><input type="radio" name="q12" value="Árabes"> Árabes</label><br>
                        <label><input type="radio" name="q12" value="Francos" id="end_options"> Francos</label>
                    </div>

                    <div class="question" id="question13">
                        <p>3. Qual foi o impacto das Cruzadas na Europa?</p>
                        <label><input type="radio" name="q13" value="Causaram a destruição total de Jerusalém"> Causaram a destruição total de Jerusalém</label><br>
                        <label><input type="radio" name="q13" value="Fortaleceram o isolamento cultural europeu"> Fortaleceram o isolamento cultural europeu</label><br>
                        <label><input type="radio" name="q13" value="Promoveram troca cultural e comercial com a Ásia"> Promoveram troca cultural e comercial com a Ásia</label><br>
                        <label><input type="radio" name="q13" value="Diminuíram o poder da Igreja Católica" id="end_options"> Diminuíram o poder da Igreja Católica</label>
                    </div>

                    <div class="question" id="question14">
                        <p>4. Qual foi o impacto da Peste Negra na economia europeia?</p>
                        <label><input type="radio" name="q14" value="Causou um aumento na mão de obra disponível"> Causou um aumento na mão de obra disponível</label><br>
                        <label><input type="radio" name="q14" value="Reduziu o valor dos salários devido ao excesso de trabalhadores"> Reduziu o valor dos salários devido ao excesso de trabalhadores</label><br>
                        <label><input type="radio" name="q14" value="Levou à valorização dos salários devido à escassez de trabalhadores"> Levou à valorização dos salários devido à escassez de trabalhadores</label><br>
                        <label><input type="radio" name="q14" value="Teve pouco impacto na economia, sendo apenas uma crise de saúde" id="end_options"> Teve pouco impacto na economia, sendo apenas uma crise de saúde</label>
                    </div>

                    <div class="question" id="question15">
                        <p>5. Qual foi o evento que resultou na divisão da Igreja Cristã entre Católica e Ortodoxa?</p>
                        <label><input type="radio" name="q15" value="Cruzadas"> Cruzadas</label><br>
                        <label><input type="radio" name="q15" value="Renascimento Carolíngio"> Renascimento Carolíngio</label><br>
                        <label><input type="radio" name="q15" value="Cisma do Oriente"> Cisma do Oriente</label><br>
                        <label><input type="radio" name="q15" value="Queda do Império Romano do Ocidente" id="end_options"> Queda do Império Romano do Ocidente</label>
                    </div>

                    <button id="button-quiz" type="button" onclick="checkAnswers3('quizForm3', 'result')">Enviar</button>
                    <button id="button-quiz" type="button" onclick="resetQuiz('quizForm3', 'result')">Resetar</button>
                </form>

                <p id="result"></p>
            </div>
          </div>
          <form>
              <div class="btn" onclick="Conteudo('linha4')" ><div id="texto">Quiz - Idade Moderna</div></div>
          </form>
          <div id="linha4">
          <section class="historia">
            <h2>H.W. Quiz - Idade Moderna</h2>
            <div id="quiz-container">
                <form id="quizForm4">
                    <div class="question" id="question16">
                        <p>1. Quem foi uma figura proeminente do Renascimento?</p>
                        <label><input type="radio" name="q16" value="Martinho Lutero"> Martinho Lutero</label><br>
                        <label><input type="radio" name="q16" value="Leonardo da Vinci"> Leonardo da Vinci</label><br>
                        <label><input type="radio" name="q16" value="Vasco da Gama"> Vasco da Gama</label><br>
                        <label><input type="radio" name="q16" value="Luís XIV" id="end_options"> Luís XIV</label>
                    </div>

                    <div class="question" id="question17">
                        <p>2. Qual evento é considerado o início da Reforma Protestante?</p>
                        <label><input type="radio" name="q17" value="Descobrimento das Américas"> Descobrimento das Américas</label><br>
                        <label><input type="radio" name="q17" value="Publicação das 95 Teses de Lutero"> Publicação das 95 Teses de Lutero</label><br>
                        <label><input type="radio" name="q17" value="Revolução Francesa"> Revolução Francesa</label><br>
                        <label><input type="radio" name="q17" value="Início do Iluminismo" id="end_options"> Início do Iluminismo</label>
                    </div>

                    <div class="question" id="question18">
                        <p>3. Qual foi uma consequência das Grandes Navegações?</p>
                        <label><input type="radio" name="q18" value="Início do Renascimento"> Início do Renascimento</label><br>
                        <label><input type="radio" name="q18" value="Publicação das 95 Teses"> Publicação das 95 Teses</label><br>
                        <label><input type="radio" name="q18" value="Contato entre diferentes culturas e colonização"> Contato entre diferentes culturas e colonização</label><br>
                        <label><input type="radio" name="q18" value="Declínio do absolutismo" id="end_options"> Declínio do absolutismo</label>
                    </div>

                    <div class="question" id="question19">
                        <p>4. Qual das seguintes características é associada ao absolutismo?</p>
                        <label><input type="radio" name="q19" value="Divisão de poderes"> Divisão de poderes</label><br>
                        <label><input type="radio" name="q19" value="Controle total do monarca"> Controle total do monarca</label><br>
                        <label><input type="radio" name="q19" value="Liberdade religiosa"> Liberdade religiosa</label><br>
                        <label><input type="radio" name="q19" value="Democracia direta" id="end_options"> Democracia direta</label>
                    </div>

                    <div class="question" id="question20">
                        <p>5. O que foi um objetivo do Iluminismo?</p>
                        <label><input type="radio" name="q20" value="Fortalecer o poder do rei"> Fortalecer o poder do rei</label><br>
                        <label><input type="radio" name="q20" value="Expandir o poder da Igreja Católica"> Expandir o poder da Igreja Católica</label><br>
                        <label><input type="radio" name="q20" value="Promover a razão e os direitos individuais"> Promover a razão e os direitos individuais</label><br>
                        <label><input type="radio" name="q20" value="Iniciar a colonização da América" id="end_options"> Iniciar a colonização da América</label>
                    </div>

                    <button id="button-quiz" type="button" onclick="checkAnswers4('quizForm4', 'result')">Enviar</button>
                    <button id="button-quiz" type="button" onclick="resetQuiz('quizForm4', 'result')">Resetar</button>
                </form>

                <p id="result"></p>
            </div>
        </section>
          </div>
          <form>
              <div class="btn" onclick="Conteudo('linha5')" ><div id="texto">Quiz - Idade Contemporânea</div></div>
          </form>
          <div id="linha5">
          <section class="historia">
            <h2>H.W. Quiz - Idade Contemporânea</h2>
            <div id="quiz-container">
                <form id="quizForm">
                    <div class="question" id="question21">
                        <p>1. Qual país foi o berço da Revolução Industrial?</p>
                        <label><input type="radio" name="q21" value="França"> França</label><br>
                        <label><input type="radio" name="q21" value="Alemanha"> Alemanha</label><br>
                        <label><input type="radio" name="q21" value="Inglaterra"> Inglaterra</label><br>
                        <label><input type="radio" name="q21" value="Estados Unidos" id="end_options"> Estados Unidos</label>
                    </div>

                    <div class="question" id="question22">
                        <p>2. Qual evento marcou o início da Revolução Francesa?</p>
                        <label><input type="radio" name="q22" value="Formação da Assembleia Nacional"> Formação da Assembleia Nacional</label><br>
                        <label><input type="radio" name="q22" value="Execução de Luís XVI"> Execução de Luís XVI</label><br>
                        <label><input type="radio" name="q22" value="Construção do Muro de Berlim"> Construção do Muro de Berlim</label><br>
                        <label><input type="radio" name="q22" value="Tratado de Versalhes" id="end_options"> Tratado de Versalhes</label>
                    </div>

                    <div class="question" id="question23">
                        <p>3. O Tratado de Versalhes foi assinado após qual guerra?</p>
                        <label><input type="radio" name="q23" value="Primeira Guerra Mundial"> Primeira Guerra Mundial</label><br>
                        <label><input type="radio" name="q23" value="Segunda Guerra Mundial"> Segunda Guerra Mundial</label><br>
                        <label><input type="radio" name="q23" value="Guerra Fria"> Guerra Fria</label><br>
                        <label><input type="radio" name="q23" value="Guerra do Vietnã" id="end_options"> Guerra do Vietnã</label>
                    </div>

                    <div class="question" id="question24">
                        <p>4. Qual evento ocorreu durante a Guerra Fria e aumentou as tensões entre EUA e URSS?</p>
                        <label><input type="radio" name="q24" value="A Queda do Muro de Berlim"> A Queda do Muro de Berlim</label><br>
                        <label><input type="radio" name="q24" value="A Crise dos Mísseis de Cuba"> A Crise dos Mísseis de Cuba</label><br>
                        <label><input type="radio" name="q24" value="A Lei dos Direitos Civis de 1964"> A Lei dos Direitos Civis de 1964</label><br>
                        <label><input type="radio" name="q24" value="Início da Revolução Industrial" id="end_options"> Início da Revolução Industrial</label>
                    </div>

                    <div class="question" id="question25">
                        <p>5. Qual dos seguintes avanços tecnológicos impulsionou a Globalização no século XX?</p>
                        <label><input type="radio" name="q25" value="A invenção do telescópio"> A invenção do telescópio</label><br>
                        <label><input type="radio" name="q25" value="A invenção da televisão"> A invenção da televisão</label><br>
                        <label><input type="radio" name="q25" value="A internet"> A internet</label><br>
                        <label><input type="radio" name="q25" value="O primeiro voo humano" id="end_options"> O primeiro voo humano</label>
                    </div>

                    <button id="button-quiz" type="button" onclick="checkAnswers('quizForm', 'result')">Enviar</button>
                    <button id="button-quiz" type="button" onclick="resetQuiz('quizForm', 'result')">Resetar</button>
                </form>

                <p id="result"></p>
            </div>
        </section>
          </div>
          <form>
              <div class="btn" onclick="Conteudo('linha6')" ><div id="texto">Jogo da memória</div></div>
          </form>
          <div id="linha6">
            <section class="memory-game">
              <div class="memory-card" data-framework="donut">
                <!--Card 1-->
                <img class="front-face" src="img/banner1.jpg" />
                <img class="back-face" src="img/folhah.png" />
              </div>
              
                <div class="memory-card" data-framework="donut">
                  <img class="front-face" src="img/banner1.jpg" />
                  <img class="back-face" src="img/folhah.png" />
                </div>
                
                <div class="memory-card" data-framework="pizza">
                  <!--Card 2-->
                  <img class="front-face" src="img/banner2.jpg" />
                  <img class="back-face" src="img/folhah.png" />
                </div>
                <div class="memory-card" data-framework="pizza">
                  <img class="front-face" src="img/banner2.jpg" />
                  <img class="back-face" src="img/folhah.png" />
                </div>

                <div class="memory-card" data-framework="dog">
                  <!--Card 3-->
                  <img class="front-face" src="img/banner3.jpg" />
                  <img class="back-face" src="img/folhah.png" />
                </div>
                <div class="memory-card" data-framework="dog">
                  <img class="front-face" src="img/banner3.jpg" />
                  <img class="back-face" src="img/folhah.png" />
                </div>
                
                <div class="memory-card" data-framework="queijo">
                  <!--Card 4-->
                  <img class="front-face" src="img/banner4.jpg" />
                  <img class="back-face" src="img/folhah.png" />
                </div>
                <div class="memory-card" data-framework="queijo">
                  <img class="front-face" src="img/banner4.jpg" />
                  <img class="back-face" src="img/folhah.png" />
                </div>
                
                <div class="memory-card" data-framework="elefante">
                  <!--Card 5-->
                  <img class="front-face" src="img/banner5.jpg" />
                  <img class="back-face" src="img/folhah.png" />
                </div>
                <div class="memory-card" data-framework="elefante">
                  <img class="front-face" src="img/banner5.jpg" />
                  <img class="back-face" src="img/folhah.png" />
                </div>
                
                <div class="memory-card" data-framework="Cat">
                  <!--Card 6-->
                  <img class="front-face" src="img/banner6.jpg" />
                  <img class="back-face" src="img/folhah.png" />
                </div>
                <div class="memory-card" data-framework="Cat">
                  <img class="front-face" src="img/banner6.jpg" />
                  <img class="back-face" src="img/folhah.png" />
                </div>
              </div>
              </section>
            </div>
          </body> 
        </main>
</html>
<script>
    function Conteudo(id){
        var elemento = document.getElementById(id);
        if (elemento.style.display === "none" || elemento.style.display === "") {
            elemento.style.display = 'block';
            window.scrollBy({
            top: 500,
            behavior: "smooth" 
        });
        } else {
            elemento.style.display = 'none';
        }
    }
    const cards = document.querySelectorAll(".memory-card");

let hasFlippedCard = false;
let lockBoard = false;
let firstCard, secondCard;

function flipCard() {
  if (lockBoard) return;
  if (this === firstCard) return;

  this.classList.add("flip");

  if (!hasFlippedCard) {
    hasFlippedCard = true;
    firstCard = this;

    return;
  }

  secondCard = this;
  checkForMatch();
}

function checkForMatch() {
  let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;

  isMatch ? disableCards() : unflipCards();
}

function disableCards() {
  firstCard.removeEventListener("click", flipCard);
  secondCard.removeEventListener("click", flipCard);

  resetBoard();
}

function unflipCards() {
  lockBoard = true;

  setTimeout(() => {
    firstCard.classList.remove("flip");
    secondCard.classList.remove("flip");

    resetBoard();
  }, 1500);
}

function resetBoard() {
  [hasFlippedCard, lockBoard] = [false, false];
  [firstCard, secondCard] = [null, null];
}

(function shuffle() {
  cards.forEach((card) => {
    let randomPos = Math.floor(Math.random() * 12);
    card.style.order = randomPos;
  });
})();

cards.forEach((card) => card.addEventListener("click", flipCard));


function checkForMatch() {
  let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;

  isMatch ? disableCards() : unflipCards();

  setTimeout(() => {
    if (document.querySelectorAll(".memory-card.flip").length === cards.length) {
      Swal.fire({
        title: "Parabéns!",
        text: "você concluiu o jogo da memória",
        icon: "success"
      }); 
    }
  }, 500);
}



























const correctAnswers = {
    q1: "Descoberta do fogo",
    q2: "Vida nômade com caça, pesca e coleta",
    q3: "Sangue de animais, folhas e flores",
    q4: "Sedentarização e prática da agricultura",
    q5: "O domínio da agricultura e criação de animais",
    q6: "Sumérios",
    q7: "Babilônios",
    q8: "Mumificação",
    q9: "Aristóteles",
    q10: "Coliseu",
    q11: "Invasões bárbaras e insegurança",
    q12: "Árabes",
    q13: "Promoveram troca cultural e comercial com a Ásia",
    q14: "Levou à valorização dos salários devido à escassez de trabalhadores",
    q15: "Cisma do Oriente",
    q16: "Leonardo da Vinci",
    q17: "Publicação das 95 Teses de Lutero",
    q18: "Contato entre diferentes culturas e colonização",
    q19: "Controle total do monarca",
    q20: "Promover a razão e os direitos individuais",
    q21: "Inglaterra",
    q22: "Formação da Assembleia Nacional",
    q23: "Primeira Guerra Mundial",
    q24: "A Crise dos Mísseis de Cuba",
    q25: "A internet"
};



function checkAnswers(formId, resultDisplayId) {
            let score = 0;
            const form = document.getElementById(formId);
            const resultDisplay = document.getElementById(resultDisplayId);

            document.querySelectorAll('.question .correct-answer').forEach(answer => answer.remove());
            document.querySelectorAll('.question').forEach(div => div.classList.remove('correct', 'incorrect'));

            for (let question in correctAnswers) {
                const userAnswer = form[question] ? form[question].value : "";
                const questionDiv = document.getElementById(`question${question.slice(1)}`);

                if (userAnswer === correctAnswers[question]) {
                    score++;
                    questionDiv.classList.add('correct');
                } else {
                    questionDiv.classList.add('incorrect'); 
                    
                    const correctAnswerText = document.createElement('p');
                    correctAnswerText.classList.add('correct-answer');
                    correctAnswerText.textContent = `Resposta correta: ${correctAnswers[question]}`;
                    questionDiv.appendChild(correctAnswerText);
                }
            }
            
            resultDisplay.textContent = `Você acertou ${score} de ${Object.keys(correctAnswers).length} perguntas.`;
        }
       

        function resetQuiz(formId, resultDisplayId) {

            const form = document.getElementById(formId);
            const resultDisplay = document.getElementById(resultDisplayId);

            if (!form || !resultDisplay) {
                console.error("Erro: Formulário ou elemento de resultado não encontrados.");
                return;
            }

            form.reset();
            resultDisplay.textContent = '';

            document.querySelectorAll('.question').forEach(questionDiv => {
                questionDiv.classList.remove('correct', 'incorrect');
                const correctAnswerText = questionDiv.querySelector('.correct-answer');
                if (correctAnswerText) {
                    questionDiv.removeChild(correctAnswerText);
                }
            });
        }




    

    

</script>