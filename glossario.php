    <?php
    include 'glossarioInfos.php';
    include 'conexao.php';
    session_start();
    

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['titulo'], $_POST['conteudo'], $_POST['fonte'])) {
        $titulo = $_POST["titulo"];
        $conteudo = $_POST["conteudo"];
        $imagem = $_POST["imagem"];
        $fonte = $_POST["fonte"];
        $ident = $_POST["titulo"];
    
        $sql_insercao = "INSERT INTO conteudo (titulo_conteudo, texto_conteudo, imagem_conteudo, fonte_conteudo, ident_conteudo) VALUES (?, ?, ?, ?, ?)";
        
        $stmt = $conexao->prepare($sql_insercao);
        $stmt->bind_param("sssss", $titulo, $conteudo, $imagem, $fonte, $ident);
    
        if ($stmt->execute()) {
            header("Location: glossario.php?id=". $_SESSION['id'] ."");
            exit;
        } else {
            echo "Erro ao inserir conteúdo: " . $conexao->error;
        }
    
        $stmt->close();
    }
    
    $sql_conteudo = "SELECT * FROM conteudo";
    $resultado_conteudo_sidebar = $conexao->query($sql_conteudo);
    $resultado_conteudo_pagina = $conexao->query($sql_conteudo);
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        

        if(isset($_GET['exc'])) {
            echo"<script>
            Swal.fire({
                icon: 'error',
                title: 'sua conta foi excluida',
                text: 'tente criar uma nova conta',
            });
            </script>";
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
            <?php
            while ($linha = $resultado_conteudo_sidebar->fetch_assoc()){
                echo "<li><a href='#".$linha['ident_conteudo']."'>".$linha['titulo_conteudo']."</a></li>";
            }
            ?>
            <li><a href="#agricultura">Agricultura</a></li>
            <li><a href="#rupestre">Arte Rupestre</a></li>
            <li><a href="#cidade-estado">Cidade-estado</a></li>
            <li><a href="#civilizacoes">Civilizações</a></li>
            <li><a href="#colonialismo">Colonialismo</a></li>
            <li><a href="#culminando">Culminando</a></li>
            <li><a href="#democracia">Democracia</a></li>
            <li><a href="#dinastias">Dinastias</a></li>
            <li><a href="#domesticados">Domesticados</a></li>
            <li><a href="#emergiu">Emergiu</a></li>
            <li><a href="#empírica">Empírica</a></li>
            <li><a href="#cuneiforme">Escrita Cuneiforme</a></li>
            <li><a href="#hieroglifica">Escrita Hieroglífica</a></li>
            <li><a href="#hominideos">Hominídeos</a></li>
            <li><a href="#heranca">Herança</a></li>
            <li><a href="#indulgências">Indulgências</a></li>
            <li><a href="#intemperies">Intempéries</a></li>
            <li><a href="#magistrados">Magistrados</a></li>
            <li><a href="#mumificação">Mumificação</a></li>
            <li><a href="#primitivo">Primitivo</a></li>
            <li><a href="#protestantismo">Protestantismo</a></li>
            <li><a href="#racionalismo">Racionalismo</a></li>
            <li><a href="#religiosidade">Religiosidade</a></li>
            <li><a href="#república">República</a></li>
            <li><a href="#retributiva">Retributiva</a></li>
            <li><a href="#revolução">Revolução</a></li>
            <li><a href="#rituais">Rituais</a></li>
            <li><a href="#servidao">Servidão</a></li>
    </ul>
    </div> 
    <div class="content_gloss">
        <div class="div-pesquisa">
            <form id="form" onsubmit="pesquisa(event)">
            <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" id="input" placeholder="Buscar..." required>
                <button id="busca" type="submit">Buscar</button>
            </form>
        </div><br>
        <!-- Seções existentes do glossário -->
        <?php
        if(isset($_SESSION['tipo']) && $_SESSION['tipo'] === 'Admin'){
            include 'id_verify.php';
            echo "<form class='nova-secao' action='' method='POST'>
                    <h2 id='nova'>Nova seção</h2>

                    <label for='titulo'>Título</label>
                    <input id='titu' name='titulo' type='text' required></input>

                    <label for='conteudo'>Texto</label>
                    <textarea id='cont' name='conteudo' type='text' required></textarea>

                    <label for='imagem'>Imagem (URL)</label>
                    <input id='imag' name='imagem' type='url'></input>

                    <label for='fonte'>Fonte</label>
                    <input id='font' name='fonte' type='text' required></input>

                    <button type='submit' id='add'>Adicionar</button>
                </form>";
        }
        ?>

        <div class='section_nova'>
            <?php
                if ($resultado_conteudo_pagina->num_rows > 0) {
                    while ($linha = $resultado_conteudo_pagina->fetch_assoc()) {
                        echo "<form action='' id='".$linha['ident_conteudo']."' method='POST' class='section_gloss'>
                                <h2>".$linha['titulo_conteudo']."</h2>
                                <p id='txt-nova'>".$linha['texto_conteudo']."</p>
                                <img id='img-nova' src='".$linha['imagem_conteudo']."'></img>
                                <p id='fonte-nova'>Fonte: ".$linha['fonte_conteudo']."</p>";
                        
                        if ($_SESSION['tipo'] == 'Admin') {
                            echo "<input type='hidden' name='action' value='delete'>
                                <input type='hidden' name='id_conteudo' value='".$linha['id_conteudo']."'>
                                <button id='exc-secao' type='submit'>Excluir</button>";
                        }
                        echo "</form>";
                    }
                }

                if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['action']) && $_POST['action'] === 'delete') {
                    $id = $_POST['id_conteudo'];
                    $query = "DELETE FROM conteudo WHERE id_conteudo = ?"; 
                    $stmt = $conexao->prepare($query);
                    $stmt->bind_param("i", $id);

                    if ($stmt->execute()) {
                        echo "<script>
                        Swal.fire({
                            title: 'Seção excluída com sucesso!',
                            icon: 'success',
                            confirmButtonColor: '#438e4b',
                        }).then(function() {
                            location.href = 'glossario.php?id=".$_SESSION['id']."';
                        });
                        </script>";
                    } else {
                        echo "Erro ao excluir seção: ".$conexao->error;
                    }

                    $stmt->close();
                }
            ?>
        </div>

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
        <div id="civilizacoes" class="section_gloss">
            <h2><?= $glossario['civilizacoes']['title'] ?></h2>
            <p class="p1"><?= $glossario['civilizacoes']['text'] ?></p>
            <p class="p2"><em><?= $glossario['civilizacoes']['source'] ?></em></p>
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
        <div id="domesticados" class="section_gloss">
            <h2><?= $glossario['domesticados']['title'] ?></h2>
            <p class="p1"><?= $glossario['domesticados']['text'] ?></p>
            <img src="<?= $glossario['domesticados']['image'] ?>" alt="<?= $glossario['domesticados']['title'] ?>">
            <p class="p2"><em><?= $glossario['domesticados']['source'] ?></em></p>
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
        <div id="heranca" class="section_gloss">
            <h2><?= $glossario['heranca']['title'] ?></h2>
            <p class="p1"><?= $glossario['heranca']['text'] ?></p>
            <p class="p2"><em><?= $glossario['heranca']['source'] ?></em></p>
        </div>
        <div id="indulgências" class="section_gloss">
            <h2><?= $glossario['indulgências']['title'] ?></h2>
            <p class="p1"><?= $glossario['indulgências']['text'] ?></p>
            <img src="<?= $glossario['indulgências']['image'] ?>" alt="<?= $glossario['indulgências']['title'] ?>">
            <p class="p2"><em><?= $glossario['indulgências']['source'] ?></em></p>
        </div>
        <div id="intemperies" class="section_gloss">
            <h2><?= $glossario['intemperies']['title'] ?></h2>
            <p class="p1"><?= $glossario['intemperies']['text'] ?></p>
            <img src="<?= $glossario['intemperies']['image'] ?>" alt="<?= $glossario['intemperies']['title'] ?>">
            <p class="p2"><em><?= $glossario['intemperies']['source'] ?></em></p>
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
        <div id="retributiva" class="section_gloss">
            <h2><?= $glossario['retributiva']['title'] ?></h2>
            <p class="p1"><?= $glossario['retributiva']['text'] ?></p>
            <img src="<?= $glossario['retributiva']['image'] ?>" alt="<?= $glossario['retributiva']['title'] ?>">
            <p class="p2"><em><?= $glossario['retributiva']['source'] ?></em></p>
        </div>
        <div id="revolução" class="section_gloss">
            <h2><?= $glossario['revolução']['title'] ?></h2>
            <p class="p1"><?= $glossario['revolução']['text'] ?></p>
            <img src="<?= $glossario['revolução']['image'] ?>" alt="<?= $glossario['revolução']['title'] ?>">
            <p class="p2"><em><?= $glossario['revolução']['source'] ?></em></p>
        </div>
        <div id="rituais" class="section_gloss">
            <h2><?= $glossario['rituais']['title'] ?></h2>
            <p class="p1"><?= $glossario['rituais']['text'] ?></p>
            <img src="<?= $glossario['rituais']['image'] ?>" alt="<?= $glossario['rituais']['title'] ?>">
            <p class="p2"><em><?= $glossario['rituais']['source'] ?></em></p>
        </div>
        <div id="servidao" class="section_gloss">
            <h2><?= $glossario['servidao']['title'] ?></h2>
            <p class="p1"><?= $glossario['servidao']['text'] ?></p>
            <img src="<?= $glossario['servidao']['image'] ?>" alt="<?= $glossario['servidao']['title'] ?>">
            <p class="p2"><em><?= $glossario['servidao']['source'] ?></em></p>
        </div>
    </div>
    </main>
</body>
</html>
