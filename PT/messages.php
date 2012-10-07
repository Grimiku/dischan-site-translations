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
	'success'				=> 'Sucesso!',
	'information'			=> 'Informação',
	'notice'			=> 'Notificação',
	'informationChanged'	=> 'Informação alterada.',
	'avatarChange'			=> 'O seu avatar foi alterado.',
	'unsubscribed'			=> 'Subscrição cancelada',
	'unsubscribed'		=> 'A sua subscrição a este tópico foi cancelada.',
	'subscribed'			=> 'Subscrito!',
	'subscribedMsg'			=> 'Agora receberá uma mensagem sempre que este tópico receber uma resposta.',
	'applied'			=> 'Candidatou-se com sucesso à Dischan. Deveremos contactá-lo de volta dentro de 24 horas.',
	'messageSent'			=> 'A sua mensagem foi enviada.',
	'passReset'			=> 'A sua password foi reiniciada. Deverá receber um email com a sua nova password dentro de pouco tempo.',
	'newsUnsub'			=> 'Cancelou a subscrição ao boletim informativo da Dischan.',
	'resetEmail'		=> 'Um email foi enviado para o seu endereço, por favor clique no link dentro do mesmo para reiniciar a sua password.',
	'forumLocked'			=> 'O fórum está temporariamente bloqueado para manutenção. Por favor tente de novo mais tarde.',
	'blogLocked'		=> 'O blog está temporariamente bloqueado para manutenção. Por favor tente de novo mais tarde.',
	'storeLocked'		=> 'A loja está atualmente bloqueada para manutenção. Por favor tente de novo mais tarde.',
	'reviewPosted'		=> 'A sua crítica foi colocada! Obrigado por dar a sua opinião.',
	'giftAdded'			=> 'Prenda adicionada.',
	'giveBackAdded'			=> 'Your product has been added to your cart. Thank you for choosing to support this developer!',
));

?>