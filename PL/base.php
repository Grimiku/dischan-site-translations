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
	'newMessagesBefore'	=> 'You have',
	'newMessagesAfter'	=> 'new messages',
	'newPM'				=> 'New Private Message',
	'subject'			=> 'Subject',
	'from'				=> 'From',
	'dismiss'			=> 'Dismiss',
	'dismissAll'		=> 'Dismiss All',
	'newTR'				=> 'New Thread Replies',
	'thread'			=> 'Thread',
	'lastPost'			=> 'Last Post at',
	'newNotification'	=> 'New Notification',
	'visitInbox'		=> 'Visit your inbox',
	'noNewMessages'		=> 'No new messages!',
	'user'				=> 'User',
	'inbox'				=> 'Inbox',
	'library'			=> 'Library',
	'logout'			=> 'Logout',
	'usernameEmail'		=> 'Username/Email',
	'password'			=> 'Password',
	'login'				=> 'Login',
	'register'			=> 'Register',
	'username'			=> 'Username',
	'email'				=> 'Email',
	'confirmPassword'	=> 'Confirm Password',
	'subscribeNews'		=> 'Subscribe to the Dischan newsletter?',
	'registerTOS'		=> 'Note: By registering for a dischan account, you agree to our <a target="_blank" href = "termsandconditions.php">terms of service</a> and <a target="_blank" href = "privacypolicy.php">privacy policy</a>.',
	'backtotop'			=> 'back to top',
	'caseSensitive'		=> 'case sensitive, min 8 characters',
	'show'		=> 'Show',
	'showLwr'		=> 'show',
	'page'		=> 'Page',
	'bottom'		=> 'Bottom',
	'top'		=> 'Top',
	'contents'		=> 'Contents',
	'usernameNotes'		=> 'A-Z, 0-9, and _- case insensitive',
	'forgotPass'		=> 'Forgot your pass?',
	'sortBy'		=> 'sort by',
	'newest'		=> 'newest',
));

?>