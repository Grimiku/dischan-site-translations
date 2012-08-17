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
	'search'				=> 'Search',
	'keywords'				=> 'keywords...',
	'recenltyBumped'		=> 'Recently Bumped',
	'jumpToLatestBold'	=> 'Jump to <b>Latest</b></a>',
	'whosOnline'			=> 'Who\'s Online',
	'nobodyOnline'		=> 'Nobody is online right now!',
));

?>