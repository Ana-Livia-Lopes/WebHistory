<?php
$glossario = [
    'hominideos' => [
        'title' => 'Hominídeos',
        'text' => 'Hominídeos são os seres humanos e seus ancestrais extintos. O único representante vivo é o Homo sapiens sapiens. Este grupo encontra-se dentro da ordem dos primatas.',
        'image' => 'https://super.abril.com.br/wp-content/uploads/2021/01/nova-especie_site.jpg?crop=1&resize=1212,909',
        'source' => 'Fonte: Info Escola'
    ],
    'rupestre' => [
        'title' => 'Arte Rupestre',
        'text' => 'A arte rupestre consiste em pinturas e gravuras feitas em rochas e cavernas, é a produção artística feita pelos hominídeos durante a Pré-História. Essa arte é uma das primeiras formas de expressão cultural da humanidade.',
        'image' => 'https://img.freepik.com/fotos-gratis/pinturas-arqueologicas-em-cavernas_23-2151786685.jpg?t=st=1729461915~exp=1729465515~hmac=e755b9fd1c06acd8ed716b61b6b1474c298a07195bd4681a84da2088ccd9d1bb&w=826',
        'source' => 'Fonte: História do mundo'
    ],
    'intemperes' => [
        'title' => 'Intempéries',
        'text' => 'Intempéries são mau tempo ou quaisquer condições climáticas intensas (vento forte, chuva torrencial, tempestade, furacão, seca, vendaval). É caracterizada por uma irregularidade das condições climatéricas.',
        'image' => 'https://img.freepik.com/fotos-gratis/tempestade-sobre-a-cidade_23-2151750337.jpg?t=st=1729462096~exp=1729465696~hmac=854161c5cf4d08f0507a62c345e17f2f18f3a5d5aa50813bc9b5fd7a00aee63f&w=740',
        'source' => 'Fonte: Significados'
    ],
    'agricultura' => [
        'title' => 'Agricultura',
        'text' => 'Agricultura é o cultivo do solo, por meio de procedimentos, métodos e técnicas próprias, que buscam produzir alimentos para o consumo humano, ou, para serem usados como matérias-primas na indústria.',
        'image' => 'https://images.pexels.com/photos/2131784/pexels-photo-2131784.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'source' => 'Fonte: Blog FieldView / Dicionário Aurélio'
    ],
    'cuneiforme' => [
        'title' => 'Escrita Cuneiforme',
        'text' => 'A escrita cuneiforme é uma das primeiras formas de escrita, criada pelos sumérios, caracterizada por sinais em forma de cunha gravados em tábuas de argila.',
        'image' => 'https://images.pexels.com/photos/8349847/pexels-photo-8349847.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'source' => 'Fonte: Escola Kids'
    ],
    'hieroglifica' => [
        'title' => 'Escrita Hieroglífica',
        'text' => 'A escrita hieroglífica são os símbolos que os antigos egípcios utilizavam no seu sistema de escrita sagrado, que consiste em símbolos que representavam objetos, sons e ideias.',
        'image' => 'https://images.pexels.com/photos/16386716/pexels-photo-16386716/free-photo-of-arte-parede-muro-historia.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'source' => 'Fonte: Brasil escola'
    ],
    'racionalismo' => [
        'title' => 'Racionalismo',
        'text' => 'O racionalismo é uma corrente filosófica que valoriza a razão  humana, ao passo que acredita que é dela que se obtém os conhecimentos, sendo desenvolvido principalmente por René Descartes.',
        'image' => 'https://img.freepik.com/fotos-premium/elegante-com-lampada-brilhante-dentro-de-uma-cabeca-humana-de-alta-qualidade-de-alta-resolucao_1110519-20676.jpg?w=740',
        'source' => 'Fonte: Toda Matéria'
    ],
    'dinastias' => [
        'title' => 'Dinastias',
        'text' => 'Dinastias é o período de sucessão, que reis e rainhas, pertencentes a uma mesma família, permanecem no poder, na dinastia o poder é transmitido por hereditariedade, podendo a mesma família permanecer no trono durante séculos. São comuns em monarquias, como as dinastias chinesas e europeias.',
        'image' => 'https://img.freepik.com/fotos-gratis/retrato-dos-tres-sabios_23-2150972928.jpg?t=st=1729464241~exp=1729467841~hmac=6371120212139e24c28d6847ebadd2c2ed2c9f4d099f728e700b624596d83266&w=826',
        'source' => 'Fonte: Significados'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glossário</title>
    <link rel="shortcut icon" href="./img/HW-icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/glossario.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="sidebar_gloss">
        <h4>Selecione um conceito</h4>
        <ul>
            <li><a href="#hominideos">Hominídeos</a></li>
            <li><a href="#rupestre">Arte Rupestre</a></li>
            <li><a href="#intemperes">Intempéries</a></li>
            <li><a href="#agricultura">Agricultura</a></li>
            <li><a href="#cuneiforme">Escrita Cuneiforme</a></li>
            <li><a href="#hieroglifica">Escrita Hieroglífica</a></li>
            <li><a href="#racionalismo">Racionalismo</a></li>
            <li><a href="#dinastias">Dinastias</a></li>
        </ul>
    </div>

    <div class="content_gloss">
        <!-- Seção 1 -->
        <div id="hominideos" class="section_gloss">
            <h2><?= $glossario['hominideos']['title'] ?></h2>
            <p><?= $glossario['hominideos']['text'] ?></p>
            <img src="<?= $glossario['hominideos']['image'] ?>" alt="<?= $glossario['hominideos']['title'] ?>">
            <p><em><?= $glossario['hominideos']['source'] ?></em></p>
        </div>
        
        <div id="rupestre" class="section_gloss">
            <h2><?= $glossario['rupestre']['title'] ?></h2>
            <p><?= $glossario['rupestre']['text'] ?></p>
            <img src="<?= $glossario['rupestre']['image'] ?>" alt="<?= $glossario['rupestre']['title'] ?>">
            <p><em><?= $glossario['rupestre']['source'] ?></em></p>
        </div>

        <!-- Seção 2 -->
        <div id="intemperes" class="section_gloss">
            <h2><?= $glossario['intemperes']['title'] ?></h2>
            <p><?= $glossario['intemperes']['text'] ?></p>
            <img src="<?= $glossario['intemperes']['image'] ?>" alt="<?= $glossario['intemperes']['title'] ?>">
            <p><em><?= $glossario['intemperes']['source'] ?></em></p>
        </div>
        
        <div id="agricultura" class="section_gloss">
            <h2><?= $glossario['agricultura']['title'] ?></h2>
            <p><?= $glossario['agricultura']['text'] ?></p>
            <img src="<?= $glossario['agricultura']['image'] ?>" alt="<?= $glossario['agricultura']['title'] ?>">
            <p><em><?= $glossario['agricultura']['source'] ?></em></p>
        </div>

        <!-- Seção 3 -->
        <div id="cuneiforme" class="section_gloss">
            <h2><?= $glossario['cuneiforme']['title'] ?></h2>
            <p><?= $glossario['cuneiforme']['text'] ?></p>
            <img src="<?= $glossario['cuneiforme']['image'] ?>" alt="<?= $glossario['cuneiforme']['title'] ?>">
            <p><em><?= $glossario['cuneiforme']['source'] ?></em></p>
        </div>
        
        <div id="hieroglifica" class="section_gloss">
            <h2><?= $glossario['hieroglifica']['title'] ?></h2>
            <p><?= $glossario['hieroglifica']['text'] ?></p>
            <img src="<?= $glossario['hieroglifica']['image'] ?>" alt="<?= $glossario['hieroglifica']['title'] ?>">
            <p><em><?= $glossario['hieroglifica']['source'] ?></em></p>
        </div>

        <!-- Seção 4 -->
        <div id="racionalismo" class="section_gloss">
            <h2><?= $glossario['racionalismo']['title'] ?></h2>
            <p><?= $glossario['racionalismo']['text'] ?></p>
            <img src="<?= $glossario['racionalismo']['image'] ?>" alt="<?= $glossario['racionalismo']['title'] ?>">
            <p><em><?= $glossario['racionalismo']['source'] ?></em></p>
        </div>
        
        <div id="dinastias" class="section_gloss">
            <h2><?= $glossario['dinastias']['title'] ?></h2>
            <p><?= $glossario['dinastias']['text'] ?></p>
            <img src="<?= $glossario['dinastias']['image'] ?>" alt="<?= $glossario['dinastias']['title'] ?>">
            <p><em><?= $glossario['dinastias']['source'] ?></em></p>
        </div>
    </div>

</body>
</html>