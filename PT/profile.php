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
	'lastOnline'				=> 'Online Pela Última Vez',
	'dateJoined'		=> 'Data de Adesão',
	'beforeTracking'	=> 'Antes de começarmos a tomar conta.',
	'never'			=> 'Nunca.',
	'userNotFound'		=> 'Utilizador não encontrado.',
	'realName'			=> 'Nome Verdadeiro',
	'about'				=> 'Sobre',
	'message'			=> 'Mensagem',
	'location'			=> 'Local',
	'website'			=> 'Website',
	'profile'			=> 'Perfil',
	'tagNote'		=> 'Nota: Todas as tags ainda funcionam',
));

?>