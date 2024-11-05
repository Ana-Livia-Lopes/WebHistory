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
        
        </section>
        <section id="secao1S">
    
            <div id="historia-antiga" class="historia pc"> <!-- com texto -->
                <h2>História Antiga</h2><hr id="hr2">
                <p>
                    <h3>Civilizações da Mesopotâmia</h3>
        
                    A Mesopotâmia, situada entre os rios Tigre e Eufrates, foi berço de algumas das civilizações mais antigas e avançadas da história: sumérios, babilônios, assírios e acádios. Os sumérios fundaram as primeiras cidades-estados, como Ur e Uruk, e desenvolveram a escrita cuneiforme, essencial para o registro de leis e administração. Essa escrita influenciaria profundamente as culturas vizinhas. 
        
                    Os babilônios são lembrados pelo Código de Hamurabi, um conjunto de leis que regulava a sociedade com base em uma noção de justiça retributiva: "olho por olho, dente por dente". Esse código é considerado um dos primeiros sistemas jurídicos codificados da história. Já os assírios, conhecidos por sua capacidade militar e suas conquistas, dominaram a região por meio da guerra e da administração eficaz. Eles também se destacaram pela criação de uma das primeiras bibliotecas conhecidas, a de Nínive. Essas civilizações influenciaram o desenvolvimento posterior da organização social, jurídica e cultural em todo o Oriente Médio. 
        
                    <h3>Egito Antigo</h3>
        
                    O Egito Antigo se desenvolveu às margens do Rio Nilo, aproveitando suas enchentes regulares para a agricultura. Essa civilização ficou marcada pela centralização política e religiosa na figura do faraó, considerado um deus na Terra. A construção das pirâmides, como as de Gizé, demonstra o avanço em engenharia e arquitetura, assim como a crença na vida após a morte. Os egípcios praticavam mumificação para preservar os corpos e acreditavam que a alma precisava de um corpo intacto para alcançar a vida eterna. 
        
                    A religião e a organização social eram registradas em hieróglifos, uma forma complexa de escrita que utilizava símbolos para representar ideias e sons. O papiro, uma espécie de papel produzido a partir de uma planta local, permitiu que registros administrativos e religiosos fossem preservados. As práticas culturais, os mitos e o conhecimento técnico dos egípcios influenciaram muitas civilizações posteriores. 
        
                    <h3>Grécia Antiga</h3>
        
                    A Grécia Antiga é conhecida como o berço da filosofia, democracia, arte e ciência ocidental. Na cidade-estado de Atenas, surgiu a primeira experiência democrática, na qual os cidadãos participavam diretamente das decisões políticas. 
        
                    Filósofos como Sócrates, Platão e Aristóteles influenciaram o pensamento ocidental por séculos, discutindo ética, política e o papel da razão. Além disso, a literatura grega, com obras épicas como a Ilíada e a Odisseia, de Homero, moldou a tradição literária ocidental. 
        
                    A arquitetura e arte gregas destacam-se pela busca da beleza e harmonia, com templos como o Partenon e esculturas que exaltavam o corpo humano. As Guerras Médicas, travadas entre gregos e persas, fortaleceram o espírito de união entre as cidades-estado e consolidaram a identidade grega. A Grécia também se destacou nos Jogos Olímpicos e na tragédia teatral, expressando valores e reflexões sociais por meio das artes cênicas. 
        
                    <h3>Roma Antiga</h3>
        
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
            <h2>H.W. Quiz - História Antiga</h2>
            <div id="quiz-container">
                <form id="quizForm">
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
    
                <a href="icontemporanea.php">
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

    <script>
        // Respostas corretas para ambos os quizzes
        const correctAnswers = {
            q6: "Sumérios",
            q7: "Babilônios",
            q8: "Mumificação",
            q9: "Aristóteles",
            q10: "Coliseu"
        };

        function checkAnswers(formId, resultDisplayId) {
            let score = 0;
            const form = document.getElementById(formId);
            const resultDisplay = document.getElementById(resultDisplayId);

            // Itera sobre as respostas corretas
            for (let question in correctAnswers) {
                const userAnswer = form[question] ? form[question].value : ""; // Verifica se a pergunta existe no formulário
                const questionDiv = document.getElementById(`question${question.slice(1)}`); // Acessa a div da pergunta

                questionDiv.classList.remove('correct', 'incorrect'); // Remove classes anteriores

                // Verifica se a resposta do usuário está correta
                if (userAnswer === correctAnswers[question]) {
                    score++;
                    questionDiv.classList.add('correct');
                } else {
                    questionDiv.classList.add('incorrect'); // Adiciona classe de resposta incorreta

                    const correctAnswerText = document.createElement('p');
                    correctAnswerText.classList.add('correct-answer'); 
                    correctAnswerText.textContent = `Resposta correta: ${correctAnswers[question]}`;
                    questionDiv.appendChild(correctAnswerText); // Mostra a resposta correta
                }
            }
            
            resultDisplay.textContent = `Você acertou ${score} de ${Object.keys(correctAnswers).length} perguntas.`; // Exibe a pontuação
        }

        function resetQuiz(formId, resultDisplayId) {
            document.getElementById(formId).reset(); // Reseta o formulário
            document.getElementById(resultDisplayId).textContent = ''; // Limpa o resultado
            
            // Remove as classes de respostas corretas e incorretas
            document.querySelectorAll('.question').forEach(questionDiv => {
                questionDiv.classList.remove('correct', 'incorrect');

                const correctAnswerText = questionDiv.querySelector('.correct-answer');
                if (correctAnswerText) {
                    questionDiv.removeChild(correctAnswerText); // Remove o texto da resposta correta
                }
            });
        }

    </script>
</body>
</html>