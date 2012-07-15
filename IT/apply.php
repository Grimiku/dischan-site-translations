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
	'apply'				=> 'Entra a far parte di Dischan',
	'applyText'			=> 'Dischan non chiude mai le porte di fronte a del potenziale talento. Se pensi di avere le qualità giuste per lavorare con noi, puoi riempire il modulo sottostante. Assicurati di riempire tutti i campi contrassegnati dall\'asterisco, o non sarà inviato! <br /><br /> Se ti interessa dare un\'occhiata alle posizioni a cui siamo particolarmente aperti, puoi visitare la pagina <a href = "positions.php">posizioni</a>.',
	'yourName'			=> 'Il tuo nome',
	'yourEmail'			=> 'La tua email',
	'doubleCheck'		=> 'Controlla bene!',
	'position'			=> 'Da dove vieni',
	'graphicDesigner'	=> 'Graphic Designer',
	'artist'			=> 'Artista',
	'yourSkills'		=> 'Le tue abilità',
	'aboutYou'			=> 'Raccontaci qualcosa di te',
	'extra'				=> 'Qualcos\'altro che dovremmo sapere?',
));

?>