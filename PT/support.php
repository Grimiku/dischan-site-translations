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
	'support'				=> 'Suporte',
	'supportPara'			=> '<p>Tem problemas com um produto ou serviço da dischan? Nesse caso, por favor verifique a <a href = "http://www.dischan.org/forum/viewforum.php?c=3&f=8">secção de suporte do fórum</a>. Se o seu problema não estiver aqui listado, por favor esteja à vontade de criar um novo tópico. Agradecíamos se incluísse imagens a demonstrar o problema.</p>
								<br />
								<p>Para problemas duma natureza mais sensível, tais como problemas de segurança, problemas com a conta, ou com compras na loja, por favor use o nosso <a href = "contact.php">formulário de contacto</a>.</p>',
));

?>