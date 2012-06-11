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
	'recentlyBumped'				=> 'recently bumped',
	'forumDNE'				=> 'Forum Does Not Exist',
	'noThreadsYet'		=> 'No Threads Yet',
	'noPostsYet'	=> 'No Posts Yet',
	'newThread'			=> 'New Thread',
	'stickyLock'		=> 'Sticky <br />& Locked ',
	'locked'			=> 'Locked',
	'sticky'				=> 'Sticky',
	'replies'				=> 'replies',
	'images'				=> 'images',
	'jumpToLatest'				=> 'Jump to Latest',
	'author'				=> 'Author',
	'reply'				=> 'Reply',
	'newThreadContent'				=> 'New Thread Content...',
	'quote'				=> 'Quote',
	'threadDNE'				=> 'Thread Does Not Exist',
	'forumLocked'				=> 'Sorry, this forum is locked.',
	'picture'				=> 'Picture',
	'message'				=> 'Message',
	'newThreadNote'				=> 'Note: New threads require a picture.',
	'threadLocked'				=> 'Sorry, this thread is locked.',
	'postLimitReached'				=> 'Post limit reached.',
	'imageLimitReached'				=> 'Image limit reached.',
	'subscribe'				=> 'Subscribe',
	'unsubscribe'				=> 'Unsubscribe',
));

?>