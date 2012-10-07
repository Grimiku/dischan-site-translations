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
	'search'				=> 'Suche',
	'keywords'				=> 'Stichwörter...',
	'recenltyBumped'		=> 'Zuletzt gebumpt',
	'jumpToLatestBold'	=> 'Zum <b>neuesten</b> springen</a>',
	'whosOnline'			=> 'Wer ist online',
	'nobodyOnline'		=> 'Zurzeit ist niemand online!',
));

?>
