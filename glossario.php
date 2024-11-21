<?php
    include 'conexao.php';
    session_start();
    

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['titulo'], $_POST['conteudo'], $_POST['fonte'])) {
        $titulo = $_POST["titulo"];
        $conteudo = $_POST["conteudo"];
        $imagem = $_POST["imagem"];
        $fonte = $_POST["fonte"];
    
        $sql_insercao = "INSERT INTO conteudo (titulo_conteudo, texto_conteudo, imagem_conteudo, fonte_conteudo) VALUES (?, ?, ?, ?)";
        
        $stmt = $conexao->prepare($sql_insercao);
        $stmt->bind_param("ssss", $titulo, $conteudo, $imagem, $fonte);
    
        if ($stmt->execute()) {
            header("Location: glossario.php?id=". $_SESSION['id'] ."");
            exit;
        } else {
            echo "Erro ao inserir conteúdo: " . $conexao->error;
        }
    
        $stmt->close();
    }
    
    $sql_conteudo = "SELECT * FROM conteudo ORDER BY titulo_conteudo";
    $resultado_conteudo_sidebar = $conexao->query($sql_conteudo);
    $resultado_conteudo_pagina = $conexao->query($sql_conteudo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História na Web - Glossário</title>
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
                    <?php
                    if(isset($_SESSION['nome'])  && $_SESSION['nome'] != ''){
                        include 'id_verify.php';
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
                    <a href="jogos.php">
                        <i class="bx bx-joystick"></i>
                        <span class="item-nav">Jogos</span>
                    </a>
                </li>
                <li>
                    <a id="conteudo-select">
                        <i class="bx bx-hourglass" type='solid' id="ampulheta"></i>
                        <select id="select-nav" class="item-nav" onchange="changePag()">
                            <option value="" id="opt-periodos">Períodos</option>
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

        if (isset($_SESSION['nome']) && $_SESSION['nome'] != '') {
            echo "<div class='usuario'>";
            echo    "<a href='perfil.php?id=". $_SESSION['id'] ."'>";
            ?>
            <img id='user-def-nav' src='img/<?php echo $usuario['imagem_usuario']; ?>' alt=''></a>
            <?php 
            echo    "<div class='subclass-usuario'>";
            echo        "<p class='user-nome'>" . $usuario['nome_usuario'] . "</p>";
            echo        "<p id='user-nivel-acesso'>" . $usuario['tipo_usuario'] . "</p>";
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
                echo "<li><a href='#".$linha['titulo_conteudo']."'>".$linha['titulo_conteudo']."</a></li>";
            }
            ?>
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
        <!-- Seções do glossário -->
        <?php
        if(isset($_SESSION['tipo']) && $_SESSION['tipo'] === 'Admin'){
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
                        echo "<form action='' id='".$linha['titulo_conteudo']."' method='POST' class='section_gloss'>
                                <h2>".$linha['titulo_conteudo']."</h2>
                                <p id='txt-nova'>".$linha['texto_conteudo']."</p>
                                <img id='img-nova' src='".$linha['imagem_conteudo']."'></img>
                                <p id='fonte-nova'>Fonte: ".$linha['fonte_conteudo']."</p>";
                        
                        if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == 'Admin') {
                            echo "<input type='hidden' name='action' value='edit'>
                                  <input type='hidden' name='id_conteudo' value='".$linha['id_conteudo']."'>
                                  <input class='edicao' id='novo-tit' name='novo_titulo' type='text' value='".$linha['titulo_conteudo']."' required>
                                  <textarea class='edicao' id='novo-txt' name='novo_texto' required>".$linha['texto_conteudo']."</textarea>
                                  <input class='edicao' id='nova-img' name='nova_imagem' type='url' value='".$linha['imagem_conteudo']."'>
                                  <input class='edicao' id='nova-fnt' name='nova_fonte' type='text' value='".$linha['fonte_conteudo']."' required>
                                  <button class='edicao' type='submit'>Salvar</button>";

                            echo "<div class='bot-admin'><button id='exc-secao' type='submit' name='action' value='delete'><i class='bx bx-trash'></i>Excluir</button>
                                  <button type='button' id='edit-secao'><i class='bx bx-pencil'></i>Editar</button></div>";
                        }
                
                        echo "</form>";
                    }
                }
                

                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    if (isset($_POST['action'])) {
                        if ($_POST['action'] === 'delete' && isset($_POST['id_conteudo'])) {
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
                
                        if ($_POST['action'] === 'edit' && isset($_POST['id_conteudo'])) {
                            $id = $_POST['id_conteudo'];
                            $novo_titulo = $_POST['novo_titulo'];
                            $novo_texto = $_POST['novo_texto'];
                            $nova_imagem = $_POST['nova_imagem'];
                            $nova_fonte = $_POST['nova_fonte'];
                
                            $query = "UPDATE conteudo SET titulo_conteudo = ?, texto_conteudo = ?, imagem_conteudo = ?, fonte_conteudo = ? WHERE id_conteudo = ?";
                            $stmt = $conexao->prepare($query);
                            $stmt->bind_param("ssssi", $novo_titulo, $novo_texto, $nova_imagem, $nova_fonte, $id);
                
                            if ($stmt->execute()) {
                                echo "<script>
                                Swal.fire({
                                    title: 'Seção atualizada com sucesso!',
                                    icon: 'success',
                                    confirmButtonColor: '#438e4b',
                                }).then(function() {
                                    location.href = 'glossario.php?id=".$_SESSION['id']."';
                                });
                                </script>";
                            } else {
                                echo "Erro ao editar seção: ".$conexao->error;
                            }
                
                            $stmt->close();
                        }
                    }
                }
            ?>
        </div>
    </div>
    </main>
</body>
</html>