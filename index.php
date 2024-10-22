<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js" defer></script>
    <title>História na Web</title>
    <link rel="stylesheet" href="css/style.css">
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
    

    <section id="secao1">
        <h1>História na Web<img id="folha" src="img/HW-icon-folha.png" alt=""></h1>
        <div class="div">História na Web,</div> 
        <div class="div"> 
            <span>Reviva o passado e entenda o presente</span>
        </div>
    </section>
    <section id="secao2">
        <div class=" pc imgSobre" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            <div class="sobre">
                <h1>Sobre:</h1>
                <p>Bem-vindo ao História na Web! Aqui, você terá acesso a uma vasta gama de recursos de qualidade sobre os mais variados momentos da história, que contribuirão para o seu aprendizado.</p>
            </div>
        </div>
        <div class="cel imgSobre" data-aos="fade" data-aos-duration="1000" data-aos-delay="200">
            <div class="sobre">
                <h1>Sobre:</h1>
                <p>Bem-vindo ao História na Web! Aqui, você terá acesso a uma vasta gama de recursos de qualidade sobre os mais variados momentos da história, que contribuirão para o seu aprendizado.</p>
            </div>
        </div>
    </section>
    <section id="secao3">
        
<!-- computador -->
 <div id="pc">
     <div onclick="banner1()" class="banner" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
         <div class="div-img-banner" >
         <img src="img/banner1.jpg" id="img-banner">
         </div>
         
         <div class="texto">
             <h4>História Primitiva</h4>
         </div>
     </div>
     <div onclick="banner2()" class="banner" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
         <div class="div-img-banner">
             <img src="img/banner2.jpg" id="img-banner">
         </div>
         
         <div class="texto">
             <h4>História Antiga</h4>
         </div>
     </div>
     
     <div onclick="banner3()" class="banner" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
         <div class="div-img-banner">
             <img src="img/banner3.jpg" id="img-banner">
         </div>
         
         <div class="texto">
             <h4>Idade Média</h4>
         </div>
     </div>
     
     <div onclick="banner4()" class="banner" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
         <div class="div-img-banner">
         <img src="img/banner4.jpg" id="img-banner">
         </div>
         
         <div class="texto">
             <h4>Idade Moderna</h4>
         </div>
     </div>
     
     <div onclick="banner5()" class="banner" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
         <div class="div-img-banner">
         <img src="img/banner5.jpg" id="img-banner">
         </div>
         
         <div class="texto">
             <h4>Idade Contemporânea</h4>
         </div>
     </div>
 </div>
 <!-- fim computador -->
  <!-- celular -->
<div id="celular">

    <div onclick="window.location='#historia-primitiva'" class="banner" data-aos="fade" data-aos-duration="1000" data-aos-delay="100">
        <div class="div-img-banner" >
        <img src="img/banner1.jpg" id="img-banner">
        </div>
        
        <div class="texto">
            <h4>História Primitiva</h4>
        </div>
    </div>

    <div onclick="window.location='#historia-antiga'" class="banner" data-aos="fade" data-aos-duration="1000" data-aos-delay="100">
        <div class="div-img-banner">
            <img src="img/banner2.jpg" id="img-banner">
        </div>
        
        <div class="texto">
            <h4>História Antiga</h4>
        </div>
    </div>

    <div onclick="window.location='#idade-media'" class="banner" data-aos="fade" data-aos-duration="1000" data-aos-delay="100">
        <div class="div-img-banner">
            <img src="img/banner3.jpg" id="img-banner">
        </div>
        
        <div class="texto">
            <h4>Idade Média</h4>
        </div>
    </div>

    <div onclick="window.location='#idade-moderna'" class="banner" data-aos="fade" data-aos-duration="1000" data-aos-delay="100">
        <div class="div-img-banner">
        <img src="img/banner4.jpg" id="img-banner">
        </div>
        
        <div class="texto">
            <h4>Idade Moderna</h4>
        </div>
    </div>

    <div onclick="window.location='#idade-comtemporanea'" class="banner" data-aos="fade" data-aos-duration="1000" data-aos-delay="100">
        <div class="div-img-banner">
        <img src="img/banner5.jpg" id="img-banner">
        </div>
        
        <div class="texto">
            <h4>Idade Contemporânea</h4>
        </div>
    </div>
