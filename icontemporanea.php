<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js" defer></script>
    <title>Idade Contemporânea</title>
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
        ?>
    </nav>
    <main class="main-content">
        </section>
        <section id="secao4">
    
            <div id="idade-comtemporanea" class="historia pc"> <!-- com texto -->
                <p>
                    <h2>Idade Contemporânea</h2><hr id="hr5">
                    <h3>Revolução Industrial</h3>
                    <img class="img-conteudo" src="img/rev-industrial.jpeg" width="400" height="300" style="float: right; margin-left: 15px; margin-bottom: 2px;">
                    <ul>
                        <li>
                            <h4>Características</h4>
                            A Revolução Industrial ocorreu entre os séculos XVIII e XIX e envolveu transformações profundas na produção, economia e sociedade. A mecanização da produção, que substituiu as ferramentas manuais por máquinas, levou ao surgimento de fábricas e à produção em massa. Esse processo iniciou-se na Inglaterra, devido ao acúmulo de capital, mão de obra disponível e inovação tecnológica.
                        </li>
                        <li>
                            <h4>Impactos Sociais</h4>
                            A urbanização se intensificou, com um grande número de pessoas migrando para as cidades em busca de trabalho nas indústrias. Esse movimento gerou novos problemas sociais, como a exploração da classe trabalhadora, condições precárias de trabalho e o surgimento de movimentos operários.
                        </li>
                    </ul>
    
                    <h3>Revolução Francesa</h3>
                    <img class="img-conteudo" src="img/rev-francesa.jfif" width="400" height="300" style="float: left; margin-right: 15px; margin-bottom: 2px;">
                    <ul>
                        <li>
                            <h4>Causas</h4>
                            A Revolução Francesa começou em 1789, e teve suas causas em uma insatisfação com o Antigo Regime, a influência das ideias iluministas e crises financeiras. A convocação dos Estados Gerais e a formação da Assembleia Nacional marcaram o início do conflito.
                        </li>
                        <li>
                            <h4>Desdobramentos</h4>
                            A queda da monarquia em 1792 e a execução de Luís XVI foram marcos significativos. O período do Terror (1793-1794) sob os jacobinos foi marcado por repressão e execuções em massa. O legado da Revolução Francesa inclui a promoção de direitos civis, igualdade e a ideia de soberania popular.
                        </li>
                    </ul>
    
                    <h3>Guerras Mundiais</h3>
                    <img class="img-conteudo" src="img/guerras-mundiais.jpeg" width="400" height="300" style="float: right; margin-left: 15px; margin-bottom: 2px;">
                    <ul>
                        <li>
                            <h4>Primeira Guerra Mundial</h4>
                            Entre 1914 e 1918, a guerra foi impulsionada por rivalidades imperialistas, alianças militares e tensões nacionalistas. O Tratado de Versalhes, que encerrou o conflito, impôs reparações severas à Alemanha, criando um ambiente propício para a ascensão do nazismo.
                        </li>
                        <li>
                            <h4>Segunda Guerra Mundial</h4>
                            De 1939 a 1945, a guerra foi marcada por atrocidades como o Holocausto e confrontos em larga escala. O resultado foi a criação de uma nova ordem mundial, a divisão da Europa em blocos e o surgimento da Guerra Fria.
                        </li>
                    </ul>
    
                    <h3>Guerra Fria</h3>
                    <img class="img-conteudo" src="img/guerra-fria.jpeg" width="400" height="300" style="float: left; margin-right: 15px; margin-bottom: 2px;">
                    <ul>
                        <li>
                            <h4>Corrida Armamentista</h4>
                            A Guerra Fria (1947-1991) foi caracterizada pela rivalidade entre os EUA e a URSS, com ambos os lados investindo pesadamente em armamentos nucleares, levando a um estado de tensão constante. Crises notáveis incluíram a Crise dos Mísseis de Cuba em 1962 e a construção do Muro de Berlim em 1961.
                        </li>
                        <li>
                            <h4>Consequências</h4>
                            O fim da Guerra Fria foi marcado pelo colapso da URSS em 1991, que resultou na independência de várias nações e na promoção da democracia em países anteriormente sob controle soviético.
                        </li>
                    </ul>
    
                    <h3>Movimentos de Direitos Civis</h3>
                    <img class="img-conteudo" src="img/movimentos-direitos-civis.jpg" width="400" height="300" style="float: right; margin-left: 15px; margin-bottom: 2px;">
                    <ul>
                        <li>
                            <h4>Estados Unidos</h4>
                            Na década de 1960, o movimento liderado por Martin Luther King Jr. buscou acabar com a segregação racial e garantir os direitos civis para os afro-americanos. A aprovação da Lei dos Direitos Civis de 1964 foi uma vitória importante.
                        </li>
                        <li>
                            <h4>Descolonização</h4>
                            Muitos países africanos e asiáticos lutaram pela independência do colonialismo europeu, resultando em uma onda de novos estados soberanos e um reordenamento geopolítico significativo.
                        </li>
                    </ul>
    
                    <h3>Globalização</h3>
                    <img class="img-conteudo" src="img/globalizacao.jpeg" width="400" height="300" style="float: left; margin-right: 15px; margin-bottom: 2px;">
                    <ul>
                        <li>
                            <h4>Avanços Tecnológicos</h4>
                            A globalização, que se intensificou no final do século XX, refere-se à crescente interconexão entre países e culturas. A revolução digital, especialmente com a internet, transformou a economia global, permitindo um comércio mais dinâmico e uma troca cultural mais intensa.
                        </li>
                        <li>
                            <h4>Impactos</h4>
                            Embora a globalização tenha trazido oportunidades econômicas, também levantou preocupações sobre desigualdades sociais, perda de identidades culturais e desafios ambientais.
                        </li>
                    </ul>
                </p>
            </div>

            <div id="idade-contemporanea" class="historia cel">
                <h2>Idade Contemporânea</h2><hr id="hr6">
                <h3>Revolução Industrial</h3>
                <ul>
                    <li>
                        <h4>Características</h4>
                        A Revolução Industrial (séculos XVIII-XIX) trouxe mudanças profundas na produção e na sociedade. A mecanização substituiu o trabalho manual por máquinas, originando fábricas e produção em massa, especialmente na Inglaterra, que possuía capital e mão de obra disponíveis.
                    </li>
                    <li>
                        <h4>Impactos Sociais</h4>
                        A urbanização se intensificou com a migração para as cidades em busca de trabalho, gerando problemas como a exploração da classe trabalhadora, condições de trabalho precárias e o surgimento de movimentos operários.
                    </li>
                </ul>
    
                <h3>Revolução Francesa</h3>
                <ul>
                    <li>
                        <h4>Causas</h4>
                        A Revolução Francesa (1789) foi impulsionada pela insatisfação com o Antigo Regime, pelas ideias iluministas e por crises financeiras. A convocação dos Estados Gerais e a criação da Assembleia Nacional deram início ao conflito.
                    </li>
                    <li>
                        <h4>Desdobramentos</h4>
                        A queda da monarquia e a execução de Luís XVI foram marcos, assim como o período do Terror (1793-1794). A Revolução promoveu direitos civis, igualdade e a ideia de soberania popular.
                    </li>
                </ul>
    
                <h3>Guerras Mundiais</h3>
                <ul>
                    <li>
                        <h4>Primeira Guerra Mundial</h4>
                        De 1914 a 1918, o conflito foi causado por rivalidades imperialistas e alianças militares. O Tratado de Versalhes impôs reparações severas à Alemanha, facilitando a ascensão do nazismo.
                    </li>
                    <li>
                        <h4>Segunda Guerra Mundial</h4>
                        Entre 1939 e 1945, o mundo testemunhou atrocidades como o Holocausto. A guerra reconfigurou o cenário global, dividindo a Europa em blocos e iniciando a Guerra Fria.
                    </li>
                </ul>
    
                <h3>Guerra Fria</h3>
                <ul>
                    <li>
                        <h4>Corrida Armamentista</h4>
                        A Guerra Fria (1947-1991) foi marcada pela rivalidade entre EUA e URSS, com investimentos em armamentos nucleares e crises como a dos Mísseis de Cuba (1962) e a construção do Muro de Berlim (1961).
                    </li>
                    <li>
                        <h4>Consequências</h4>
                        O colapso da URSS em 1991 resultou na independência de várias nações e na promoção da democracia em países anteriormente sob influência soviética.
                    </li>
                </ul>
    
                <h3>Movimentos de Direitos Civis</h3>
                <ul>
                    <li>
                        <h4>Estados Unidos</h4>
                        Na década de 1960, o movimento liderado por Martin Luther King Jr. visava acabar com a segregação racial. A aprovação da Lei dos Direitos Civis de 1964 foi uma conquista importante.
                    </li>
                    <li>
                        <h4>Descolonização</h4>
                        Países da África e da Ásia lutaram por independência, levando à formação de novos estados soberanos e à reorganização geopolítica global.
                    </li>
                </ul>
    
                <h3>Globalização</h3>
                <ul>
                    <li>
                        <h4>Avanços Tecnológicos</h4>
                        A globalização se intensificou no final do século XX, impulsionada pela revolução digital e pela internet, que transformaram a economia e promoveram a troca cultural.
                    </li>
                    <li>
                        <h4>Impactos</h4>
                        A globalização trouxe oportunidades econômicas, mas também gerou preocupações com desigualdades sociais, a perda de identidades culturais e desafios ambientais.
                    </li>
                </ul>
            </div>
    
        </section>

        <section class="historia">
            <h2>Conteúdos adicionais</h2>
            <div class="video-grid">
                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/6Gi4_GJXO4I?si=Ud6m50iznSTWDjgy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                
                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/ceCcZooYDBo?si=ARh6DksZSkXHWIEq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <iframe class="video-fr" width="560" height="315" src="https://www.youtube.com/embed/eDDGqU9OgAc?si=fSWmIs_f_le015OQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/QGvwWyP1S4o?si=3-2WSnvP6HBp8Ob2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    
                <iframe width="560" height="315" src="https://www.youtube.com/embed/kCKuP2OqfEs?si=3_qhuwn4S8n-_uD4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                
                <iframe width="560" height="315" src="https://www.youtube.com/embed/4hEDjSdszSU?si=UE8jkJd1Ov_cwsbj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
                <h4 id="sug_video">Veja mais:<a href="https://www.youtube.com/watch?v=CXtre0g9YUI" target="_blank"> Movimento pelos Direitos Civis nos EUA - Profa Anelize</a></h4>
        </section>

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

        <section class="historia">
            <h2>Veja também</h2>
            <div class="banner-grid">
                <a href="hprimitiva.php">
                    <div class="banner">
                        <img src="img/banner1.jpg" id="img-banner" alt="Imagem História Primitiva">
                        <div class="texto">
                            <h4>História Primitiva</h4>
                        </div>
                    </div>
                </a>
    
                <a href="hantiga.php">
                    <div class="banner">
                        <img src="img/banner2.jpg" id="img-banner" alt="Imagem História Antiga">
                        <div class="texto">
                            <h4>História Antiga</h4>
                        </div>
                    </div>
                </a>
    
                <a href="imedia.php">
                    <div class="banner">
                        <img src="img/banner3.jpg" id="img-banner" alt="Imagem Idade Média">
                        <div class="texto">
                            <h4>Idade Média</h4>
                        </div>
                    </div>
                </a>
    
                <a href="imoderna.php">
                    <div class="banner">
                        <img src="img/banner4.jpg" id="img-banner" alt="Imagem Idade Moderna">
                        <div class="texto">
                            <h4>Idade Moderna</h4>
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
</body>
</html>