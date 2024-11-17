<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>História na Web - jogos</title>
        <script src="./main.js" defer></script>
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
                    <a href="jogos.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path id="icon-game" d="M189-160q-60 0-102.5-43T42-307q0-9 1-18t3-18l84-336q14-54 57-87.5t98-33.5h390q55 0 98 33.5t57 87.5l84 336q2 9 3.5 18.5T919-306q0 61-43.5 103.5T771-160q-42 0-78-22t-54-60l-28-58q-5-10-15-15t-21-5H385q-11 0-21 5t-15 15l-28 58q-18 38-54 60t-78 22Zm3-80q19 0 34.5-10t23.5-27l28-57q15-31 44-48.5t63-17.5h190q34 0 63 18t45 48l28 57q8 17 23.5 27t34.5 10q28 0 48-18.5t21-46.5q0 1-2-19l-84-335q-7-27-28-44t-49-17H285q-28 0-49.5 17T208-659l-84 335q-2 6-2 18 0 28 20.5 47t49.5 19Zm348-280q17 0 28.5-11.5T580-560q0-17-11.5-28.5T540-600q-17 0-28.5 11.5T500-560q0 17 11.5 28.5T540-520Zm80-80q17 0 28.5-11.5T660-640q0-17-11.5-28.5T620-680q-17 0-28.5 11.5T580-640q0 17 11.5 28.5T620-600Zm0 160q17 0 28.5-11.5T660-480q0-17-11.5-28.5T620-520q-17 0-28.5 11.5T580-480q0 17 11.5 28.5T620-440Zm80-80q17 0 28.5-11.5T740-560q0-17-11.5-28.5T700-600q-17 0-28.5 11.5T660-560q0 17 11.5 28.5T700-520Zm-360 60q13 0 21.5-8.5T370-490v-40h40q13 0 21.5-8.5T440-560q0-13-8.5-21.5T410-590h-40v-40q0-13-8.5-21.5T340-660q-13 0-21.5 8.5T310-630v40h-40q-13 0-21.5 8.5T240-560q0 13 8.5 21.5T270-530h40v40q0 13 8.5 21.5T340-460Zm140-20Z"/></svg>    
                        <span class="item-nav">Jogos</span>
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
          <h1>JOGOS</h1>
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






<style>
  /* Início da navbar */
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
#logo-nav{
    width: 120px;
    margin-left: 15px;
    margin-top: 7px;
}

i{
    font-size: 23px;
}

#user-def-nav{
    width: 45px;
    height: 45px;
    margin-left: -3px;
    border-radius: 100%;
    transition: all 0.5s ease;
}

.sidebar.active #user-def-nav{
    margin: 2px;
}

.sidebar{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    position: absolute;
    z-index: 200;
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 80px;
    background-color: rgb(49, 49, 49);
    padding: .4rem .8rem;
    transition: all 0.5s ease;
}

.sidebar.active ~.main-content{
    left: 250px;
    width: calc(100% - 250px);
}

.sidebar.active{
    width: 250px;
}

.sidebar #but-menu{
    position: absolute;
    color: rgb(202, 202, 202);
    top: .4rem;
    left: 50%;
    font-size: 24px;
    line-height: 50px;
    transform: translateX(-50%);
    cursor: pointer;
    transition: all 0.5s ease;
}

.sidebar.active #but-menu{
    left: 90%;
}

.sidebar .topo .logo{
    display: flex;
    height: 50px;
    width: 100%;
    align-items: center;
    pointer-events: none;
    opacity: 0;
    transition: all 0.5s ease;
}

.sidebar.active .topo .logo{
    opacity: 1;
}

.topo .logo i{
    margin-right: 5px;
}

.usuario{
    padding: 7px;
    display: flex;
    margin: 1rem 0;
    transition: all 0.5s ease;
}

.usuario p{
    color: white;
    opacity: 1;
    margin-left: 0.5rem;
}

.user-nome{
    font-weight: 600;
    overflow-wrap: break-word;
    width: 90%;
}

#user-nivel-acesso{
    color: rgb(165, 165, 165);
    font-size: 14px;
    font-weight: 500;
}

.sidebar p{
    opacity: 0;
    transition: all 0.5s ease;
}

.sidebar.active p{
    opacity: 1;
}

.sidebar ul li{
    position: relative;
    list-style-type: none;
    height: 50px;
    width: 90%;
    margin: 0.8rem auto;
    line-height: 50px;
}

