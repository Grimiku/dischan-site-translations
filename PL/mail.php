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
	'outboxLwr'			=> 'outbox',
	'inboxLwr'			=> 'inbox',
	'all'				=> 'all',
	'privateMessages'	=> 'private messages',
	'threadReplies'		=> 'thread replies',
	'notifications'		=> 'notifications',
	'unread'			=> 'Unread',
	'inboxUppr'			=> 'Inbox',
	'outboxUppr'		=> 'Outbox',
	'mailUppr'			=> 'Mail',
	'permissionDenied'	=> 'Error: You do not have permission to view this message, or it has been deleted.',
	'noMessages'		=> 'No Messages.',
	'deletePage'		=> 'Delete Page',
	'confirmDelete'		=> 'Confirm Delete',
	'cancel'			=> 'Cancel',
	'composeMessage'	=> 'Compose Message',
	'new'				=> 'New',
	'read'				=> 'Read',
	'markRead'			=> 'Mark Read',
	'markUnread'		=> 'Mark Unread',
	'delete'			=> 'Delete',
	'reallyDelete'		=> 'Really delete?',
	'yes'				=> 'Yes',
	'no'				=> 'No',
	'pmFrom'			=> 'Personal Message From',
	'threadRepliesUppr'	=> 'Thread Replies',
	'siteNotiFrom'		=> 'Site Notification From',
	'recipients'		=> 'Recipients',
	'alsoSentTo'		=> 'Also sent to',
	'newPostsIn'		=> 'New Posts in',
	'confirmClear'		=> 'Confirm Clear',
	'clear'				=> 'Clear',
	'reply'				=> 'Reply',
	'viewPost'			=> 'view post',
	'missingReplies'	=> 'The replies for which this message is for have been removed.',
	'notification'		=> 'Notification',
	'messageNotFound'	=> 'Message not found',
	'newMessage'		=> 'New Message',
	'lockedForum'		=> 'Sorry, this forum is locked.',
	'recipient'			=> 'Recipient',
	'message'			=> 'Message',
	'mutipleInstru'		=> 'Multiple: user1; user2; user3',
	'tagNote'			=> 'Note: All tags are still functional',
	'replyToAll'		=> 'Reply to all?',
	'messageDisclaim'	=> 'All messages and contents therein are the responsibility of the poster',

));

?>