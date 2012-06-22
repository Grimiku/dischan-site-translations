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
	'search'				=> 'Поиск',
	'keywords'				=> 'ключевые слова...',
	'recenltyBumped'		=> 'Recently Bumped',
	'jumpToLatestBold'	=> 'Перейти к <b>Последнему</b></a>',
	'whosOnline'			=> 'Кто в сети',
	'nobodyOnline'		=> 'Никого нет!',
));

?>