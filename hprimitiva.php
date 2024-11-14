<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/HW-icon.png" type="image/x-icon">
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
            </ul>
        </div>
        <?php 
        session_start();

        if (isset($_SESSION['id']) && $_SESSION['id'] != '') {
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

        if(isset($_GET['exc'])) {
            echo"<script>
            Swal.fire({
                icon: 'error',
                title: 'sua conta foi excluida',
                text: 'tente criar uma nova conta',
            });
            </script>";
            }
        ?>
    </nav>
    
    <main class="main-content">

    <section id="secao4">
        <div id="historia-primitiva" class="historia pc">
            <h2>História Primitiva</h2>
            <hr id="hr1">
            
            <h3>Paleolítico</h3>
            <img class="img-conteudo" src="img/paleolitico.jfif" alt="Imagem do período Paleolítico" width="400" height="300" style="float: right; margin-left: 15px; margin-bottom: 2px;">
            <p>
                Foi o primeiro período da Pré-História, quando os hominídeos eram nômades e tinham como práticas cotidianas a caça, pesca e colheita de frutos. Os primeiros grupos humanos procuravam adaptar-se ao ambiente em que viviam e buscavam a sobrevivência por meio da caça de animais, pesca de peixes nos rios e colheita de vegetais e frutos disponíveis por onde passavam. Os primeiros seres humanos eram nômades e estavam em constante deslocamento, fugindo das intempéries da natureza ou de animais selvagens, como também em busca de espaço que pudesse fornecer alimentos ou proteção para o momento. A principal transformação ocorrida nesse período foi a descoberta do fogo.
            </p>
            <p>
                A descoberta do fogo transformou a vida dos hominídeos, pois, a partir disso, eles puderam ficar nas cavernas com segurança e se aquecer do frio. Além disso, o fogo assava os alimentos e espantava os animais silvestres.
            </p>
            <p>
                Outra transformação importante no Paleolítico foi o uso da pedra lascada. As experiências adquiridas a partir da vivência deram aos hominídeos conhecimento sobre a melhor maneira de caçar, pescar e colher. Ao lascarem as pedras, os instrumentos utilizados no dia a dia se tornavam mais eficazes. As lanças ficaram pontiagudas, o que favorecia os ataques dos primeiros grupos humanos quando caçavam animais.
            </p>
            <h3>Pintura Rupestre no Paleolítico</h3>
            <img class="img-conteudo" src="img/rupestre.jfif" alt="Imagem da pintura rupestre do Paleolítico" width="400" height="300" style="float: left; margin-right: 15px; margin-bottom: 2px;">
            <p>
                Os primeiros registros da pintura rupestre são do Paleolítico. Ao se estabelecerem nas cavernas, seja para se proteger do frio, seja como abrigo provisório, os hominídeos desenhavam nas paredes os animais capturados em uma caça ou os que eles desejavam caçar. Essas pinturas eram feitas a partir de sangue de animais ou folhas e flores. A arte rupestre é a principal fonte de informações sobre a Pré-História.
            </p>
            <p>
                As pinturas representam os seres humanos de forma isolada ou realizando atividades do cotidiano. Os animais representados nas paredes das cavernas eram aqueles que os hominídeos conseguiam capturar durante as caças ou aqueles que os atacavam. Outra característica da arte rupestre é a religiosidade. Algumas pinturas representam os primeiros rituais religiosos praticados no Paleolítico.
            </p>
            
            <h3>Neolítico</h3>
            <img class="img-conteudo" src="img/neolitico.jfif" alt="Imagem do período Neolítico" width="400" height="300" style="float: right; margin-left: 15px; margin-bottom: 2px;">
            <p>
                O período Neolítico ocorreu do ano 7000 a.C. até 2500 a.C., sendo conhecido também como período da Pedra Polida. Foi um momento marcante da Pré-História, pois a vida do humano primitivo passou por diversas transformações nele. Os grupos humanos sedentarizaram-se, isto é, fixaram-se em um único lugar e intensificaram a prática da agricultura.
            </p>
            <p>
                A sedentarização também influenciou nessa fixação dos grupos em um único lugar. A prática da agricultura possibilitou o plantio e a colheita de sementes. Isso influenciou na produção de peças feitas de argila para armazenar essa produção. Os animais selvagens eram mortos para afastar-se o perigo contra os grupos, ou para a retirada de seus ossos e dentes para a fabricação de armas, ou ainda para a alimentação; e os animais menores eram domesticados e introduzidos no cotidiano dos humanos, como cachorros e algumas aves.
            </p>
            <p>
                Durante o Neolítico, os hominídeos utilizavam a pedra polida para fabricar instrumentos mais eficazes, pois por meio dela havia maior precisão nos cortes. Esses instrumentos poderiam ser utilizados para caçar ou pescar e para atacar grupos inimigos.
            </p>

            <h3>Revolução Agrícola no Neolítico</h3>
            <img class="img-conteudo" src="img/rev-agricola.jfif" alt="Imagem da revolução agrícola no Neolítico" width="400" height="300" style="float: left; margin-right: 15px; margin-bottom: 2px;">
            <p>
                A revolução agrícola foi uma das marcas do período Neolítico. Com a sedentarização dos grupos humanos, pôde-se observar e reconhecer os fenômenos naturais e explorar a natureza em benefício do grupo. Além disso, o primitivo pôde utilizar a terra, plantando e colhendo seus frutos. Com essa mudança, aumentou-se o número populacional e os grupos humanos transformaram-se em sociedades mais complexas, abrindo espaço para a formação de um Estado que as administrasse.
            </p>
            <p>
                O período neolítico (8 mil a.C. a 5 mil a.C.) foi marcado pelo fenômeno que ficou denominado primeira revolução agrícola. Foi nesse período da história que ocorreu o domínio do fogo. Essa mudança possibilitou o início do controle de técnicas para dominar a produção de alimentos. As ferramentas rústicas do período paleolítico (3,5 milhões a.C. a 8 mil a.C.) foram aperfeiçoadas para a atividade agrícola. É por isso que essa fase também é denominada Revolução Neolítica. Além da agricultura, o homem passou a dominar a criação de animais.
            </p>
        </div>

        <div id="historia-primitiva" class="historia cel">
            <h2>História Primitiva</h2>
            <hr id="hr1">

            <h3>Paleolítico</h3>
            <p>Foi o primeiro período da Pré-História, quando os hominídeos eram nômades e tinham como práticas cotidianas a caça, pesca e colheita de frutos. Os primeiros grupos humanos procuravam adaptar-se ao ambiente em que viviam e buscavam a sobrevivência por meio da caça de animais, pesca de peixes nos rios e colheita de vegetais e frutos disponíveis por onde passavam. Os primeiros seres humanos eram nômades e estavam em constante deslocamento, fugindo das intempéries da natureza ou de animais selvagens, como também em busca de espaço que pudesse fornecer alimentos ou proteção para o momento. A principal transformação ocorrida nesse período foi a descoberta do fogo.</p>
            <img class="img-conteudo" src="img/paleolitico.jfif" alt="Imagem do período Paleolítico" width="400" height="300">

            <h3>Pintura Rupestre no Paleolítico</h3>
            <p>Os primeiros registros da pintura rupestre são do Paleolítico. Ao se estabelecerem nas cavernas, seja para se proteger do frio, seja como abrigo provisório, os hominídeos desenhavam nas paredes os animais capturados em uma caça ou os que eles desejavam caçar. Essas pinturas eram feitas a partir de sangue de animais ou folhas e flores. A arte rupestre é a principal fonte de informações sobre a Pré-História.</p>
            <img class="img-conteudo" src="img/rupestre.jfif" alt="Imagem da pintura rupestre do Paleolítico" width="400" height="300">

            <h3>Neolítico</h3>
            <p>O período Neolítico ocorreu do ano 7000 a.C. até 2500 a.C., sendo conhecido também como período da Pedra Polida. Foi um momento marcante da Pré-História, pois a vida do humano primitivo passou por diversas transformações nele. Os grupos humanos sedentarizaram-se, isto é, fixaram-se em um único lugar e intensificaram a prática da agricultura.</p>
            <img class="img-conteudo" src="img/neolitico.jfif" alt="Imagem do período Neolítico" width="400" height="300">

            <h3>Revolução Agrícola no Neolítico</h3>
            <p>A revolução agrícola foi uma das marcas do período Neolítico. Com a sedentarização dos grupos humanos, pôde-se observar e reconhecer os fenômenos naturais e explorar a natureza em benefício do grupo. Além disso, o primitivo pôde utilizar a terra, plantando e colhendo seus frutos. Com essa mudança, aumentou-se o número populacional e os grupos humanos transformaram-se em sociedades mais complexas, abrindo espaço para a formação de um Estado que as administrasse.</p>
            <img class="img-conteudo" src="img/rev-agricola.jfif" alt="Imagem da revolução agrícola no Neolítico" width="400" height="300">
        </div>
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

        <section class='conteudos'>

            <h1>H.W. Quiz</h1>

            <article class='centro' id='instrucoes'>
                Leia a questão e clique na resposta correta
            </article>

            <article class='questoes'>
                
                <figure class='imagemDaQuestao'>
                    <img src="" alt="Img da questao" width="200px"/>
                </figure>   

                <header class='questao'>
                    <span id='numQuestao'></span>
                    <h2 id='pergunta'></h2>
                </header>
                                
                <div class='corpo'>
                    <ol type='A' id='alternativas'>
                        <li id='a' value='1A' class='respostas' onClick='verificarSeAcertou(this, this)'></li>
                        <li id='b' value='1B' class='respostas' onClick='verificarSeAcertou(this, this)'></li>
                        <li id='c' value='1C' class='respostas' onClick='verificarSeAcertou(this, this)'></li>
                        <li id='d' value='1D' class='respostas' onClick='verificarSeAcertou(this, this)'></li>
                    </ol>
                </div>
            </article>
            
            <article id='aviso' class='centro'>
                <input type="range" value='1' min='1' max='10' step='1'
                name="progresso" id="progresso" disabled
                /> <br>
                <span id='numero'></span> de <span id='total'></span>
            </article>

        </section>

        <audio preload src="assets/positive.mp3" id='somAcerto'></audio>
        <audio preload src="assets/negative.mp3" id='somErro'></audio>
        <audio preload src="assets/aplausos.mp3" id='somAplausos'></audio>

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

    <script>
        const correctAnswers = {
            q1: "Descoberta do fogo",
            q2: "Vida nômade com caça, pesca e coleta",
            q3: "Sangue de animais, folhas e flores",
            q4: "Sedentarização e prática da agricultura",
            q5: "O domínio da agricultura e criação de animais",
        };

        function checkAnswers(formId, resultDisplayId) {
            let score = 0;
            const form = document.getElementById(formId);
            const resultDisplay = document.getElementById(resultDisplayId);

            for (let question in correctAnswers) {
                const userAnswer = form[question] ? form[question].value : ""; 
                const questionDiv = document.getElementById(`question${question.slice(1)}`);

                questionDiv.classList.remove('correct', 'incorrect'); 

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
            document.getElementById(formId).reset(); 
            document.getElementById(resultDisplayId).textContent = ''; 
            
            document.querySelectorAll('.question').forEach(questionDiv => {
                questionDiv.classList.remove('correct', 'incorrect');

                const correctAnswerText = questionDiv.querySelector('.correct-answer');
                if (correctAnswerText) {
                    questionDiv.removeChild(correctAnswerText); 
                }
            });
        }

        let titulo     = document.querySelector('h1')
        let instrucoes = document.querySelector('#instrucoes')
        let aviso      = document.querySelector('#aviso')
        let progresso  = document.querySelector('#progresso')
        let pontos = 0 // pontos para o placar
        let placar = 0 // placar

        // AUDIO
        let somAcerto   = document.querySelector('#somAcerto')
        let somErro     = document.querySelector('#somErro')
        let somAplausos = document.querySelector('#somAplausos')

        // PERGUNTA
        let numQuestao = document.querySelector('#numQuestao')
        let imgQuestao = document.querySelector('.imagemDaQuestao img')  // ADICIONE
        let pergunta   = document.querySelector('#pergunta')

        // ALTERNATIVAS
        let a = document.querySelector('#a')
        let b = document.querySelector('#b')
        let c = document.querySelector('#c')
        let d = document.querySelector('#d')

        // article com a class questoes
        let articleQuestoes = document.querySelector('.questoes')
        // ol li com as alternativas
        let alternativas = document.querySelector('#alternativas')

        const q1 = {
            numQuestao   : 1,
            imagem       : '1.png',  // ADICIONE
            pergunta     : "Boreal é o mesmo que...",
            alternativaA : "Sul",
            alternativaB : "Leste",
            alternativaC : "Norte",
            alternativaD : "Oeste",
            correta      : "Norte",
        }
        const q2 = {
            numQuestao   : 2,
            imagem       : '2.png',  // ADICIONE
            pergunta     : "Qual é a capital do Brasil?",
            alternativaA : "Rio de Janeiro",
            alternativaB : "Brasília",
            alternativaC : "Salvador",
            alternativaD : "Lisboa",
            correta      : "Brasília",
        }
        const q3 = {
            numQuestao   : 3,
            imagem       : '3.png',  // ADICIONE
            pergunta     : "Austral é o mesmo que...",
            alternativaA : "Oeste",
            alternativaB : "Leste",
            alternativaC : "Norte",
            alternativaD : "Sul",
            correta      : "Sul",
        }
        const q4 = {
            numQuestao   : 4,
            imagem       : '4.png',  // ADICIONE
            pergunta     : "A linha do Equador divide a Terra em...",
            alternativaA : "Leste e Oeste",
            alternativaB : "Norte e Sul",
            alternativaC : "Verão e Inverno",
            alternativaD : "Solstícios e Eclipses",
            correta      : "Norte e Sul",
        }

        // CONSTANTE COM UM ARRAY DE OBJETOS COM TODAS AS QUESTOES
        const questoes = [q1, q2, q3, q4]

        let numero = document.querySelector('#numero')
        let total  = document.querySelector('#total')

        numero.textContent = q1.numQuestao

        let totalDeQuestoes = (questoes.length)-1
        console.log("Total de questões " + totalDeQuestoes)
        total.textContent = totalDeQuestoes

        // MONTAR A 1a QUESTAO COMPLETA, para iniciar o Quiz
        numQuestao.textContent = q1.numQuestao
        imgQuestao.setAttribute('src', 'images/'+q1.imagem)  // ADICIONE
        pergunta.textContent   = q1.pergunta
        a.textContent = q1.alternativaA
        b.textContent = q1.alternativaB
        c.textContent = q1.alternativaC
        d.textContent = q1.alternativaD

        // CONFIGURAR O VALUE INICIAL DA 1a QUESTAO COMPLETA
        a.setAttribute('value', '1A')
        b.setAttribute('value', '1B')
        c.setAttribute('value', '1C')
        d.setAttribute('value', '1D')

        // PARA MONTAR AS PROXIMAS QUESTOES
        function proximaQuestao(nQuestao) {
            numero.textContent = nQuestao
            numQuestao.textContent = questoes[nQuestao].numQuestao
            imgQuestao.setAttribute('src', 'images/'+questoes[nQuestao].imagem) // ADICIONE
            pergunta.textContent   = questoes[nQuestao].pergunta
            a.textContent = questoes[nQuestao].alternativaA
            b.textContent = questoes[nQuestao].alternativaB
            c.textContent = questoes[nQuestao].alternativaC
            d.textContent = questoes[nQuestao].alternativaD
            a.setAttribute('value', nQuestao+'A')
            b.setAttribute('value', nQuestao+'B')
            c.setAttribute('value', nQuestao+'C')
            d.setAttribute('value', nQuestao+'D')
            progresso.value = parseInt(progresso.value) + 1
            //console.log(progresso.value)
        }

        // VERIFICAR DUPLO CLICK NAS ALTERNATIVAS
        alternativas.addEventListener('dblclick', () => {
            //console.log('Duplo clique')
            pontos -= 10 // tirar 10 pontos em caso de duplo click
            if(numQuestao.value == 10 && pontos == 110) { pontos = 100 }
        })

        function bloquearAlternativas() {
            alternativas.classList.add('bloqueado')
        }

        function desbloquearAlternativas() {
            alternativas.classList.remove('bloqueado')
        }

        function piscarNoAcerto() {
            articleQuestoes.classList.remove('errou')
            articleQuestoes.classList.add('acertou')
        }

        function piscarNoErro() {
            articleQuestoes.classList.remove('acertou')
            articleQuestoes.classList.add('errou')
        }

        function tirarPiscar() {
            articleQuestoes.classList.remove('acertou')
            articleQuestoes.classList.remove('errou')
        }

        function verificarSeAcertou(nQuestao, resposta) {

            let numeroDaQuestao = nQuestao.value
            console.log("Questão " + numeroDaQuestao)

            let respostaEscolhida = resposta.textContent
            //console.log("RespU " + respostaEscolhida)

            let certa = questoes[numeroDaQuestao].correta
            //console.log("RespC " + certa)

            if(respostaEscolhida == certa) {
                //console.log("Acertou")
                //respostaEsta.textContent = "Correta 😊"
                piscarNoAcerto()
                somAcerto.play()
                pontos += 10 // pontos = pontos + 10
                if(nQuestao.value == 1 && pontos == 20) { pontos = 10 }
            } else {
                //console.log("Errou!")
                //respostaEsta.textContent = "Errada 😢"
                piscarNoErro()
                somErro.play()
            }
            setTimeout(() => {
                tirarPiscar()
            }, 150);
            
            // atualizar placar
            placar = pontos
            instrucoes.textContent = "Pontos " + placar

            // bloquear a escolha de opcoes
            bloquearAlternativas()

            setTimeout(function() {

                proxima = numeroDaQuestao+1

                if(proxima > totalDeQuestoes) {
                    console.log('Fim do Jogo!')
                    fimDoJogo()
                } else {
                    proximaQuestao(proxima)
                }
            }, 150)
            desbloquearAlternativas()
        }

        function fimDoJogo() {

            somAplausos.play()

            let s = 's'
            pontos == 0 ? s = '' : s = s
            instrucoes.textContent = "Fim de Jogo! Você conseguiu " + pontos + " ponto"+ s

            instrucoes.classList.add('placar')

            // OCULTAR O ARTICLE DA QUESTAO
            articleQuestoes.style.display = 'none'

            setTimeout(function() {
                pontos = 0 // zerar placar
                //location.reload();
                instrucoes.classList.remove('placar')
                // REINICIAR O JOGO
                articleQuestoes.style.display = 'block'
                proximaQuestao(1)
                instrucoes.textContent = 'Leia a questão e clique na resposta correta'
            }, 8000)

        }
    </script>
</body>
</html>