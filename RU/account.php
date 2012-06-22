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
	'rank'				=> 'Rank',
	'dateJoined'		=> 'Date Joined',
	'beforeTracking'	=> 'Before we started keeping track.',
	'profile'			=> 'Profile',
	'viewProfile'		=> 'view profile',
	'realName'			=> 'Real Name',
	'about'				=> 'About',
	'avatar'			=> 'Avatar',
	'location'			=> 'Location',
	'website'			=> 'Website',
	'account'			=> 'Account',
	'currentEmail'		=> 'Current Email',
	'newEmail'			=> 'New Email',
	'newPassword'		=> 'New Password',
	'oldPassword'		=> 'Old Password',
	'requiredIf'		=> 'only required for changing password or email information',
	'options'			=> 'Options',
	'autoSubscribe'		=> 'Auto-subscribe to threads I reply to',
	'emailPM'			=> 'Email me when I recieve a private message',
	'subscribeToNews'	=> 'Subscribe me to the Dischan newsletter',
	'language'			=> 'Language',
	'whatsThis'			=> 'what\'s this?',
));

?>