.sidebar ul li a{
    color: rgb(202, 202, 202);
    font-weight: 500;
    display: flex;
    align-items: center;
    text-decoration: none;
    border-radius: 0.7rem;
    transition: background-color 0.3s ease;
}

.sidebar ul li a:hover:not(#conteudo-select){
    background-color: rgba(255, 255, 255, 0.21);
}

.sidebar ul li a i{
    min-width: 50px;
    text-align: center;
    height: 50px;
    border-radius: 12px;
    line-height: 50px;
}

.sidebar .item-nav{
    opacity: 0;
    transition: opacity 0.5s ease;
}

.sidebar.active .item-nav{
    opacity: 1;
}

.main-content{
    position: relative;
    min-height: 100vh;
    top: 0;
    left: 80px;
    transition: all 0.5s ease;
    width: calc(100% - 80px);
}

.sidebar.active .usuario{
    background-color: rgba(255, 255, 255, 0.112);
    padding: 7px;
    border-radius: 0.8rem;
}

.subclass-usuario{
    font-size: 2px;
}

.sidebar.active .subclass-usuario{
    width: 55%;
    display: flex;
    flex-direction: column;
    font-size: 16px;
}

#nav-sair{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: 500;
    background-color: #438e4b;
    color: white;
    border: none;
    width: 47px;
    height: 25px;
    border-radius: 3px;
    cursor: pointer;
    transition: all 0.2s ease;
    opacity: 0;
}

#nav-entrar{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: 500;
    background-color: #438e4b;
    color: white;
    border: none;
    width: 100%;
    height: 32px;
    border-radius: 3px;
    cursor: pointer;
    transition: all 0.2s ease;
    margin-bottom: 20px;
}

#nav-sair, #nav-entrar:hover{
    background-color: #5c9f63;
    color: rgb(226, 226, 226);
}

.sidebar.active #nav-sair{
    opacity: 1;
}

#botao-acoes{
    display: flex;
    align-items: center;
}
#select-nav {
    background-color: rgb(49, 49, 49); 
    color: rgb(202, 202, 202); 
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    border: transparent; 
    font-weight: 500;
    padding: 4px;
    max-width: 176px;
    border-radius: 5px;
    font-size: 16px;
    margin-left: auto;
}
#conteudo-select i {
    margin-right: -7px;
}
#select-nav option{
    font-weight: 600;
}
#icon-game{
  font-size: 90px;
}
/* fim da navbar */
body{
  align-items: center;
  justify-content: center;
  display: grid;
}
#linha6{
  margin-bottom: 30px;
}
#linha, #linha2, #linha3, #linha4, #linha5, #linha6 {
    display: none;
}
h1{
    text-align: center;
}
.btn{
  margin-bottom: 50px;
  display: flex;
  justify-content: center;
  align-items:center;
  width: 800px;
  height: 100px;  
  background-color: transparent;
  border: 3px solid #000;
  border-radius: 3px;
  box-shadow: inset 0 0 0 0 #000;
  cursor: pointer;
  transition: all 0.5s ease;
  position: relative;
  overflow: hidden;
  #texto{
    position: relative;
    z-index:3;
    font-size: 30px;
  }
  &:after {
    transition: all 1s ease;
    content: '';
    left: -100px;
    top: 0;
    height: 100%;
    width: 0;
    transform: skew(-60deg);
    position: absolute;
    background: #000;
  }
  &:hover{
    color: #fff;
    &:after {
      width: 200%;
    }
  }
}
/* memória */
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css");
@import url("https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap");


.memory-game {
  padding-left: 20px;
  position: relative;
  display: flex;
  width: 650px;
  max-width: 100% !important;
  height: 450px;
  margin: 60px;
  flex-wrap: wrap;
  perspective: 1000px;
}
.memory-card {
  width: calc(25% - 10px);
  height: calc(33.333% - 10px);
  margin: 5px;
  position: relative;
  box-shadow: 2px 2px 4px 2px rgb(0 0 0 / 30%);
  transform: scale(1);
  transform-style: preserve-3d;
  transition: transform 0.5s;
}

.front-face,
.back-face {
  width: 100%;
  height: 100%;
  position: absolute;
  display: flex;
  border: #333 8px;
  background: #341f44;
  backface-visibility: hidden;
  list-style: none;
  object-fit: cover ;
}
.back-face{
    background-color: white;
    cursor: pointer;
}


.memory-card.flip {
  transform: rotateY(180deg);
}

.front-face {
  transform: rotateY(180deg);
}

</style>





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

