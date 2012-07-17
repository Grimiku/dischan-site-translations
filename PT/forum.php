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
	'forumRules'		=> 'Regras do fórum',
	'forumRulesPara'	=> '<p>Se colocar qualquer uma das coisas abaixo, irá ser temporariamente ou permanentemente banido dos fóruns:</p> 
							<ul>
								<li>Conteúdo ilegal, conforme determinado pela lei do Canadá e/ou dos Estados Unidos</li>
								<li>Pornografia</li>
								<li>Profanidades excessivas</li>
								<li>Publicidade e/ou spam</li>
							</ul>
							<p>Os moderadores também são capazes de o banir conforme o seu próprio arbítrio; se acha que foi falsamente ou injustamente banido, por favor <a href = "contact.php">contacte-nos</a>.</p>',
	'forumUse'		=> 'Usando o fórum',
	'forumUsePara'	=> '<p>Existem algumas tags que lhe permitem formatar os seus posts no fórum. São as seguintes:</p>
							<ul>
								<li>Rasurado - Uso: [s]texto rasurado[/s] - Exemplo: <s>texto rasurado</s></li>
								<li>Negrito - Uso: [b]texto em negrito[/b] - Exemplo: <b>texto em negrito</b></li>
								<li>Itálico - Uso: [i]texto em itálico[/i] - Exemplo: <i>texto em itálico</i></li>
								<li>Spoilers - Uso: [spoiler]spoiler[/spoiler] - Exemplo: <p class = "spoiler">spoiler</p></li>
							</ul>
							<p>Algumas notas:</p>
							<ul>
								<li>Os links são automaticamente formatados para serem clicáveis</li>
								<li>Se deixar o rato por cima de uma imagem, aparecerá o nome do ficheiro da imagem original</li>
								<li>No fórum fala-se em Inglês.</li>
							</ul>',
));

?>