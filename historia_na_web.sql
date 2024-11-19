-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/11/2024 às 04:05
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `historia_na_web`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `conteudo`
--

CREATE TABLE `conteudo` (
  `id_conteudo` int(11) NOT NULL,
  `titulo_conteudo` varchar(70) NOT NULL,
  `texto_conteudo` varchar(500) NOT NULL,
  `imagem_conteudo` varchar(512) NOT NULL,
  `fonte_conteudo` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `conteudo`
--

INSERT INTO `conteudo` (`id_conteudo`, `titulo_conteudo`, `texto_conteudo`, `imagem_conteudo`, `fonte_conteudo`) VALUES
(1, 'Cidade-estado', 'Cidade-estado se refere a um país geralmente pequeno e independente. Ele consiste em uma única cidade em que o governo exerce total controle ou soberania sobre si e os demais territórios dentro de suas fronteiras.', 'https://static.preparaenem.com/2024/03/acropole-de-atenas-em-pintura-de-leo-von-klenze-em-texto-sobre-a-sociedade-ateniense.jpg', 'Vestibulares'),
(2, 'Agricultura', 'Agricultura é o cultivo do solo, por meio de procedimentos, métodos e técnicas próprias, que buscam produzir alimentos para o consumo humano, ou, para serem usados como matérias-primas na indústria.', 'https://images.pexels.com/photos/2131784/pexels-photo-2131784.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Blog FieldView / Dicionário Aurélio'),
(3, 'Civilizações', 'Conjunto de sociedades humanas desenvolvidas em diferentes áreas, como economia, cultura, política e tecnologia, caracterizadas por estruturas sociais organizadas e avanços em escrita, arquitetura e governança.', '', 'Enciclopédia da História Mundial'),
(4, 'Arte Rupestre', 'A arte rupestre consiste em pinturas e gravuras feitas em rochas e cavernas, é a produção artística feita pelos hominídeos durante a Pré-História. Essa arte é uma das primeiras formas de expressão cultural da humanidade.', 'https://img.freepik.com/fotos-gratis/pinturas-arqueologicas-em-cavernas_23-2151786685.jpg?t=st=1729461915~exp=1729465515~hmac=e755b9fd1c06acd8ed716b61b6b1474c298a07195bd4681a84da2088ccd9d1bb&w=826\'', 'História do mundo'),
(5, 'Colonialismo', 'É uma prática na qual um território exerce domínio político, cultural ou religioso sobre um determinado povo. Geralmente visando a exploração de recursos e a imposição de uma cultura, governo e economia da potência dominante sobre o território colonizado.', 'https://g3i5r4x7.rocketcdn.me/wp-content/uploads/2020/04/colonialismo-o-que-e-definicao-origem-colonias-e-caracteristicas.jpg', 'Educa Mais Brasil'),
(6, 'Culminando', 'Culminando se refere ao ponto mais alto ou ao momento de maior intensidade de um processo ou evento.', '', 'Dicionário Priberam da Língua Portuguesa'),
(7, 'Democracia', 'Forma de governo em que o poder é exercido pelo povo, direta ou indiretamente, geralmente por meio de representantes eleitos.', 'https://s4.static.brasilescola.uol.com.br/be/conteudo/images/1-multidao-protestando.jpg', 'Michaelis Online'),
(8, 'Dinastias', 'Dinastias é o período de sucessão, que reis e rainhas, pertencentes a uma mesma família, permanecem no poder, na dinastia o poder é transmitido por hereditariedade, podendo a mesma família permanecer no trono durante séculos. São comuns em monarquias, como as dinastias chinesas e europeias.', 'https://img.freepik.com/fotos-gratis/retrato-dos-tres-sabios_23-2150972928.jpg?t=st=1729464241~exp=1729467841~hmac=6371120212139e24c28d6847ebadd2c2ed2c9f4d099f728e700b624596d83266&w=826', 'Significados'),
(9, 'Domesticados', 'Refere-se a animais ou plantas que passaram por um processo de adaptação para conviver com humanos e serem utilizados para trabalho, alimento ou companhia, como cães, gatos, etc.', 'https://cobasiblog.blob.core.windows.net/production-ofc/2021/06/Design-sem-nome-76.png', 'Dicionário Priberam da Língua Portuguesa'),
(10, 'Emergiu', 'Surgiu ou apareceu; geralmente usado para indicar algo que se torna visível ou evidente após um período oculto ou de desenvolvimento.', '', 'Infopédia'),
(11, 'Empírica', 'Que se pauta ou resulta da experiência. Baseada em observação, experimentação ou experiência prática, em vez de teorias ou suposições abstratas.', '', 'Dicionário Online de Português'),
(14, 'Escrita Cuneiforme', 'A escrita cuneiforme é uma das primeiras formas de escrita, criada pelos sumérios, caracterizada por sinais em forma de cunha gravados em tábuas de argila.', '', 'Escola Kids'),
(15, 'Escrita Hieroglífica', 'A escrita hieroglífica são os símbolos que os antigos egípcios utilizavam no seu sistema de escrita sagrado, que consiste em símbolos que representavam objetos, sons e ideias.', 'https://images.pexels.com/photos/16386716/pexels-photo-16386716/free-photo-of-arte-parede-muro-historia.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Brasil escola'),
(16, 'Hominídeos', 'Hominídeos são os seres humanos e seus ancestrais extintos. O único representante vivo é o Homo sapiens sapiens. Este grupo encontra-se dentro da ordem dos primatas.', 'https://super.abril.com.br/wp-content/uploads/2021/01/nova-especie_site.jpg?crop=1&resize=1212,909', 'Info Escola'),
(17, 'Herança', 'Conjunto de bens, direitos, conhecimentos, cultura e tradições que são transmitidos de uma geração para outra, podendo ser tanto materiais quanto imateriais.', '', 'Normas Legais'),
(18, 'Indulgências', 'Prática da Igreja Católica medieval, que envolvia a concessão do perdão dos pecados em troca de penitências, esmolas ou ações específicas. Em termos sociais, um indivíduo indulgente seria aquele que é capaz de agir com bondade e tolerância em relação às ações e particularidades de outros, além de perdoar as diferenças.', 'https://r2.padrepauloricardo.org/uploads/post/share_image/2352/o-minimo-a-saber-sobre-indulgencias-frame.jpg', 'Quero Bolsa'),
(19, 'Intempéries', 'Intempéries são mau tempo ou quaisquer condições climáticas intensas (vento forte, chuva torrencial, tempestade, furacão, seca, vendaval). É caracterizada por uma irregularidade das condições climatéricas.', 'https://img.freepik.com/fotos-gratis/tempestade-sobre-a-cidade_23-2151750337.jpg?t=st=1729462096~exp=1729465696~hmac=854161c5cf4d08f0507a62c345e17f2f18f3a5d5aa50813bc9b5fd7a00aee63f&w=740', 'Significados'),
(20, 'Magistrados', 'Autoridades responsáveis por aplicar a lei e administrar a justiça, geralmente em um sistema judicial.', 'https://cj.estrategia.com/portal/wp-content/uploads/2023/10/06081423/juiz.jpeg', 'Enciclopédia Juridica PUC-SP'),
(21, 'Mumificação', 'Trata-se de um método de preservação de cadáveres que diminui drasticamente a intensidade da decomposição, tradicional em civilizações antigas como a egípcia.', 'https://static.historiadomundo.com.br/2023/04/mumia-egito-antigo.jpg', 'Brasil Escola'),
(22, 'Primitivo', 'Que existiu primeiro entre os indivíduos de uma espécie. Relacionado às origens ou estágios iniciais de algo.', '', 'Aulete Digital'),
(23, 'Protestantismo', 'É um conjunto de doutrinas religiosas cristã do século XVI, derivada da Reforma Protestante liderada pelo padre alemão Martinho Lutero. Caracterizado pela oposição a certas práticas da Igreja Católica.', 'https://jornalismocolaborativo.com/wp-content/uploads/2015/05/protestantismo.jpg', 'Educa Mais Brasil'),
(24, 'Racionalismo', 'O racionalismo é uma corrente filosófica que valoriza a razão humana, ao passo que acredita que é dela que se obtém os conhecimentos, sendo desenvolvido principalmente por René Descartes.', 'https://img.freepik.com/fotos-premium/elegante-com-lampada-brilhante-dentro-de-uma-cabeca-humana-de-alta-qualidade-de-alta-resolucao_1110519-20676.jpg?w=740', 'Toda Matéria'),
(25, 'Religiosidade', 'Sentimento ou prática do crente que pode estar relacionada com uma instituição religiosa, que expressa a devoção ou apego aos valores e crenças religiosas.', 'https://saberesepraticas.cenpec.org.br/wp-content/uploads/2020/04/religiao_banner.png', 'Dialnet'),
(26, 'República', 'República é um regime de governo onde o Chefe de Estado e o Chefe de Governo são escolhidos através de eleições diretas ou indiretas.', 'https://lh6.googleusercontent.com/proxy/_bpdmBznQ6kGHf8QKFfE-13O04vDute4lSDE2Dtts_1vqF2un53tVx-GYZxtGM7419CgTwl_tMPaaqSki9rcheAASdH4YsSBtSt-n2HXlPYJY1C7v2qoK55ID557Ng3SYA33LAZoguxQdyvauBNq_pzU63Q17VLHP3h-og', 'Toda Matéria'),
(27, 'Retributiva', 'Que é dado como retribuição. Relacionada a compensação, especialmente em contextos de justiça, onde uma ação busca dar uma resposta proporcional a um ato.', 'https://dhg1h5j42swfq.cloudfront.net/2021/05/06102838/lei-penal.png', 'Dicionário Priberam da Língua Portuguesa'),
(28, 'Revolução', 'Ação de revolucionar, de incitar uma revolta; rebelião, de causar mudança profunda, geralmente relacionada a transformações sociais, políticas, econômicas ou culturais que alteram significativamente a estrutura da sociedade.', 'https://static.historiadomundo.com.br/2021/05/revolucao-francesa.jpg', 'Dicionário Online de Português'),
(29, 'Rituais', 'Conjunto de práticas e cerimônias que seguem uma sequência e simbolizam aspectos religiosos, culturais ou sociais, como casamentos, funerais ou celebrações festivas.', 'https://static.nationalgeographicbrasil.com/files/styles/image_3200/public/nationalgeographic2515788.jpg?w=1600&h=900', 'Dicionário Online de Português'),
(31, 'Servidão', 'Condição em que uma pessoa ou grupo fica sujeita a obrigações para com outra, geralmente em um contexto de dependência econômica ou social. Costuma estender-se a todas as relações laborais precarizadas e informais que incluem a exploração do trabalhador.', 'https://lh3.googleusercontent.com/blogger_img_proxy/AEn0k_sex-R4wCK_kNhYmPl18dfLs6_Y6EABQPZ2pIlGvnbZyao0RRKi_P-i_R0bhgxIHMLtqpYSdFDaPD5LXzt6YoGAedECVnoR1wXbaULpgq0-e2NXcZu-YV1vk84ARij5a1SWJ9UfoZZJSPQ1dLa7VJEnzpZP=s0-d', 'Conceito de');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(150) NOT NULL,
  `email_usuario` varchar(150) NOT NULL,
  `senha_usuario` varchar(64) NOT NULL,
  `imagem_usuario` varchar(50) NOT NULL,
  `tipo_usuario` enum('Admin','Aluno') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `imagem_usuario`, `tipo_usuario`) VALUES
(1, 'User_Admin', 'admin@gmail.com', '$2y$10$GmitvUCSgCfAuyGz4cgyCeYGZEuW4NqurXjhPxbwvQCA609zXdrqu', 'user_default.jpg', 'Admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `conteudo`
--
ALTER TABLE `conteudo`
  ADD PRIMARY KEY (`id_conteudo`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conteudo`
--
ALTER TABLE `conteudo`
  MODIFY `id_conteudo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
