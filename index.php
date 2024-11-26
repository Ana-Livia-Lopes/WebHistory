<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link rel="shortcut icon" href="./img/HW-icon.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js" defer></script>
    <title>História na Web</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/servicos.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="./main.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=sailing" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Reem+Kufi:wght@400..700&display=swap" rel="stylesheet">
</head>
<>
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
                    <?php
                    if(isset($_SESSION['nome'])  && $_SESSION['nome'] != ''){
                        echo "<a href='index.php?id=". $_SESSION['id'] ."'>
                                <i class='bx bx-home'></i>
                                <span class='item-nav'>Início</span>
                            </a>";
                    } else {
                        echo "<a href='index.php'>
                                <i class='bx bx-home'></i>
                                <span class='item-nav'>Início</span>
                            </a>";
                    }
                    ?>
                </li>
                <li>
                    <?php
                    if(isset($_SESSION['nome'])  && $_SESSION['nome'] != ''){
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
                    <?php
                    if(isset($_SESSION['nome'])  && $_SESSION['nome'] != ''){
                        echo "<a href='jogos.php?id=". $_SESSION['id'] ."'>
                                <i class='bx bx-joystick'></i>
                                <span class='item-nav'>Jogos</span>
                            </a>";
                    } else {
                        echo "<a href='jogos.php'>
                                <i class='bx bx-joystick'></i>
                                <span class='item-nav'>Jogos</span>
                            </a>";
                    }
                    ?>
                </li>
                <li>
                    <a id="conteudo-select">
                        <i class="bx bx-hourglass" type='solid' id="ampulheta"></i>
                        <select id="select-nav" class="item-nav" onchange="changePag()">
                            <?php
                            if(isset($_SESSION['nome'])  && $_SESSION['nome'] != ''){
                                echo   "<option value='' id='opt-periodos'>Períodos</option>
                                        <option value='hprimitiva.php?id=".$_SESSION['id']."'>História Primitiva</option>
                                        <option value='hantiga.php?id=".$_SESSION['id']."'>História Antiga</option>
                                        <option value='imedia.php?id=".$_SESSION['id']."'>Idade Média</option>
                                        <option value='imoderna.php?id=".$_SESSION['id']."'>Idade Moderna</option>
                                        <option value='icontemporanea.php?id=".$_SESSION['id']."'>Idade Contemporânea</option>";
                            } else {
                                echo   "<option value='' id='opt-periodos'>Períodos</option>
                                        <option value='hprimitiva.php'>História Primitiva</option>
                                        <option value='hantiga.php'>História Antiga</option>
                                        <option value='imedia.php'>Idade Média</option>
                                        <option value='imoderna.php'>Idade Moderna</option>
                                        <option value='icontemporanea.php'>Idade Contemporânea</option>";
                            }
                            ?>
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
            include 'id_verify.php';
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
    <?php
    if(isset($_GET['exc'])) {
        echo"<script>
        Swal.fire({
            icon: 'error',
            title: 'Sua conta foi excluída',
            text: 'Tente criar uma nova conta',
            confirmButtonText: 'OK'
            }).then((result) => {
    if (result.isConfirmed) {
        window.location.href = 'index.php';
    }
});
</script>";
        }

        if(isset($_GET['cad'])) {
            echo"<script>
            Swal.fire({
                icon: 'success',
                title: 'Sua conta foi adicionada',
                text: 'Entre com a conta criada',
                confirmButtonText: 'OK'
            }).then((result) => {
    if (result.isConfirmed) {
        window.location.href = 'index.php';
    }
});
</script>";
            }

    ?>
    <main class="main-content">
        
        <section id="secao1">
            <h1>História na Web<img id="folha" src="img/HW-icon-folha.png" alt=""></h1>
            <div class="div">Reviva o passado</div> 
            <div class="div"> 
                <span>e entenda o presente</span>
            </div>
        </section>
        <section id="secao2">
            <div class=" pc imgSobre">
                <div class="sobre">
                    <h1>Sobre</h1>
                    <p>Bem-vindo ao História na Web! Aqui, você terá acesso a uma vasta gama de recursos de qualidade sobre os mais variados momentos da história, que contribuirão para o seu aprendizado.</p>
                </div>
            </div>
            <div class="cel imgSobre" data-aos="fade" data-aos-duration="1000" data-aos-delay="200">
                <div class="sobre">
                    <h1>Sobre</h1>
                    <p>Bem-vindo ao História na Web! Aqui, você terá acesso a uma vasta gama de recursos de qualidade sobre os mais variados momentos da história, que contribuirão para o seu aprendizado.</p>
                </div>
            </div>


            <div class="container" data-aos="fade" data-aos-duration="1000" data-aos-delay="200">
        <div class="card">
            <div class="quadrado q1">
                <div class="content">
                <img src="./img/arco.png" id="arco">
                    <h3>História Primitiva</h3>
                    <h4>3.000.000 a.C.</h4>
                </div>
            </div>
            <div class="quadrado q2">
                <div class="content2">
                    <p>Foi a época compreendida entre o aparecimento do homem sobre a Terra e o uso da escrita</p>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="quadrado q1">
                <div class="content">
                <i class="fa-solid fa-landmark"></i>
                    <h3>História Antiga</h3>
                    <h4>3.500 a.C.</h4>
                </div>
            </div>
            <div class="quadrado q2">
                <div class="content2">
                    <p>Época histórica marcada pelo surgimento e desenvolvimento das primeiras civilizações</p>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="quadrado q1">
                <div class="content">
                <i class="fa-solid fa-house"></i>
                    <h3>Idade Média</h3>
                    <h4>476 d.C.</h>
                </div>
            </div>
            <div class="quadrado q2">
                <div class="content2">
                    <p>Período que ficou marcado pelo feudalismo, pela influência da Igreja, e pelas Cruzadas e Inquisição</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="quadrado q1">
                <div class="content">
                <i class="fa-solid fa-sailboat"></i>
                    <h3>Idade Moderna</h3>
                    <h4>1453 d.C.</h4>
                </div>
            </div>
            <div class="quadrado q2">
                <div class="content2">
                    <p>Fase de transição do feudalismo ao capitalismo que se iniciou com o desenvolvimento do comércio por meio do mercantilismo</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="quadrado q1">
                <div class="content">
                <i class="fa-solid fa-building"></i>
                    <h3>Idade Contemporânea</h3>
                    <h4>1800 d.C.</h4>
                </div>
            </div>
            <div class="quadrado q2">
                <div class="content2">
                    <p>Período histórico que começou na Revolução Francesa e se estende até os dias de hoje.</p>
                </div>
            </div>
        </div>
    </div>

        </section>
        <section id="secao3">
            
    <!-- computador -->
     <div id="pc">
         <div onclick="window.location='hprimitiva.php'" target="_blank" class="banner" data-aos="fade-up" data-aos-duration="800" data-aos-delay="50">
             <div class="div-img-banner" >
             <img src="img/banner1.jpg" id="img-banner">
             </div>
                <div class="ag-courses-item_bg"></div>
             <div class="texto">
                 <h4>História Primitiva <i class="fa-solid fa-arrow-right"></i></h4>
                 
             </div>
         </div>
         <div onclick="window.location='hantiga.php'" target="_blank" class="banner" data-aos="fade-up" data-aos-duration="800" data-aos-delay="50">
             <div class="div-img-banner">
                 <img src="img/banner2.jpg" id="img-banner">
             </div>
             <div class="ag-courses-item_bg"></div>
             <div class="texto">
                 <h4>História Antiga <i class="fa-solid fa-arrow-right"></i></h4>
                 
             </div>
         </div>
         
         <div onclick="window.location='imedia.php'" target="_blank" class="banner" data-aos="fade-up" data-aos-duration="800" data-aos-delay="50">
             <div class="div-img-banner">
                 <img src="img/banner3.jpg" id="img-banner">
             </div>
             <div class="ag-courses-item_bg"></div>
             <div class="texto">
                 <h4>Idade Média <i class="fa-solid fa-arrow-right"></i></h4>
                 
             </div>
         </div>
         
         <div onclick="window.location='imoderna.php'" target="_blank" class="banner" data-aos="fade-up" data-aos-duration="800" data-aos-delay="50">
             <div class="div-img-banner">
             <img src="img/banner4.jpg" id="img-banner">
             </div>
             <div class="ag-courses-item_bg"></div>
             <div class="texto">
                 <h4>Idade Moderna <i class="fa-solid fa-arrow-right"></i></h4>
                 
             </div>
         </div>
         
         <div onclick="window.location='icontemporanea.php'" target="_blank" class="banner" data-aos="fade-up" data-aos-duration="800" data-aos-delay="50">
             <div class="div-img-banner">
             <img src="img/banner5.jpg" id="img-banner">
             </div>
             <div class="ag-courses-item_bg"></div>
             <div class="texto">
                 <h4>Idade Contemporânea <i class="fa-solid fa-arrow-right"></i></h4>
                 
             </div>
         </div>
     </div>
     <!-- fim computador -->
      <!-- celular -->
    <div id="celular">
    
        <div onclick="window.location='hprimitiva.php'" target="_blank" class="banner" data-aos="fade" data-aos-duration="1000" data-aos-delay="1">
            <div class="div-img-banner" >
            <img src="img/banner1.jpg" id="img-banner">
            </div>
            <div class="ag-courses-item_bg"></div>
            <div class="texto">
                <h4>História Primitiva <i class="fa-solid fa-arrow-right"></i></h4>
            </div>
        </div>
    
        <div onclick="window.location='hantiga.php'" target="_blank" class="banner" data-aos="fade" data-aos-duration="1000" data-aos-delay="1">
            <div class="div-img-banner">
                <img src="img/banner2.jpg" id="img-banner">
            </div>
            <div class="ag-courses-item_bg"></div>
            <div class="texto">
                <h4>História Antiga <i class="fa-solid fa-arrow-right"></i></h4>
            </div>
        </div>
    
        <div onclick="window.location='imedia.php'" target="_blank" class="banner" data-aos="fade" data-aos-duration="1000" data-aos-delay="1">
            <div class="div-img-banner">
                <img src="img/banner3.jpg" id="img-banner">
            </div>
            <div class="ag-courses-item_bg"></div>
            <div class="texto">
                <h4>Idade Média <i class="fa-solid fa-arrow-right"></i></h4>
            </div>
        </div>
    
        <div onclick="window.location='imoderna.php'" target="_blank" class="banner" data-aos="fade" data-aos-duration="1000" data-aos-delay="1">
            <div class="div-img-banner">
            <img src="img/banner4.jpg" id="img-banner">
            </div>
            <div class="ag-courses-item_bg"></div>
            <div class="texto">
                <h4>Idade Moderna <i class="fa-solid fa-arrow-right"></i></h4>
            </div>
        </div>
    
        <div onclick="window.location='icontemporanea.php'" target="_blank" class="banner" data-aos="fade" data-aos-duration="1000" data-aos-delay="1">
            <div class="div-img-banner">
            <img src="img/banner5.jpg" id="img-banner">
            </div>
            <div class="ag-courses-item_bg"></div>
            <div class="texto">
                <h4>Idade Contemporânea <i class="fa-solid fa-arrow-right"></i></h4>
            </div>
        </div>
    </div>
      <!-- fim celular -->
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
                        <li><a href="termos.php" target="_blank">Termos de Uso</a></li>
                        <li><a href="privacidade.php" target="_blank">Política de Privacidade</a></li>
                    </ul>
                </div>
            </div>
        </footer> 
    </main>
    <a href="#" class="btn" id="scrollToTopButton"></a>

    
</body>
</html>