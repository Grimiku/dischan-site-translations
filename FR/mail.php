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
	'mailLwr'			=> 'mail',
	'outboxLwr'			=> 'boîte d\'envoi',
	'inboxLwr'			=> 'boîte de réception',
	'all'				=> 'tout',
	'privateMessages'	=> 'messages privés',
	'threadReplies'		=> 'retours de discussion',
	'notifications'		=> 'notifications',
	'unread'			=> 'Non lus',
	'inboxUppr'			=> 'Boîte de Réception',
	'outboxUppr'		=> 'Boîte d\'Envoi',
	'mailUppr'			=> 'Mail',
	'permissionDenied'	=> 'Erreur : Ce message a été supprimé, ou vous n\'avez pas l\'autorisation de le voir.',
	'noMessages'		=> 'Aucun Message.',
	'deletePage'		=> 'Supprimer la Page',
	'confirmDelete'		=> 'Confirmer la suppression',
	'cancel'			=> 'Annuler',
	'composeMessage'	=> 'Écrire un Message',
	'new'				=> 'Nouveau',
	'read'				=> 'Lire',
	'markRead'			=> 'Marqué comme lu',
	'markUnread'		=> 'Marqué comme non lu',
	'delete'			=> 'Supprimer',
	'reallyDelete'		=> 'Vous êtes sûr ?',
	'yes'				=> 'Oui',
	'no'				=> 'Non',
	'pmFrom'			=> 'Message personnel de',
	'threadRepliesUppr'	=> 'Retours de Discussion',
	'siteNotiFrom'		=> 'Site Notification de',
	'recipients'		=> 'Destinataires',
	'alsoSentTo'		=> 'Envoyer aussi à',
	'newPostsIn'		=> 'Nouveaux messages dans',
	'confirmClear'		=> 'Confirmer Effacer',
	'clear'				=> 'Effacer',
	'reply'				=> 'Répondre',
	'viewPost'			=> 'Voir le message',
	'missingReplies'	=> 'Les réponses pour lesquelles ce message est destiné ont été supprimées.',
	'notification'		=> 'Notification',
	'messageNotFound'	=> 'Message non trouvé',
	'newMessage'		=> 'Nouveau Message',
	'lockedForum'		=> 'Toutes nos excuses, ce forum est bloqué.',
	'recipient'			=> 'Destinataires',
	'message'			=> 'Message',
	'mutipleInstru'		=> 'Multiple : utilisateur1; utilisateur2; utilisateur3',
	'tagNote'			=> 'Note : Les "tags" peuvent être utilisés',
	'replyToAll'		=> 'Répondre à tous ?',
	'messageDisclaim'	=> 'Les messages et leurs contenus sont de la responsabilité des utilisateurs',

));

?>