</div>
  <!-- fim celular -->
    </section>
    <section id="secao4">

    <div id="historia-primitiva" class="historia pc"> <!-- com texto -->
        <h2>História Primitiva</h2><hr id="hr1">
            <h3>Paleolítico </h3>
            
            Foi o primeiro período da Pré-História, quando os hominídeos eram nômades e tinham como práticas cotidianas a caça, pesca e colheita de frutos. Os primeiros grupos humanos procuravam adaptar-se ao ambiente em que viviam e buscavam a sobrevivência por meio da caça de animais, pesca de peixes nos rios e colheita de vegetais e frutos disponíveis por onde passavam. Os primeiros seres humanos eram nômades e estavam em constante deslocamento, fugindo das intempéries da natureza ou de animais selvagens, como também em busca de espaço que pudesse fornecer alimentos ou proteção para o momento. A principal transformação ocorrida nesse período foi a descoberta do fogo. 

            A descoberta do fogo transformou a vida dos hominídeos, pois, a partir disso, eles puderam ficar nas cavernas com segurança e se aquecer do frio. Além disso, o fogo assava os alimentos e espantava os animais silvestres. 

            Outra transformação importante no Paleolítico foi o uso da pedra lascada. As experiências adquiridas a partir da vivência deram aos hominídeos conhecimento sobre a melhor maneira de caçar, pescar e colher. Ao lascarem as pedras, os instrumentos utilizados no dia a dia se tornavam mais eficazes. As lanças ficaram pontiagudas, o que favorecia os ataques dos primeiros grupos humanos quando caçavam animais. 
            

            <h3>Pintura Rupestre no Paleolítico</h3>
            
            Os primeiros registros da pintura rupestre são do Paleolítico. Ao se estabelecerem nas cavernas, seja para se proteger do frio, seja como abrigo provisório, os hominídeos desenhavam nas paredes os animais capturados em uma caça ou os que eles desejavam caçar. Essas pinturas eram feitas a partir de sangue de animais ou folhas e flores. A arte rupestre é a principal fonte de informações sobre a Pré-História. 

            As pinturas representam os seres humanos de forma isolada ou realizando atividades do cotidiano. Os animais representados nas paredes das cavernas eram aqueles que os hominídeos conseguiam capturar durante as caças ou aqueles que os atacavam. Outra característica da arte rupestre é a religiosidade. Algumas pinturas representam os primeiros rituais religiosos praticados no Paleolítico. 
            

            <h3>Neolítico</h3>
            
            O período Neolítico ocorreu do ano 7000 a.C. até 2500 a.C., sendo conhecido também como período da Pedra Polida. Foi um momento marcante da Pré-História, pois a vida do humano primitivo passou por diversas transformações nele. Os grupos humanos sedentarizaram-se, isto é, fixaram-se em um único lugar e intensificaram a prática da agricultura. 

            A sedentarização também influenciou nessa fixação dos grupos em um único lugar. A prática da agricultura possibilitou o plantio e a colheita de sementes. Isso influenciou na produção de peças feitas de argila para armazenar essa produção. Os animais selvagens eram mortos para afastar-se o perigo contra os grupos, ou para a retirada de seus ossos e dentes para a fabricação de armas, ou ainda para a alimentação; e os animais menores eram domesticados e introduzidos no cotidiano dos humanos, como cachorros e algumas aves. 

            Durante o Neolítico, os hominídeos utilizavam a pedra polida para fabricar instrumentos mais eficazes, pois por meio dela havia maior precisão nos cortes. Esses instrumentos poderiam ser utilizados para caçar ou pescar e para atacar grupos inimigos. 

            <h3>Revolução Agrícola no Neolítico</h3>

            A revolução agrícola foi uma das marcas do período Neolítico. Com a sedentarização dos grupos humanos, pôde-se observar e reconhecer os fenômenos naturais e explorar a natureza em benefício do grupo. Além disso, o primitivo pôde utilizar a terra, plantando e colhendo seus frutos. Com essa mudança, aumentou-se o número populacional e os grupos humanos transformaram-se em sociedades mais complexas, abrindo espaço para a formação de um Estado que as administrasse. 

            O período neolítico (8 mil a.C. a 5 mil a.C.) foi marcado pelo fenômeno que ficou denominado primeira revolução agrícola. Foi nesse período da história que ocorreu o domínio do fogo. Essa mudança possibilitou o início do controle de técnicas para dominar a produção de alimentos. As ferramentas rústicas do período paleolítico (3,5 milhões a.C. a 8 mil a.C.) foram aperfeiçoadas para a atividade agrícola. É por isso que essa fase também é denominada Revolução Neolítica. Além da agricultura, o homem passou a dominar a criação de animais. 
        </div>
        
        <div id="historia-primitiva" class="historia cel">
        <h2>História Primitiva</h2><hr id="hr1">
            <h3>Paleolítico</h3>
            <p>Foi o primeiro período da Pré-História, marcado pelo nomadismo e práticas de caça, pesca e coleta de frutos. A principal transformação foi a descoberta do fogo, que trouxe segurança, calor e proteção, além do uso da pedra lascada, que melhorou as ferramentas de caça.</p>

            <h3>Pintura Rupestre no Paleolítico</h3>
            <p>As pinturas rupestres do Paleolítico, feitas com sangue de animais ou plantas, registravam caças e rituais religiosos. Elas são a principal fonte de informação sobre a vida dos hominídeos.</p>

            <h3>Neolítico</h3>
            <p>O Neolítico, ou período da Pedra Polida (7000 a.C. - 2500 a.C.), foi marcado pela sedentarização, agricultura e domesticação de animais. As ferramentas de pedra polida permitiam maior precisão nas atividades diárias.</p>

            <h3>Revolução Agrícola no Neolítico</h3>
            <p>A revolução agrícola trouxe a prática do cultivo e domesticação de animais, aumentando a população e levando à formação de sociedades mais complexas e à criação de um Estado. Houve avanços nas técnicas agrícolas e no uso de ferramentas.</p>
        </div>


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


        <div id="idade-media" class="historia pc"> <!-- com texto -->
        <h2>Idade Média</h2><hr id="hr3">
            <p>
                <h3>Alta Idade Média</h3>

                    A Alta Idade Média começou em 476 d.C., com a queda do Império Romano do Ocidente, e se estendeu até aproximadamente 1000 d.C. Esse período é marcado pela desintegração das estruturas de poder romano e o surgimento de novos reinos germânicos, liderados por grupos como os visigodos, ostrogodos e francos. As invasões bárbaras provocaram a migração de populações e a instabilidade política. 

                    <ul>
                        <li>
                            <h4>Invasões Bárbaras:</h4> Os povos germânicos, motivados por pressões demográficas e busca por novas terras, invadiram o território romano. O enfraquecimento do exército romano e as disputas internas facilitaram essa transição. Os francos, sob o comando de Clóvis, fundaram uma das primeiras dinastias significativas na Europa Ocidental.
                        </li> 
                        <li>
                            <h4>Surgimento do Feudalismo:</h4> Com a insegurança provocada pelas invasões, o feudalismo emergiu como uma resposta social e econômica. O sistema se baseava na relação entre senhores feudais e vassalos, com uma economia agrária e uma sociedade rigidamente hierarquizada.
                        </li>
                    </ul>

                    <h3>Baixa Idade Média</h3>

                    A Baixa Idade Média (c. 1000-1500 d.C.) é caracterizada pelo crescimento do comércio, o surgimento de cidades e a ascensão da Igreja Católica como uma instituição poderosa. Este período também inclui a realização das Cruzadas. 
                    <ul>
                        <li>
                            <h4>Cruzadas:</h4> As Cruzadas foram uma série de expedições militares iniciadas no final do século XI, convocadas principalmente pelo Papa Urbano II em 1095, com o objetivo de recuperar a Terra Santa dos muçulmanos. A Primeira Cruzada resultou na conquista de Jerusalém em 1099, mas as campanhas subsequentes, como a Segunda (1147-1149) e a Terceira (1189-1192), não tiveram o mesmo sucesso.
                        </li>
                    </ul>
                    

                    <h3>Feudalismo</h3>

                    O feudalismo foi um sistema político, econômico e social que dominou a Europa durante a Idade Média. Ele era caracterizado por: 
                    <ul>
                        <li>
                            <h4>Estrutura Social:</h4> A sociedade era dividida em três grupos principais: os nobres (senhores feudais), os vassalos (que prestavam serviços em troca de proteção) e os camponeses (servos que trabalhavam as terras). Os vassalos eram ligados aos senhores por meio de um contrato de lealdade.
                        </li>
                    
                        <li>
                            <h4>Economia Agrária:</h4> A economia era baseada na agricultura e na produção local, com os feudos servindo como unidades econômicas autossuficientes. A servidão era comum, onde os camponeses trabalhavam as terras dos senhores sem receber salários, em troca de proteção e sustento.
                        </li>
                    </ul>
                    

                    <h3>Expansão Islâmica</h3>

                    A expansão islâmica começou após a morte de Maomé, em 632 d.C. Os muçulmanos se expandiram rapidamente, conquistando vastas áreas da Ásia, África e parte da Europa. 
                    <ul>
                        <li>
                            <h4>Conquista da Península Ibérica:</h4> Em 711, os árabes invadiram a Península Ibérica, onde estabeleceram o Califado de Córdoba. Essa dominação durou até a Reconquista cristã, que culminou em 1492, quando Granada caiu para os Reis Católicos.
                        </li>
                    
                        <li>
                            <h4>Influência Cultural:</h4> O domínio islâmico trouxe avanços significativos nas ciências, matemática e filosofia, influenciando o Renascimento europeu através da transmissão de conhecimento.
                        </li>
                    </ul>
                    

                    <h3>Império Bizantino</h3>

                    O Império Bizantino foi a continuação do Império Romano no Oriente, com Constantinopla como capital. Destacou-se por sua cultura rica, suas inovações legais e sua religião predominante, o cristianismo ortodoxo. 

                    <ul>
                        <li>
                            <h4>Justiniano e a Lei:</h4> O imperador Justiniano I, no século VI, é conhecido por suas reformas legais, que resultaram no Código de Justiniano, um dos fundamentos do direito ocidental. Ele também expandiu o império, recuperando terras perdidas para os bárbaros.
                        </li>
                    
                        <li>
                            <h4>Cisma do Oriente:</h4> Em 1054, a Igreja Cristã se dividiu em Católica e Ortodoxa, um evento crucial na história religiosa europeia.
                        </li>
                    </ul>

                    <h3>Cruzadas</h3>

                    As Cruzadas foram campanhas militares impulsionadas pela religião, cujo objetivo principal era recuperar Jerusalém e outros lugares sagrados da Palestina. 
                    <ul>
                        <li>
                            <h4>Primeira Cruzada:</h4> Em 1096, nobres europeus se uniram sob a convocação do Papa Urbano II e conseguiram conquistar Jerusalém em 1099. As Cruzadas posteriores, como a Segunda e a Terceira, enfrentaram maiores dificuldades e resultaram em vitórias muçulmanas, especialmente sob o líder Saladino. 
                        </li>
                    
                        <li>
                            <h4>Impacto Cultural:</h4> As Cruzadas tiveram um impacto significativo na relação entre cristãos e muçulmanos, e na troca cultural, incluindo a introdução de novas ideias e produtos da Ásia na Europa. 
                        </li>
                    </ul>

                    <h3>Renascimento Carolíngio</h3>

                    O Renascimento Carolíngio, sob o reinado de Carlos Magno (768-814), foi um período de revitalização cultural e intelectual. Carlos Magno promoveu a educação, a arte e a religião, unificando uma grande parte da Europa Ocidental sob um único império e fortalecendo a Igreja Católica como um poder político.

                    <h3>Peste Negra </h3>

                    A Peste Negra, que devastou a Europa entre 1347 e 1351, resultou na morte de cerca de um terço da população europeia. 

                    <ul>
                        <li>
                            <h4>Impacto Social e Econômico:</h4> A peste causou uma grave crise social, com escassez de mão de obra que levou a uma mudança nas relações de trabalho e à valorização dos salários. A Igreja também perdeu parte de sua influência, pois muitos acreditavam que a peste era um castigo divino.
                        </li>
                    </ul>
            </p>
        </div>
            <div id="idade-media" class="historia cel">
            <h2>Idade Média</h2><hr id="hr3">
                <h3>Alta Idade Média</h3>
                <p>A Alta Idade Média (476 d.C. - 1000 d.C.) foi marcada pela queda do Império Romano e pelo surgimento de reinos germânicos. Invasões bárbaras e o início do feudalismo foram características importantes desse período.</p>

                <h4>Invasões Bárbaras</h4>
                <p>Povos germânicos, como os francos, invadiram o território romano, aproveitando seu enfraquecimento. Clóvis fundou uma dinastia importante na Europa Ocidental.</p>

                <h4>Surgimento do Feudalismo</h4>
                <p>Com a insegurança das invasões, o feudalismo surgiu como sistema social e econômico, baseado na relação entre senhores feudais e vassalos.</p>

                <h3>Baixa Idade Média</h3>
                <p>Na Baixa Idade Média (1000-1500 d.C.), o comércio e as cidades cresceram, enquanto a Igreja Católica se fortaleceu. Esse período também incluiu as Cruzadas.</p>

                <h4>Cruzadas</h4>
                <p>Expedições militares iniciadas em 1095 para recuperar Jerusalém dos muçulmanos, com a Primeira Cruzada sendo a mais bem-sucedida, conquistando Jerusalém em 1099.</p>

                <h3>Feudalismo</h3>
                <p>O feudalismo dominou a Europa medieval, com uma sociedade dividida entre nobres, vassalos e camponeses, e uma economia agrária centrada nos feudos.</p>

                <h3>Expansão Islâmica</h3>
                <p>Após a morte de Maomé, o Islã expandiu-se pela Ásia, África e Europa. Em 711, os árabes invadiram a Península Ibérica, influenciando a cultura europeia.</p>

                <h4>Influência Cultural</h4>
                <p>Os avanços islâmicos em ciência e filosofia impactaram o Renascimento europeu.</p>

                <h3>Império Bizantino</h3>
                <p>O Império Bizantino continuou o legado romano no Oriente, destacando-se por sua cultura e direito, com o Código de Justiniano sendo uma das bases do direito ocidental.</p>

                <h4>Cisma do Oriente</h4>
                <p>Em 1054, a Igreja Cristã se dividiu em Católica e Ortodoxa, marcando uma ruptura importante.</p>

                <h3>Renascimento Carolíngio</h3>
                <p>Durante o reinado de Carlos Magno, houve uma revitalização cultural e intelectual na Europa Ocidental, fortalecendo a Igreja Católica.</p>

                <h3>Peste Negra</h3>
                <p>A Peste Negra (1347-1351) matou um terço da população europeia, causando crise social e mudando relações de trabalho, além de abalar a influência da Igreja.</p>
            </div>


        <div id="idade-moderna" class="historia pc"> <!-- com texto -->
        <h2>Idade Moderna</h2> <hr id="hr4">
            
            <p><h3>Renascimento</h3> 

            O Renascimento foi um movimento cultural que emergiu na Europa entre os séculos XIV e XVI, caracterizado pela redescoberta do conhecimento clássico da Grécia e Roma. Este período trouxe um foco intenso no humanismo, que enfatizava a dignidade e o potencial humano. Artistas e pensadores como Leonardo da Vinci, Michelangelo e Galileu Galilei foram figuras proeminentes, promovendo inovações nas artes e nas ciências. A arte renascentista, com seu uso da perspectiva e representação realista, mudou para sempre o cenário artístico europeu. Além disso, o Renascimento também incentivou o desenvolvimento das ciências naturais e o pensamento crítico, estabelecendo as bases para a Revolução Científica que se seguiria. 

            <h3>Reforma Protestante</h3> 

            A Reforma Protestante, iniciada no século XVI, foi um movimento religioso que desafiou a autoridade da Igreja Católica. Martinho Lutero, com suas 95 Teses em 1517, criticou práticas como a venda de indulgências. O movimento rapidamente se espalhou pela Europa, resultando no surgimento de várias denominações cristãs, como o luteranismo e o calvinismo. Este processo também gerou uma reação da Igreja Católica, conhecida como Contrarreforma, que buscou revitalizar a Igreja e combater a disseminação do protestantismo. A Reforma teve um impacto profundo na religião, na política e na sociedade, promovendo a liberdade de interpretação das escrituras e uma nova relação entre o indivíduo e Deus. 

            <h3>Descobrimentos</h3> 

            A Era dos Descobrimentos, que se estendeu do final do século XV até o século XVII, foi marcada por grandes navegações e a expansão marítima europeia, especialmente por nações como Portugal e Espanha. A expedição de Cristóvão Colombo em 1492, que resultou na descoberta das Américas, e a viagem de Vasco da Gama à Índia foram eventos-chave. Esse período de exploração levou ao contato entre diferentes culturas e à colonização de novas terras, estabelecendo rotas comerciais que mudaram o comércio global. Os europeus trouxeram novas culturas e tecnologias para as Américas, mas também causaram devastação nas populações indígenas. 

            <h3>Colonização</h3> 

            A colonização foi o processo pelo qual as potências europeias estabeleceram impérios coloniais na América, na África e na Ásia. Este fenômeno foi impulsionado pelo desejo de riquezas e pela expansão territorial. As colônias eram frequentemente exploradas economicamente, com recursos sendo extraídos para beneficiar as metrópoles europeias. O sistema colonial era rigidamente controlado, com monopólios comerciais que favoreciam os interesses das potências colonizadoras. Além disso, a colonização levou à escravidão e ao deslocamento de milhões de pessoas, com impactos sociais, culturais e econômicos duradouros. 

            <h3>Absolutismo</h3> 

            O absolutismo foi um sistema político que predominou na Idade Moderna, onde o poder estava centralizado nas mãos de monarcas absolutos, como Luís XIV da França, conhecido como o "Rei Sol". Este sistema era justificado pela ideia da "predestinação divina", que considerava o rei como um representante de Deus na Terra. As monarquias absolutistas buscavam controlar todas as esferas da vida, incluindo a economia, a religião e a justiça. O absolutismo, embora eficaz em unificar o poder, eventualmente enfrentou resistência que levaria a revoluções e a um movimento em direção a governos mais representativos.

            <h3>Revoluções Científicas e Iluminismo</h3> 

            A Revolução Científica, que começou no século XVI, trouxe avanços significativos no entendimento do mundo natural, com figuras como Copérnico, Kepler e Newton desafiando as visões tradicionais e promovendo a observação empírica. O Iluminismo, que se seguiu no século XVIII, foi um movimento intelectual que enfatizou a razão, a ciência e os direitos individuais. Pensadores como Voltaire, Rousseau e Montesquieu questionaram a autoridade e os dogmas, defendendo a liberdade e a igualdade. O impacto do Iluminismo foi profundo, influenciando revoluções políticas, incluindo a Revolução Americana e a Revolução Francesa, que buscavam implementar os princípios da razão e da justiça social nas estruturas de governo. </p>
        </div>

        <div id="idade-moderna" class="historia cel">
        <h2>Idade Moderna</h2><hr id="hr4">
            <h3>Renascimento</h3>
            <p>O Renascimento (séculos XIV-XVI) foi um movimento cultural que redescobriu o conhecimento clássico da Grécia e Roma. Marcado pelo humanismo, destacou o potencial humano e trouxe inovações nas artes e ciências. Figuras como Leonardo da Vinci e Michelangelo transformaram a arte, enquanto Galileu Galilei impulsionou a ciência. Esse período lançou as bases para a Revolução Científica.</p>

            <h3>Reforma Protestante</h3>
            <p>A Reforma Protestante (século XVI), iniciada por Martinho Lutero em 1517, desafiou a Igreja Católica, criticando práticas como a venda de indulgências. Isso resultou no surgimento de novas denominações cristãs, como o luteranismo e o calvinismo, e na Contrarreforma Católica. A Reforma transformou a religião e a política europeias.</p>

            <h3>Descobrimentos</h3>
            <p>A Era dos Descobrimentos (séculos XV-XVII) foi impulsionada por nações como Portugal e Espanha. Navegações como as de Cristóvão Colombo e Vasco da Gama expandiram o contato entre culturas e abriram novas rotas comerciais, mas também levaram à colonização e à destruição de civilizações indígenas.</p>

            <h3>Colonização</h3>
            <p>A colonização europeia na América, África e Ásia foi motivada por interesses econômicos e territoriais. As colônias eram exploradas em benefício das metrópoles, levando à escravidão e ao deslocamento de milhões de pessoas, com consequências duradouras nas sociedades colonizadas.</p>

            <h3>Absolutismo</h3>
            <p>O absolutismo foi um sistema político da Idade Moderna, onde monarcas como Luís XIV da França concentravam todo o poder. Justificado pela ideia da "predestinação divina", o absolutismo controlava a economia, religião e justiça, mas enfrentou resistência que culminaria em revoluções.</p>

            <h3>Revoluções Científicas e Iluminismo</h3>
            <p>A Revolução Científica (século XVI) trouxe avanços como as teorias de Copérnico e Newton, enquanto o Iluminismo (século XVIII) enfatizou a razão, a ciência e os direitos individuais. Pensadores como Voltaire e Rousseau influenciaram as revoluções Americana e Francesa, promovendo liberdade e justiça social.</p>
        </div>

        <div id="idade-comtemporanea" class="historia pc"> <!-- com texto -->
            <p>
                <h2>Idade Contemporânea</h2><hr id="hr5">
                <h3>Revolução Industrial</h3>
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
                <li><a href="https://linktr.ee/analivialopess" target="_blank">Link para contato</a></li>
    
                <p>Gabriel Reis de Brito</p>
                <li><a href="https://linktr.ee/gabrielreiss" target="_blank">Link para contato</a></li>
    
                <p>Isadora Gomes da Silva</p>
                <li><a href="https://linktr.ee/isadoragomess" target="_blank">Link para contato</a></li>
    
                <p>Lucas Randal Abreu Balderrama</p>
                <li><a href="https://linktr.ee/lucasbalderrama" target="_blank">Link para contato</a></li>
            </ul>
        </div>
    
        <div class="links-adicionais">
            <h2>Links Adicionais</h2>
            <ul>
                <li><a href="termos.php">Termos de Uso</a></li>
                <li><a href="privacidade.php">Política de Privacidade</a></li>
            </ul>
        </div>
    
        <div id="img-footer">
        </div>
    </div>
 </footer> 
</body>
</html>