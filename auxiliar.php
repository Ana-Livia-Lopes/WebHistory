<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="images/favicon.png" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maia Quiz</title>
</head>
<body>

    <main class="tela-principal">

        <section class='conteudos'>

            <article class='centro' id='instrucoes'>
                Leia a questão e clique na resposta correta
            </article>

            <article class='questoes'>
                
                <figure class='imagemDaQuestao'>
                    <img src="" alt="Img da questao" width="300px"/>
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
                <article id='aviso' class='centro'>
                    <span id='numero'></span> de <span id='total'></span>
                </article>
            </article>
            
        
        </section>

    </main>
<audio preload src="assets/positive.mp3" id='somAcerto'></audio>
<audio preload src="assets/negative.mp3" id='somErro'></audio>
<audio preload src="assets/aplausos.mp3" id='somAplausos'></audio>

    <style>
        /*Inicio quiz*/
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');

        /* vermelho #f44336 ou #d50000 verde #4caf50 ou #1b5e20  */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
            font-size: 1.25rem;
        }

        body {
            width: 100vw;
            height: 100vh;
            background: #ececec;
            color: #191919;
            overflow-x: hidden;
        }

        main {
            width: 100%;
            height: 100vh;
        }

        section {
            width: 100vw;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            text-align: center;
            font-size: 1.75rem;
            margin: 0.5rem 0 0 0;
        }

        /* classe para centralizar textos, paragrafos */
        .centro {
            text-align: center;
        }

        /* div class questao com numero da questao e pergunta */
        .questao {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        #numQuestao {
            text-align: center;
            width: 3rem;
            height: 2rem;
            display: block;
            background: #438e4b;
            color: #fff;
            padding: 6px 10px 4px 8px;
            border-radius: 50%;
        }

        #pergunta {
            margin-left: 1rem;
        }

        .imagemDaQuestao {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 15px;
        }

        /* article que acomoda a questao completa */
        .questoes {
            user-select: none;
            background: #fff;
            padding: 1.5rem 1.5rem 1rem 1.5rem;
            border: 1px solid #ececec;
            border-radius: 15px;
            margin-bottom: 0.625rem;

            /* Tamanho fixo */
            width: 500px; /* Ou ajuste conforme necessário */
            max-width: 600px; /* Para limitar o tamanho máximo do quiz */

            /* Quebra de linha e ajuste de texto */
            overflow-y: auto; /* Adiciona barra de rolagem caso o texto exceda a altura */
            word-wrap: break-word;
            text-align: justify;
        }

        .questoes ol li {
            border: 1px solid black;
            display: block;
            margin-bottom: 0.625rem;
            padding: 1rem;
            border-radius: 8px;
        }

        .questoes ol li:hover {
            background: #438e4b74;
            cursor: pointer;
            border: 1px solid black;
        }

        .bloqueado {
            display: none;
        }

        .bloqueado li:hover {
            display: none;
        }

        #instrucoes {
            font-size: 1rem;
            color: #191919;
            padding: 0.625rem;
            border-radius: 8px;

            display: flex;
            justify-content: center;
        }

        #aviso {
            color: #438e4b;
            margin-bottom: -5px;
        }

        #autoria {
            margin-top: 0.625rem;
            font-size: 0.75rem;
        }

        /* ANIMACAO */

        /* Animar o input */
        @keyframes piscar {
            0% {
                filter: drop-shadow(0 0 15px #438e4b);
                -webkit-filter: drop-shadow(0 0 15px #438e4b);
                -moz-filter: drop-shadow(0 0 15px #438e4b);
                -o-filter: drop-shadow(0 0 15px #438e4b);
                -ms-filter: drop-shadow(0 0 15px #438e4b);
            }
            100% {
            }
        }

        .animar {
            animation: piscar .75s infinite alternate;
        }

        .aparecer {
            animation: aparecer .5s infinite alternate;
        }

        @keyframes aparecer {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 0.5;
            }
            100% {
                opacity: 1;
            }
        }

        .acertou {
            background-color: #438e4b7e;
            transition: background-color 1s ease;
        }

        .errou {
            background-color: rgba(255, 0, 0, 0.511);
            transition: background-color 1s ease;
        }


        .placar {
            padding: 1rem;
            border-radius: 8px;
            background:#03a9f4;
            font-size: 2rem;
        }
        /*Fim quiz*/
    </style>

    <script>
        /* Aula 20 MaiaQuiz  */
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

        const q0 = {
            numQuestao   : 0,
            imagem       : '0.png',  // ADICIONE
            pergunta     : "Pergunta",
            alternativaA : "Alternativa A",
            alternativaB : "Alternativa B",
            alternativaC : "Alternativa C",
            alternativaD : "Alternativa D",
            correta      : "0",
        }
        
        const q1 = {
            numQuestao   : 1,
            imagem       : './img/feudalismo.jfif',  // ADICIONE
            pergunta     : "Qual civilização desenvolveu a escrita cuneiforme?",
            alternativaA : "Babilônios",
            alternativaB : "Sumérios",
            alternativaC : "Assírios",
            alternativaD : "Acádios",
            correta      : "Sumérios",
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
        const q5 = {
            numQuestao   : 5,
            imagem       : '5.png',  // ADICIONE
            pergunta     : "Nascente é o mesmo que...",
            alternativaA : "Lado que o sol nasce",
            alternativaB : "Abaixo do Equador",
            alternativaC : "Lado que o sol se põe",
            alternativaD : "Acima do Equador",
            correta      : "Lado que o sol nasce",
        }

        // CONSTANTE COM UM ARRAY DE OBJETOS COM TODAS AS QUESTOES
        const questoes = [q1, q2, q3, q4, q5]

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
            numero.textContent = nQuestao;
            numQuestao.textContent = questoes[nQuestao].numQuestao;

            // Tente carregar a imagem e veja se o caminho é válido
            console.log("Tentando carregar a imagem:", questoes[nQuestao].imagem);
            imgQuestao.setAttribute('src', questoes[nQuestao].imagem); // Ajustado para refletir a propriedade correta

            pergunta.textContent = questoes[nQuestao].pergunta;
            a.textContent = questoes[nQuestao].alternativaA;
            b.textContent = questoes[nQuestao].alternativaB;
            c.textContent = questoes[nQuestao].alternativaC;
            d.textContent = questoes[nQuestao].alternativaD;

            a.setAttribute('value', nQuestao + 'A');
            b.setAttribute('value', nQuestao + 'B');
            c.setAttribute('value', nQuestao + 'C');
            d.setAttribute('value', nQuestao + 'D');
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
            setTimeout(() => {
                articleQuestoes.classList.remove('acertou');
                articleQuestoes.classList.remove('errou');
            }, 400); // Remove a cor após 2 segundos
        }

        function verificarSeAcertou(nQuestao, resposta) {
            let numeroDaQuestao = nQuestao.value;
            let respostaEscolhida = resposta.textContent;
            let certa = questoes[numeroDaQuestao].correta;

            if(respostaEscolhida === certa) {
                piscarNoAcerto();
                somAcerto.play();
                pontos += 10;
            } else {
                piscarNoErro();
                somErro.play();
            }

            setTimeout(() => {
                tirarPiscar(); // Remove a cor de acerto/erro
                proximaQuestao(parseInt(numeroDaQuestao) + 1); // Carrega a próxima questão
            }, 1500); // Ajuste o tempo para coincidir com o tempo da animação
        }

        function tirarPiscar() {
            articleQuestoes.classList.remove('acertou');
            articleQuestoes.classList.remove('errou');
        }


        // Ajustar o início do quiz e o próximo carregamento
        proximaQuestao(0);

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
                proximaQuestao(0)
                instrucoes.textContent = 'Leia a questão e clique na resposta correta'
            }, 8000)

        }
    </script>
</body>
</html>