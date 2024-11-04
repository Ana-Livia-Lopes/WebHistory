<?php
    include 'glossarioInfos.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glossário</title>
    <link rel="shortcut icon" href="./img/HW-icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="./main.js" defer></script>
    <link rel="stylesheet" href="css/glossario.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        <?php 
        

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
    <script>
        function pesquisa(event) {
            event.preventDefault(); 
            const query = document.getElementById('input').value.toLowerCase().trim();
            const sections = document.querySelectorAll('.section_gloss');
            let found = false;
            
            sections.forEach(section => {
                const title = section.querySelector('h2').textContent.toLowerCase();
                
                
                if (title.includes(query)) {
                    section.scrollIntoView({ behavior: 'smooth' });
                    found = true; 
                    return;
                }
            });
            
            if (found == false) {
                alert('Termo não encontrado!'); 
            }
        }
        </script>

<main class="main-content">
    <div class="sidebar_gloss scroller">
        <ul> 
            <li><a href="#agricultura">Agricultura</a></li>
            <li><a href="#arte-rupestre">Arte Rupestre</a></li>
            <li><a href="#cidade-estado">Cidade-estado</a></li>
            <li><a href="#colonialismo">Colonialismo</a></li>
            <li><a href="#culminando">Culminando</a></li>
            <li><a href="#cuneiforme">Escrita Cuneiforme</a></li>
            <li><a href="#democracia">Democracia</a></li>
            <li><a href="#dinastias">Dinastias</a></li>
            <li><a href="#emergiu">Emergiu</a></li>
            <li><a href="#empírica">Empírica</a></li>
            <li><a href="#hieroglifica">Escrita Hieroglífica</a></li>
            <li><a href="#hominideos">Hominídeos</a></li>
            <li><a href="#indulgências">Indulgências</a></li>
            <li><a href="#intemperies">Intempéries</a></li>
            <li><a href="#magistrados">Magistrados</a></li>
            <li><a href="#mumificação">Mumificação</a></li>
            <li><a href="#primitivo">Primitivo</a></li>
            <li><a href="#protestantismo">Protestantismo</a></li>
            <li><a href="#racionalismo">Racionalismo</a></li>
            <li><a href="#religiosidade">Religiosidade</a></li>
            <li><a href="#república">República</a></li>
            <li><a href="#revolução">Revolução</a></li>
        </ul>
    </div> 
    <div class="content_gloss">
        <div class="div-pesquisa">
            <form id="form" onsubmit="pesquisa(event)">
            <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" id="input" placeholder="Buscar..." required>
                <button type="submit">Buscar</button>
            </form>
        </div><br>
        <!-- Seções existentes do glossário -->
        <div id="agricultura" class="section_gloss">
            <h2><?= $glossario['agricultura']['title'] ?></h2>
            <p class="p1"><?= $glossario['agricultura']['text'] ?></p>
            <img src="<?= $glossario['agricultura']['image'] ?>" alt="<?= $glossario['agricultura']['title'] ?>">
            <p class="p2"><em><?= $glossario['agricultura']['source'] ?></em></p>
        </div>
        <div id="rupestre" class="section_gloss">
            <h2><?= $glossario['rupestre']['title'] ?></h2>
            <p class="p1"><?= $glossario['rupestre']['text'] ?></p>
            <img src="<?= $glossario['rupestre']['image'] ?>" alt="<?= $glossario['rupestre']['title'] ?>">
            <p class="p2"><em><?= $glossario['rupestre']['source'] ?></em></p>
        </div>
        <div id="cidade-estado" class="section_gloss">
            <h2><?= $glossario['cidade-estado']['title'] ?></h2>
            <p class="p1"><?= $glossario['cidade-estado']['text'] ?></p>
            <img src="<?= $glossario['cidade-estado']['image'] ?>" alt="<?= $glossario['cidade-estado']['title'] ?>">
            <p class="p2"><em><?= $glossario['cidade-estado']['source'] ?></em></p>
        </div>
        <div id="colonialismo" class="section_gloss">
            <h2><?= $glossario['colonialismo']['title'] ?></h2>
            <p class="p1"><?= $glossario['colonialismo']['text'] ?></p>
            <img src="<?= $glossario['colonialismo']['image'] ?>" alt="<?= $glossario['colonialismo']['title'] ?>">
            <p class="p2"><em><?= $glossario['colonialismo']['source'] ?></em></p>
        </div>
        <div id="culminando" class="section_gloss">
            <h2><?= $glossario['culminando']['title'] ?></h2>
            <p class="p1"><?= $glossario['culminando']['text'] ?></p>
            <p class="p2"><em><?= $glossario['culminando']['source'] ?></em></p>
        </div>
        <div id="democracia" class="section_gloss">
            <h2><?= $glossario['democracia']['title'] ?></h2>
            <p class="p1"><?= $glossario['democracia']['text'] ?></p>
            <img src="<?= $glossario['democracia']['image'] ?>" alt="<?= $glossario['democracia']['title'] ?>">
            <p class="p2"><em><?= $glossario['democracia']['source'] ?></em></p>
        </div>
        <div id="dinastias" class="section_gloss">
            <h2><?= $glossario['dinastias']['title'] ?></h2>
            <p class="p1"><?= $glossario['dinastias']['text'] ?></p>
            <img src="<?= $glossario['dinastias']['image'] ?>" alt="<?= $glossario['dinastias']['title'] ?>">
            <p class="p2"><em><?= $glossario['dinastias']['source'] ?></em></p>
        </div>
        <div id="emergiu" class="section_gloss">
            <h2><?= $glossario['emergiu']['title'] ?></h2>
            <p class="p1"><?= $glossario['emergiu']['text'] ?></p>
            <p class="p2"><em><?= $glossario['emergiu']['source'] ?></em></p>
        </div>
        <div id="empírica" class="section_gloss">
            <h2><?= $glossario['empírica']['title'] ?></h2>
            <p class="p1"><?= $glossario['empírica']['text'] ?></p>
            <p class="p2"><em><?= $glossario['empírica']['source'] ?></em></p>
        </div>
        <div id="cuneiforme" class="section_gloss">
            <h2><?= $glossario['cuneiforme']['title'] ?></h2>
            <p class="p1"><?= $glossario['cuneiforme']['text'] ?></p>
            <img src="<?= $glossario['cuneiforme']['image'] ?>" alt="<?= $glossario['cuneiforme']['title'] ?>">
            <img class="img2" src="<?= $glossario['cuneiforme']['image2'] ?>" alt="<?= $glossario['cuneiforme']['title'] ?>">
            <p class="p2"><em><?= $glossario['cuneiforme']['source'] ?></em></p>
        </div>
        <div id="hieroglifica" class="section_gloss">
            <h2><?= $glossario['hieroglifica']['title'] ?></h2>
            <p class="p1"><?= $glossario['hieroglifica']['text'] ?></p>
            <img src="<?= $glossario['hieroglifica']['image'] ?>" alt="<?= $glossario['hieroglifica']['title'] ?>">
            <p class="p2"><em><?= $glossario['hieroglifica']['source'] ?></em></p>
        </div>
        <div id="hominideos" class="section_gloss">
            <h2><?= $glossario['hominideos']['title'] ?></h2>
            <p class="p1"><?= $glossario['hominideos']['text'] ?></p>
            <img src="<?= $glossario['hominideos']['image'] ?>" alt="<?= $glossario['hominideos']['title'] ?>">
            <p class="p2"><em><?= $glossario['hominideos']['source'] ?></em></p>
        </div>
        <div id="indulgências" class="section_gloss">
            <h2><?= $glossario['indulgências']['title'] ?></h2>
            <p class="p1"><?= $glossario['indulgências']['text'] ?></p>
            <img src="<?= $glossario['indulgências']['image'] ?>" alt="<?= $glossario['indulgências']['title'] ?>">
            <p class="p2"><em><?= $glossario['indulgências']['source'] ?></em></p>
        </div>
        <div id="intemperes" class="section_gloss">
            <h2><?= $glossario['intemperes']['title'] ?></h2>
            <p class="p1"><?= $glossario['intemperes']['text'] ?></p>
            <img src="<?= $glossario['intemperes']['image'] ?>" alt="<?= $glossario['intemperes']['title'] ?>">
            <p class="p2"><em><?= $glossario['intemperes']['source'] ?></em></p>
        </div>
        <div id="magistrados" class="section_gloss">
            <h2><?= $glossario['magistrados']['title'] ?></h2>
            <p class="p1"><?= $glossario['magistrados']['text'] ?></p>
            <img src="<?= $glossario['magistrados']['image'] ?>" alt="<?= $glossario['magistrados']['title'] ?>">
            <p class="p2"><em><?= $glossario['magistrados']['source'] ?></em></p>
        </div>
        <div id="mumificação" class="section_gloss">
            <h2><?= $glossario['mumificação']['title'] ?></h2>
            <p class="p1"><?= $glossario['mumificação']['text'] ?></p>
            <img src="<?= $glossario['mumificação']['image'] ?>" alt="<?= $glossario['mumificação']['title'] ?>">
            <p class="p2"><em><?= $glossario['mumificação']['source'] ?></em></p>
        </div>
        <div id="primitivo" class="section_gloss">
            <h2><?= $glossario['primitivo']['title'] ?></h2>
            <p class="p1"><?= $glossario['primitivo']['text'] ?></p>
            <p class="p2"><em><?= $glossario['primitivo']['source'] ?></em></p>
        </div>
        <div id="protestantismo" class="section_gloss">
            <h2><?= $glossario['protestantismo']['title'] ?></h2>
            <p class="p1"><?= $glossario['protestantismo']['text'] ?></p>
            <img src="<?= $glossario['protestantismo']['image'] ?>" alt="<?= $glossario['protestantismo']['title'] ?>">
            <p class="p2"><em><?= $glossario['protestantismo']['source'] ?></em></p>
        </div>
        <div id="racionalismo" class="section_gloss">
            <h2><?= $glossario['racionalismo']['title'] ?></h2>
            <p class="p1"><?= $glossario['racionalismo']['text'] ?></p>
            <img src="<?= $glossario['racionalismo']['image'] ?>" alt="<?= $glossario['racionalismo']['title'] ?>">
            <p class="p2"><em><?= $glossario['racionalismo']['source'] ?></em></p>
        </div>
        <div id="religiosidade" class="section_gloss">
            <h2><?= $glossario['religiosidade']['title'] ?></h2>
            <p class="p1"><?= $glossario['religiosidade']['text'] ?></p>
            <img src="<?= $glossario['religiosidade']['image'] ?>" alt="<?= $glossario['religiosidade']['title'] ?>">
            <p class="p2"><em><?= $glossario['religiosidade']['source'] ?></em></p>
        </div>
        <div id="república" class="section_gloss">
            <h2><?= $glossario['república']['title'] ?></h2>
            <p class="p1"><?= $glossario['república']['text'] ?></p>
            <img src="<?= $glossario['república']['image'] ?>" alt="<?= $glossario['república']['title'] ?>">
            <img class="img2" src="<?= $glossario['república']['image2'] ?>" alt="<?= $glossario['república']['title'] ?>">
            <p class="p2"><em><?= $glossario['república']['source'] ?></em></p>
        </div>
        <div id="revolução" class="section_gloss">
            <h2><?= $glossario['revolução']['title'] ?></h2>
            <p class="p1"><?= $glossario['revolução']['text'] ?></p>
            <img src="<?= $glossario['revolução']['image'] ?>" alt="<?= $glossario['revolução']['title'] ?>">
            <p class="p2"><em><?= $glossario['revolução']['source'] ?></em></p>
        </div>
    </div>
    </main>
</body>
</html>
