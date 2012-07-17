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
	'internationalTrans'=> 'Internacionalização e Traduções',
	'internationalPara'	=> '<p>A Dischan tenta ser o mais internacional possível, e tenta partilhar os seus produtos com o maior número de línguas possível. Para tal, necessitamos da sua ajuda.
							Se você acha que é multilíngue com bastante segurança, e reparou que há uma língua que está a ser negligenciada, por favor <a href = "contact.php">contacte-nos</a>. Adoraríamos ter a sua ajuda para traduzir os nossos sites, ou os nossos produtos.</p>
							<br />
							<p>Para garantir a sua aptidão, pedimos que complete o nosso <a href="files/translatorspack.zip">teste de tradução</a>, que envolve traduzir diversas secções do script da pre-visualização do Cradle Song. Pedir-lho-emos depois de nos contactar, portanto por favor complete-o antes de o fazer.</p>',
	'qualityControl'	=> 'Controlo de Qualidade',
	'qualityControlPara'=> '<p>Apesar de darmos o nosso melhor, a Dischan só pode garantir a qualidade do script original Inglês e do conteúdo do website. Se notar algum erro gramático ou uma tradução mal feita, por favor <a href = "contact.php">contacte-nos</a> para que nós saibamos.</p>',
));

?>