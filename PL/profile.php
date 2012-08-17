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
	'lastOnline'				=> 'Last Online',
	'dateJoined'		=> 'Date Joined',
	'beforeTracking'	=> 'Before we started keeping track.',
	'never'			=> 'Never.',
	'userNotFound'		=> 'User not found.',
	'realName'			=> 'Real Name',
	'about'				=> 'About',
	'message'			=> 'Message',
	'location'			=> 'Location',
	'website'			=> 'Website',
	'profile'			=> 'Profile',
	'tagNote'		=> 'Note: All tags are still functional',
));

?>