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
	'apply'				=> 'Bewerbung',
	'applyText'			=> 'Dischan ist immer offen für potentielle Talente. Wenn du glaubst, dass du das Zeug dazu hast, mit uns zu arbeiten, füll einfach dieses Forumlar aus. Achte darauf, alle Felder mit Stern auszufüllen, oder es wird nicht abgeschickt! <br /><br /> Wir haben eine Liste von Positionen für die wir besonders offen sind. Du kannst sie unter <a href = "positions.php">Positionen</a> finden.',
	'yourName'			=> 'Dein Name',
	'yourEmail'			=> 'Deine Email',
	'doubleCheck'		=> 'Überprüfe die Richtigkeit deiner Eingaben!',
	'position'			=> 'Position',
	'graphicDesigner'	=> 'Graphic Designer',
	'artist'			=> 'Künstler',
	'yourSkills'		=> 'Deine Fähigkeiten',
	'aboutYou'			=> 'Erzähl uns ein wenig von dir',
	'extra'				=> 'Sollten wir sonst noch etwas über dich wissen?',
));

?>
