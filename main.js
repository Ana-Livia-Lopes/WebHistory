// Código sidebar

let butMenu = document.querySelector('#but-menu')
let sideBar = document.querySelector('.sidebar')

butMenu.onclick = function() {
    sideBar.classList.toggle('active');
}

// Fim código sidebar
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

// Adiciona o evento de clique para rolar para o topo
scrollToTopButton.addEventListener('click', (event) => {
    event.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Evento de rolagem para exibir/ocultar o botão
window.addEventListener('scroll', () => {
    if (window.scrollY > 100) { // Ajuste o valor conforme necessário
        scrollToTopButton.classList.add('show'); // Mostra o botão
    } else {
        scrollToTopButton.classList.remove('show'); // Esconde o botão
    }
});