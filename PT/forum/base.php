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
	'index'				=> 'índice',
	'categories'				=> 'Categorias',
	'forums'		=> 'Fóruns',
	'posts'	=> 'Posts',
	'users'			=> 'Utilizadores',
	'databaseSize'		=> 'Tamanho da base de dados',
	'forumRules'			=> 'Regras e uso do fórum.',
	'forumDisclaimer'				=> 'Todos os posts e o conteúdo neles contido são da responsabilidade do autor.',
));

?>