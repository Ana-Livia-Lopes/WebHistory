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
                </article>
            </article>
        </section>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');

        .quiz-ha {
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

        .centro {
            text-align: center;
        }

        .questao {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        #numQuestao {
            text-align: center;
            width: 2.5rem;
            height: 2rem;
            display: block;
            background: #438e4b;
            color: #fff;
            padding: 6px 10px 4px 8px;
            border-radius: 50%;
        }

        #pergunta {
            font-size: 1rem;
            margin-left: 0.5rem;
        }

        .imagemDaQuestao {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 15px;
        }

        .questoes {
            user-select: none;
            background: #fff;
            padding: 1.2rem 1.2rem 0.7rem 1.2rem;
            border: 1px solid #ececec;
            border-radius: 15px;
            margin-bottom: 0.625rem;

            height: 460px;
            max-width: 450px;

            overflow-y: auto;
            word-wrap: break-word;
            text-align: justify;
        }

        .questoes ol li {
            border: 1px solid black;
            display: block;
            margin-bottom: 0.625rem;
            padding: 1rem;
            border-radius: 18px;
            font-size: 1rem; 
            padding: 0.75rem; 
            margin-bottom: 0.5rem; 
        }

        .questoes ol li:hover {
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
            margin-top: 54px;
            font-size: 0.8rem;
        }

        #total #numero {
            font-size: 1rem;
        }

        #autoria {
            margin-top: 0.625rem;
            font-size: 0.75rem;
        }

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
    </style>

    <script>
        let titulo = document.querySelector('h1')
        let instrucoes = document.querySelector('#instrucoes')
        let aviso = document.querySelector('#aviso')
        let progresso = document.querySelector('#progresso')
        let pontos = 0 
        let placar = 0 

        let somAplausos = document.querySelector('#somAplausos')

        let numQuestao = document.querySelector('#numQuestao')
        let pergunta = document.querySelector('#pergunta')

        let a = document.querySelector('#a')
        let b = document.querySelector('#b')
        let c = document.querySelector('#c')
        let d = document.querySelector('#d')

        let articleQuestoes = document.querySelector('.questoes')
        let alternativas = document.querySelectorAll('#alternativas li')

        const questoes = [
            {
                numQuestao: 1,
                pergunta: "Qual civilização desenvolveu a escrita cuneiforme?",
                alternativaA: "Babilônios",
                alternativaB: "Sumérios",
                alternativaC: "Assírios",
                alternativaD: "Acádios",
                correta: "Sumérios",
            },
            {
                numQuestao: 2,
                pergunta: "O Código de Hamurabi é associado a qual civilização?",
                alternativaA: "Gregos",
                alternativaB: "Egípcios",
                alternativaC: "Babilônios",
                alternativaD: "Sumérios",
                correta: "Babilônios",
            },
            {
                numQuestao: 3,
                pergunta: "O que os egípcios praticavam para preservar os corpos?",
                alternativaA: "Embalsamamento",
                alternativaB: "Cremação",
                alternativaC: "Mumificação",
                alternativaD: "Sepultamento",
                correta: "Mumificação",
            },
            {
                numQuestao: 4,
                pergunta: "Qual filósofo grego é conhecido por sua contribuição à ética e à política?",
                alternativaA: "Homero",
                alternativaB: "Sócrates",
                alternativaC: "Aristóteles",
                alternativaD: "Platão",
                correta: "Aristóteles",
            },
            {
                numQuestao: 5,
                pergunta: "Qual estrutura é um exemplo da engenharia romana?",
                alternativaA: "Pirâmides de Gizé",
                alternativaB: "Coliseu",
                alternativaC: "Templo de Apolo",
                alternativaD: "Partenon",
                correta: "Coliseu",
            }
        ]

        let questaoAtual = 0

        document.querySelector('#total').textContent = questoes.length

        function proximaQuestao(nQuestao) {
            if (nQuestao >= questoes.length) {
                fimDoJogo()
                return
            }

            let questao = questoes[nQuestao]

            questaoAtual = nQuestao 
            document.querySelector('#numero').textContent = questao.numQuestao
            numQuestao.textContent = questao.numQuestao
            pergunta.textContent = questao.pergunta
            a.textContent = questao.alternativaA
            b.textContent = questao.alternativaB
            c.textContent = questao.alternativaC
            d.textContent = questao.alternativaD

            const respostaCorretaEl = document.querySelector('#resposta-correta')
            if (respostaCorretaEl) respostaCorretaEl.remove()
        }

        function verificarSeAcertou(respostaEscolhida) {
            let certa = questoes[questaoAtual].correta

            if (respostaEscolhida === certa) {
                piscarNoAcerto()
                pontos += 10

                const respostaCorretaEl = document.querySelector('#resposta-correta')
                if (respostaCorretaEl) respostaCorretaEl.remove()
            } else {
                piscarNoErro()
                mostrarRespostaCorreta()
            }

            setTimeout(() => {
                tirarPiscar()
                proximaQuestao(questaoAtual + 0.5)
            }, 2000)
        }

        function mostrarRespostaCorreta() {
            if (document.querySelector('#resposta-correta')) return

            const respostaCorretaEl = document.createElement('p')
            respostaCorretaEl.id = 'resposta-correta'
            respostaCorretaEl.textContent = `Resposta correta: ${questoes[questaoAtual].correta}`
            respostaCorretaEl.style.color = 'black'
            respostaCorretaEl.style.marginTop = '10px'
            respostaCorretaEl.style.marginLeft = '70px'
            respostaCorretaEl.style.marginBottom = '-34px'
            respostaCorretaEl.style.fontSize = '20px'
            document.querySelector('#alternativas').appendChild(respostaCorretaEl)
        }

        alternativas.forEach((alternativa) => {
            alternativa.addEventListener('click', () => {
                verificarSeAcertou(alternativa.textContent)
            })
        })

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

        function fimDoJogo() {
            let s = pontos === 1 ? '' : 's'
            instrucoes.textContent = `Fim de Jogo! Você conseguiu ${pontos} ponto${s}.`

            instrucoes.style.marginTop = '300px'
            instrucoes.classList.add('placar')
            articleQuestoes.style.display = 'none'
            articleQuestoes.style.marginTop = '0px'

            setTimeout(() => {
                pontos = 0
                instrucoes.classList.remove('placar')
                articleQuestoes.style.display = 'block'
                proximaQuestao(0)

                instrucoes.style.marginTop = '0px'
                instrucoes.textContent = 'Leia a questão e clique na resposta correta'
            }, 8000)
        }

        proximaQuestao(0)
    </script>
</body>
</html>