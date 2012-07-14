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
	'latestBlog'		=> 'Последние блогпосты',
	'visitBlog'			=> 'посетить блог',
	'readTheRest'		=> 'Прочитать пост до конца',
	'featuredDL'		=> 'Избранные загрузки',
	'featuredDLTitle'	=> 'Juniper\'s Knot',
	'featuredDLText'	=> 'Загрузить Juniper\'s Knot можно отсюда: <a href = "http://junipersknot.dischan.org/">официальный сайт</a>.',
));

?>