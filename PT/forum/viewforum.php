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
	'recentlyBumped'				=> 'posts recentes',
	'forumDNE'				=> 'Fórum Não Existe',
	'noThreadsYet'		=> 'Ainda Não Existem Tópicos',
	'noPostsYet'	=> 'Ainda Não Há Posts',
	'newThread'			=> 'Novo Tópico',
	'stickyLock'		=> 'Fixo <br />& Bloqueado ',
	'locked'			=> 'Fixo',
	'sticky'				=> 'Bloqueado',
	'replies'				=> 'respostas',
	'images'				=> 'imagens',
	'jumpToLatest'				=> 'Ir Para o Mais Recente',
	'author'				=> 'Autor',
	'reply'				=> 'Responder',
	'newThreadContent'				=> 'Conteúdo do Novo Tópico...',
	'quote'				=> 'Citar',
	'threadDNE'				=> 'Tópico Não Existe',
	'forumLocked'				=> 'Desculpe, este fórum está bloqueado.',
	'picture'				=> 'Imagem',
	'message'				=> 'Mensagem',
	'newThreadNote'				=> 'Nota: Tópicos novos requerem uma imagem.',
	'threadLocked'				=> 'Desculpe, este tópico está bloqueado.',
	'postLimitReached'				=> 'Limite de posts alcançado.',
	'imageLimitReached'				=> 'Limite de imagens alcançado.',
	'subscribe'				=> 'Subscrever',
	'unsubscribe'				=> 'Cancelar subscrição',
));

?>