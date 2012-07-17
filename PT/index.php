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
	'latestBlog'		=> 'Notícias do Blog Mais Recentes',
	'visitBlog'			=> 'visite o blog',
	'readTheRest'		=> 'Ler o resto desta notícia',
	'featuredDL'		=> 'Download Destacado',
	'featuredDLTitle'	=> 'Juniper\'s Knot',
	'featuredDLText'	=> 'Faça download do Juniper\'s Knot aqui: <a href = "http://junipersknot.dischan.org/">site oficial</a>.',
));

?>