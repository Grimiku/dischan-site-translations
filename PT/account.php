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
	'rank'				=> 'Pontuação',
	'dateJoined'		=> 'Data de Adesão',
	'beforeTracking'	=> 'Antes de começarmos a tomar conta.',
	'profile'			=> 'Perfil',
	'viewProfile'		=> 'ver perfil',
	'realName'			=> 'Nome Verdadeiro',
	'about'				=> 'Sobre',
	'avatar'			=> 'Avatar',
	'location'			=> 'Local',
	'website'			=> 'Site',
	'account'			=> 'Conta',
	'currentEmail'		=> 'Email atual',
	'newEmail'			=> 'Novo Email',
	'newPassword'		=> 'Nova Password',
	'oldPassword'		=> 'Password Antiga',
	'requiredIf'		=> 'apenas necessária para mudar a password ou email',
	'options'			=> 'Opções',
	'autoSubscribe'		=> 'Auto-subscrever a tópicos aos quais respondo',
	'emailPM'			=> 'Enviar-me um email quando receber uma mensagem privada',
	'subscribeToNews'	=> 'Subscrever ao boletim informativo da Dischan',
	'language'			=> 'Língua',
	'whatsThis'			=> 'o que é isto?',
));

?>