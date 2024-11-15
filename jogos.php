<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="./main.js" defer></script>
    </head>
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
</html>






<style>
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

