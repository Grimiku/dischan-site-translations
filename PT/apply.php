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
	'apply'				=> 'Candidatar',
	'applyText'			=> 'A Dischan nunca fecha as portas a talentos potenciais. Se acha que tem o que é preciso para trabalhar connosco, por favor preencha o formulário abaixo. Certifique-se que preenche todos os campos com asteriscos, caso contrário não será submetido! <br /><br /> Se desejar saber a que cargos estamos particularmente abertos, por favor visite a página dos <a href = "positions.php">cargos</a>.<br /><i><small>Por favor note que deve escrever em Inglês.</small></i>',
	'yourName'			=> 'O Seu Nome',
	'yourEmail'			=> 'O Seu Email',
	'doubleCheck'		=> 'Certifique-se que está correto!',
	'position'			=> 'Cargo',
	'graphicDesigner'	=> 'Designer Gráfico',
	'artist'			=> 'Artista',
	'yourSkills'		=> 'As Suas Capacidades',
	'aboutYou'			=> 'Fale-nos um pouco de si',
	'extra'				=> 'Mais alguma coisa que acha que nós deveríamos saber?',
));

?>