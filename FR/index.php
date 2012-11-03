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
	'latestBlog'		=> 'Derniers messages du Blog',
	'visitBlog'			=> 'visiter le blog',
	'readTheRest'		=> 'Lire la suite du message',
	'featuredDL'		=> 'Téléchargement Proposé',
	'featuredDLTitle'	=> 'Juniper\'s Knot',
	'featuredDLText'	=> 'Télécharger Juniper\'s Knot ici : <a href = "http://junipersknot.dischan.org/">site officiel</a>.',
));

?>