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
	'positions'			=> 'Cargos',
	'positionsPara'		=> 'Apesar de a Dischan estar sempre interessada em potenciais talentos, seja de que tipo forem, temos aqui descritos alguns dos cargos que queremos preencher em particular.
							Por favor tenha em conta que neste momento este cargos são para voluntários. Porém, se algum dinheiro for feito pelo seu trabalho,
							será compensado de acordo, normalmente com uma percentagem do lucro em questão.',
	'graphicDesigner'	=> 'Designer Gráfico',
	'graphicDesignPara'	=> '<p>A Dischan está à procura de um designer gráfico para tarefas como as seguintes:</p>
							<ul>
								<li>Debate de designs para mundos fictícios (logotipos, letreiros, selos, etc)</li>
								<li>Design para web</li>
								<li>Design de interfaces de utilizador</li>
							</ul>
							<p>Se acha que é capaz de executar qualquer uma das tarefas listadas acima, então adoraríamos trabalhar consigo.
							Os candidatos devem incluir um link para o seu portfólio para que possa ser analisado. Quantas mais obras melhor, mas esteja à vontade de indicar obras das quais esteja particularmente orgulhoso.
							<br/><br/>
							<a href = "apply.php?position=gd"><b>Candidatar</b></a></p>',
	'artist'			=> 'Artista',
	'artistPara'		=> '<p>A Dischan está à procura de artistas para ajudar a desenhar arte de conceitos, sprites e fundos. Algumas das competências de que estamos à procura são:
							<ul>
								<li>Proficiência com o Photoshop</li>
								<li>Experiência em criar e modificar arte digital</li>
							</ul>
							Os candidatos devem incluir um portfólio ou obra recente, ou num anexo ou num link.
							<br/><br/>
							<a href = "apply.php?position=ar"><b>Candidatar</b></a></p>',
));

?>