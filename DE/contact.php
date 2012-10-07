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
	'contact'			=> 'Kontakt (Englisch)',
	'contactText'		=> 'Fallst du uns kontaktieren möchtest, kannst du dieses Forumlar benutzen. Wir werden uns um eine schnelle Antwort bemühen.',
	'message'			=> 'Nachricht',
	'name'				=> 'Name',
	'send'				=> 'Senden',
));

?>
