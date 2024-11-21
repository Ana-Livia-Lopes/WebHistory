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
                    <a href="index.php">
                        <i class="bx bx-home-alt"></i>
                        <span class="item-nav">Início</span>
                    </a>
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
                    <a href="jogos.php">
                        <i class="bx bx-joystick"></i>
                        <span class="item-nav">Jogos</span>
                    </a>
                </li>
                <li>
                    <a id="conteudo-select">
                        <i class="bx bx-hourglass" type='solid' id="ampulheta"></i>
                        <select id="select-nav" class="item-nav" onchange="changePag()">
                            <option value="">Períodos</option>
                            <option value="hprimitiva.php">História Primitiva</option>
                            <option value="hantiga.php">História Antiga</option>
                            <option value="imedia.php">Idade Média</option>
                            <option value="imoderna.php">Idade Moderna</option>
                            <option value="icontemporanea.php">Idade Contemporânea</option>
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

    $imagem = isset($_SESSION['imagem']) ? $_SESSION['imagem'] : 'default.jpg';
        if (isset($_SESSION['nome']) && $_SESSION['nome'] != '') {
            echo "<div class='usuario'>";
            echo    "<a href='perfil.php?id=". $_SESSION['id'] ."'>";
            ?>
            <img id='user-def-nav' src='img/<?php echo $imagem; ?>' alt=''></a>
            <?php 
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
      <body>
        <section class="sessao1">
          <div class="div-jogo">
            <div class="texto-sessao">
              <h1>Navegue na história através de nossos jogos</h1>
              <p class="p-jogos">Teste seus conhecimentos sobre eventos históricos, figuras importantes e fatos curiosos, enquanto se diverte e aprende.</p>
            </div>
            <!-- <div class="img-sessao">
              <img src="img/fundo2-login.jpg" alt="games">
            </div> -->
          </div>
        </section>
        <div class="quiz"> 
          <form>
              <div class="btn" onclick="Conteudo('linha')" ><div id="texto">Quiz - História Primitiva</div></div>
          </form>
          <div id="linha">Conteúdo 1</div>
          <form>
              <div class="btn" onclick="Conteudo('linha2')" ><div id="texto">Quiz - História Antiga</div></div>
          </form>
          <div id="linha2">
            <section class='quiz-ha'>
              <article class='centro' id='instrucoes'>
                  Leia a questão e clique na resposta correta
              </article>

              <article class='questoes'>
                  
                  <figure class='imagemDaQuestao'>
                  </figure>   

                  <header class='questao'>
                      <span id='numQuestao'></span>
                      <h2 id='pergunta'></h2>
                  </header>
                                  
                  <div class='corpo'>
                      <ol type='A' id='alternativas'>
                      <li id='a' value='1A' class='respostas' onClick='verificarSeAcertou(this)'></li>
                      <li id='b' value='1B' class='respostas' onClick='verificarSeAcertou(this)'></li>
                      <li id='c' value='1C' class='respostas' onClick='verificarSeAcertou(this)'></li>
                      <li id='d' value='1D' class='respostas' onClick='verificarSeAcertou(this)'></li>
                      </ol>
                  </div>
                  <article id='aviso' class='centro'>
                    <span id='numero'></span> de <span id='total'></span>
                  </article>-              </article>
          </section>
          </div>
          <form>
              <div class="btn" onclick="Conteudo('linha3')" ><div id="texto">Quiz - Idade Média</div></div>
          </form>
          <div id="linha3">
          <section class="historia">
            <h2>H.W. Quiz - Idade Média</h2>
            <div id="quiz-container">
                <form id="quizForm">
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

                    <button id="button-quiz" type="button" onclick="checkAnswers('quizForm', 'result')">Enviar</button>
                    <button id="button-quiz" type="button" onclick="resetQuiz('quizForm', 'result')">Resetar</button>
                </form>

                <p id="result"></p>
            </div>
          </div>
          <form>
              <div class="btn" onclick="Conteudo('linha4')" ><div id="texto">Quiz - Idade Moderna</div></div>
          </form>
          <div id="linha4">Conteúdo 4</div>
          <form>
              <div class="btn" onclick="Conteudo('linha5')" ><div id="texto">Quiz - Idade Contemporânea</div></div>
          </form>
          <div id="linha5">Conteúdo 5</div>
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



</script>