<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>História na Web - jogos</title>
        <script src="./main.js" defer></script>
        <link rel="stylesheet" href="css/jogos.css">
        <link rel="shortcut icon" href="./img/HW-icon.png" type="image/x-icon">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Reem+Kufi:wght@400..700&display=swap" rel="stylesheet">
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
                        include 'id_verify.php';
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
                            <option value="" id="opt-periodos">Períodos</option>
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

        if (isset($_SESSION['nome']) && $_SESSION['nome'] != '') {
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
          <h1>JOGOS</h1>
          <p>Teste seus conhecimentos sobre eventos históricos, figuras importantes e fatos curiosos, enquanto se diverte e aprende.</p>
          <form>
              <div class="btn" onclick="Conteudo('linha')" ><div id="texto">quiz 1</div></div>
          </form>
          <div id="linha">Conteúdo 1</div>
          <form>
              <div class="btn" onclick="Conteudo('linha2')" ><div id="texto">quiz 2</div></div>
          </form>
          <div id="linha2">Conteúdo 2</div>
          <form>
              <div class="btn" onclick="Conteudo('linha3')" ><div id="texto">quiz 3</div></div>
          </form>
          <div id="linha3">Conteúdo 3</div>
          <form>
              <div class="btn" onclick="Conteudo('linha4')" ><div id="texto">quiz 4</div></div>
          </form>
          <div id="linha4">Conteúdo 4</div>
          <form>
              <div class="btn" onclick="Conteudo('linha5')" ><div id="texto">quiz 5</div></div>
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
                  <img class="back-face" src="img/HW-icon.png" />
                </div>

                <div class="memory-card" data-framework="donut">
                  <img class="front-face" src="img/banner1.jpg" />
                  <img class="back-face" src="img/HW-icon.png" />
                </div>

                <div class="memory-card" data-framework="pizza">
                  <!--Card 2-->
                  <img class="front-face" src="img/banner2.jpg" />
                  <img class="back-face" src="img/HW-icon.png" />
                </div>
                <div class="memory-card" data-framework="pizza">
                  <img class="front-face" src="img/banner2.jpg" />
                  <img class="back-face" src="img/HW-icon.png" />
                </div>

                <div class="memory-card" data-framework="dog">
                  <!--Card 3-->
                  <img class="front-face" src="img/banner3.jpg" />
                  <img class="back-face" src="img/HW-icon.png" />
                </div>
                <div class="memory-card" data-framework="dog">
                  <img class="front-face" src="img/banner3.jpg" />
                  <img class="back-face" src="img/HW-icon.png" />
                </div>

                <div class="memory-card" data-framework="queijo">
                  <!--Card 4-->
                  <img class="front-face" src="img/banner4.jpg" />
                  <img class="back-face" src="img/HW-icon.png" />
                </div>
                <div class="memory-card" data-framework="queijo">
                  <img class="front-face" src="img/banner4.jpg" />
                  <img class="back-face" src="img/HW-icon.png" />
                </div>

                <div class="memory-card" data-framework="elefante">
                  <!--Card 5-->
                  <img class="front-face" src="img/banner5.jpg" />
                  <img class="back-face" src="img/HW-icon.png" />
                </div>
                <div class="memory-card" data-framework="elefante">
                  <img class="front-face" src="img/banner5.jpg" />
                  <img class="back-face" src="img/HW-icon.png" />
                </div>

                <div class="memory-card" data-framework="Cat">
                  <!--Card 6-->
                  <img class="front-face" src="img/banner6.jpg" />
                  <img class="back-face" src="img/HW-icon.png" />
                </div>
                <div class="memory-card" data-framework="Cat">
                  <img class="front-face" src="img/banner6.jpg" />
                  <img class="back-face" src="img/HW-icon.png" />
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

</script>