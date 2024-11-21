// Código sidebar

let butMenu = document.querySelector('#but-menu')
let sideBar = document.querySelector('.sidebar')

butMenu.onclick = function() {
    sideBar.classList.toggle('active'); //abre a nav bar quando o botão de 3 barrinhas é clicado
}

let ampulheta = document.querySelector('#ampulheta')
let dropDown = document.querySelector('#select-nav')

dropDown.onclick = function(){
    ampulheta.classList.toggle('girar'); //faz a animação de giro da ampulheta quando o dropdown é clicado
}

// Fim código sidebar
// código quiz
const correctAnswers = {
    q11: "Invasões bárbaras e insegurança",
    q12: "Árabes",
    q13: "Promoveram troca cultural e comercial com a Ásia",
    q14: "Levou à valorização dos salários devido à escassez de trabalhadores",
    q15: "Cisma do Oriente"
};

function checkAnswers(formId, resultDisplayId) {
    let score = 0;
    const form = document.getElementById(formId);
    const resultDisplay = document.getElementById(resultDisplayId);

    if (!form || !resultDisplay) {
        console.error("Erro: Formulário ou elemento de resultado não encontrados.");
        return;
    }

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
// fim código quiz
AOS.init();

function banner1() {
    section = document.querySelector('#historia-primitiva')
    section.scrollIntoView({ behavior: 'smooth' });
    return;
}
function banner2() {
    section = document.querySelector('#historia-antiga')
    section.scrollIntoView({ behavior: 'smooth' });
    return;
}
function banner3() {
    section = document.querySelector('#idade-media')
    section.scrollIntoView({ behavior: 'smooth' });
    return;
}
function banner4() {
    section = document.querySelector('#idade-moderna')
    section.scrollIntoView({ behavior: 'smooth' });
    return;
}
function banner5() {
    section = document.querySelector('#idade-comtemporanea')
    section.scrollIntoView({ behavior: 'smooth' });
    return;
}

// fim codgo index

const scrollToTopButton = document.getElementById('scrollToTopButton');

// Função de rolagem suave personalizada
function smoothScrollToTop() {
    const scrollStep = -window.scrollY / 15; // Controla a velocidade
    const scrollInterval = setInterval(() => {
        if (window.scrollY !== 0) {
            window.scrollBy(0, scrollStep); // Rola uma pequena quantidade
        } else {
            clearInterval(scrollInterval); // Para quando chegar ao topo
        }
    }, 15); // Ajuste o tempo de intervalo se necessário
}

// Evento de clique para rolar ao topo
scrollToTopButton.addEventListener('click', (event) => {
    event.preventDefault();
    smoothScrollToTop(); // Chama a função de rolagem suave personalizada
});

// Evento de rolagem para exibir/ocultar o botão
window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        scrollToTopButton.classList.add('show'); // Mostra o botão
    } else {
        scrollToTopButton.classList.remove('show'); // Esconde o botão
    }
});

//Organizador alfabético dos termos no glossário
