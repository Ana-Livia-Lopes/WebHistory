<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js" defer></script>
    <title>História na Web</title>
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
    
        <section id="secao4">
    
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
            </div>
        </footer> 
    </main>
</body>
</html>