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
	'aboutFirstPara'	=> '<h1>Quem somos?</h1>
							<hr />
							<div class = "leftContentText">
								<p>A Dischan Media é uma empresa de desenvolvimento internacional com a ambição de criar arte, música, literatura, e design com a mais alta excelência. Foi fundada pelo Jeremy Miller no verão de 2009 numa tentativa de produzir um romance visual de alta qualidade para o mercado ocidental.</p>
								<br />
								<p>Desde então que cresceu tanto em pessoal como em propósito. A Dischan é agora consistida de vários indivíduos talentosos com uma visão comum de fornecer experiências lindas para todos, em todo o sítio.</p>
							</div>',
	'aboutSecondPara'	=> '<h1>Desenvolvedores</h1>
							<hr />
							<div class = "leftContentText">
								<p>Membros principais atuais:</p>
								<ul>
			    					<li>Jeremy (Dani) Miller - Escritor/Programador/Gestor de projetos</li>
			    					<li>Saimon (Doomfest) Ma - Diretor de arte (<a href = "http://doomfest.com">site</a>)</li>
			   						<li>Terrence (Swifdemon) Smith - Escritor/Programador</li>
			    					<li>Cherisse (Null Dizzy) Smith - Editora</li>
			    					<li>Kristian (CombatPlayer) Jensen - Músico</li>
			    					<li>Anton (Guy-kun) Prydatko - Programador iOS</li>
			    				</ul>
							</div>'
));

?>