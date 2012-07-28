<?php

if (empty($siteStrings) || !is_array($siteStrings))
{
	$siteStrings = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Note: all uses of ' in translations should be precended with \, in example: \'
//

$siteStrings = array_merge($siteStrings, array(
	'posts'				=> 'Posts',
	'projects'				=> 'Projetos',
	'disMAEPara'		=> '<p>O DisMAE, ou Dischan Mobile Animation Engine (Motor de Animação da Dischan para Móveis), é um motor de romances visuais personalizado para o iOS, usando a <a href = "http://www.cocos2d-iphone.org/" target="_blank">framework Cocos2D</a>.</p>
							<br />
							<p>O DisMAE é particularmente útil na sua habilidade de reconhecer diretamente grande parte dos comandos de scripts do <a href = "http://www.renpy.org/" target="_blank">ren\'py</a>, simplificando dessa forma a portabilidade de jogos ren\'py para o iOS significativamente.</p>
							<br />
							<p>Atualmente, o motor é apenas para uso nosso, mas poderá ser lançado com uma licença no futuro.</p>',
	'juniperPara'	=> '<p>O Juniper\'s Knot é um romance visual curto e grátis criado pela Dischan para o NaNoReNo 2012 (O NaNoReNo é um desafio anual onde se deve criar um romance visual no mês de Março).</p>
						<br />
						<p>Trata da história de o encontro entre um rapaz e um demónio. Pode transferi-lo <a href = "http://junipersknot.dischan.org/">aqui</a> para o Windows, Mac, Linux e iOS. Abaixo encontra-se algum material promocional para o jogo.</p>',
	'cradlePara'			=> '<p>O Cradle Song é um romance visual que a Dischan tem estado a desenvolver desde o seu início em 2009.</p>
							<br />
							<p>Um <a href = "http://cradle-song.com/story.php">resumo da história</a> está disponível no <a href = "http://cradle-song.com/">site oficial do Cradle Song</a>, bem assim como <a href = "http://cradle-song.com/characters.php">descrições de algumas das personagens</a> do jogo.</p>
							<br />
							<p>Em 2011, lançamos uma pré-visualização que pode <a href = "http://cradle-song.com/download.php">transferir</a> e experimentar por si. Um trailer para a pré-visualização encontra-se abaixo.</p>',
	'projectsPara'		=> '<p>Atualmente, o projecto principal da Dischan é o romance visual chamado "Cradle Song". Por favor visite a <a href = "projects.php?p=1">página do Cradle Song</a> para saber mais.</p>
							<br />
							<p>A Dischan também completou um curto romance visual chamado "Juniper\'s Knot" para o NaNoReNo 2012. Por favor visite a <a href = "projects.php?p=2">página do Juniper\'s Knot</a> para saber mais.</p>',
));

?>