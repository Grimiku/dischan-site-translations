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
	'redeem'				=> 'usar chaves',
	'errorOwned'			=> 'Erro: Já Tem Este Produto',
	'errorOwnedPrt1'	=> 'Inseriu uma chave para',
	'errorOwnedPrt2'			=> ', porém a sua conta já tem este produto. Pode considerar dar esta chave a um amigo? Se acha que recebeu esta notificação erradamente, pode <a href = "../contact.php">contactar-nos</a>.',
	'redeemAnother'		=> 'Usar outra chave',
	'serial'		=> 'Chave',
	'serialNote'			=> 'As chaves são sensíveis a maiúsculas!',
	'success'		=> 'Sucesso',
	'successPrt1'		=> 'A sua chave para',
	'successPrt2'		=> 'foi adicionada à sua conta. Pode agora transferi-lo a qualquer altura da sua <a href = "library.php">biblioteca</a>.',
	'redeemUppr'		=> 'Usar',
	'notice'		=> 'Notificação',
	'noticeAbuseText'		=> 'Esta chave foi desativada devido a suspeitas de abuso. Trataremos deste assunto, porém pode <a href = "http://dischan.org/contact.php">contactar-nos</a> imediatamente se achar que isto se trata de um erro.',
	'invalidCombin'		=> 'Email ou chave inválida. Por favor tente novamente.',
	'redeemExplan'		=> 'Pode usar chaves de qualquer jogo que tenha comprado sem conta usando o seu email e a chave. Por favor insira a informação necessária abaixo.',
	'impNotice'		=> 'Notificação Importante',
	'impNoticePrt1'		=> 'Quaisquer chaves usadas serão ligadas a esta conta',
	'impNoticePrt2'		=> ', e será incapaz de transferir os produtos sem entrar. Se quiser transferir os produtos sem ligar à chave, deverá sair primeiro.',
	'redeemExplanGue'		=> 'Pode usar chaves de qualquer jogo que tenha comprado sem conta usando o seu email e a chave. Por favor insira a informação necessária abaixo.',
));

?>