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
	'mailLwr'			=> 'correio',
	'outboxLwr'			=> 'caixa de saída',
	'inboxLwr'			=> 'caixa de entrada',
	'all'				=> 'todas',
	'privateMessages'	=> 'mensagens privadas',
	'threadReplies'		=> 'respostas a tópicos',
	'notifications'		=> 'notificações',
	'unread'			=> 'Por ler',
	'inboxUppr'			=> 'Caixa de Entrada',
	'outboxUppr'		=> 'Caixa de Saída',
	'mailUppr'			=> 'Correio',
	'permissionDenied'	=> 'Erro: Não tem permissões para ver esta mensagem, ou foi eliminada.',
	'noMessages'		=> 'Sem mensagens.',
	'deletePage'		=> 'Eliminar página',
	'confirmDelete'		=> 'Confirmar eliminação',
	'cancel'			=> 'Cancelar',
	'composeMessage'	=> 'Escrever Mensagem',
	'new'				=> 'Nova',
	'read'				=> 'Lida',
	'markRead'			=> 'Marcar Como Lida',
	'markUnread'		=> 'Marcar Como Não Lida',
	'delete'			=> 'Eliminar',
	'reallyDelete'		=> 'Tem a certeza?',
	'yes'				=> 'Sim',
	'no'				=> 'Não',
	'pmFrom'			=> 'Mensagem Pessoal de',
	'threadRepliesUppr'	=> 'Respostas a Tópicos',
	'siteNotiFrom'		=> 'Notificação do Site de',
	'recipients'		=> 'Recipientes',
	'alsoSentTo'		=> 'Enviada também a',
	'newPostsIn'		=> 'Novos Posts em',
	'confirmClear'		=> 'Confirme Que Quer Limpar Tudo',
	'clear'				=> 'Limpar Tudo',
	'reply'				=> 'Responder',
	'viewPost'			=> 'ver post',
	'missingReplies'	=> 'As respostas às quais esta mensagem pertence foram removidas.',
	'notification'		=> 'Notificação',
	'messageNotFound'	=> 'Mensagem não encontrada',
	'newMessage'		=> 'Nova Mensagem',
	'lockedForum'		=> 'Desculpe, este fórum está bloqueado.',
	'recipient'			=> 'Recipiente',
	'message'			=> 'Mensagem',
	'mutipleInstru'		=> 'Múltiplos: utilizador1; utilizador2; utilizador3',
	'tagNote'			=> 'Nota: Todas as tags ainda funcionam',
	'replyToAll'		=> 'Responder a todos?',
	'messageDisclaim'	=> 'Todas as mensagens e o conteúdo nelas contido são da responsabilidade do autor',

));

?>