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
	'forumRules'		=> 'Regole del forum',
	'forumRulesPara'	=> '<p>Postare uno qualsiasi dei seguenti può risultare in un ban temporaneo o permanente dai forum:</p> 
							<ul>
								<li>Contenuti illegali secondo quanto determinato dalle leggi del Canada e/o degli Stati Uniti</li>
								<li>Pornografia</li>
								<li>Profanità eccessive</li>
								<li>Pubblicità e/o spam</li>
							</ul>
							<p>I moderatori hanno la possibilità di bannare gli utenti a loro discrezione, se ritieni di essere stato falsamente o ingiustamente bannato, <a href = "contact.php">contattaci</a>.</p>',
	'forumUse'		=> 'Usare il forum',
	'forumUsePara'	=> '<p>Alcuni tag possono permetterti di cambiare la formattazione dei tuoi post sui forum. Sono i seguenti:</p>
							<ul>
								<li>Sbarrato - Usa: [s]testo sbarrato[/s] - Esempio: <s>testo sbarrato</s></li>
								<li>Grassetto - Usa: [b]testo in grassetto[/b] - Esempio: <b>testo in grassetto</b></li>
								<li>Corsivo - Usa: [i]testo in corsivo[/i] - Esempio: <i>testo in corsivo</i></li>
								<li>Spoiler - Usa: [spoiler]spoiler[/spoiler] - Esempio: <p class = "spoiler">spoiler</p></li>
							</ul>
							<p>Alcune note:</p>
							<ul>
								<li>I link diventano automaticamente tali dopo essere stati scritti</li>
								<li>Muovere il mouse sopra ad un immagine farà visualizzare il nome originale dell\'immagine in questione</li>
							</ul>',
));

?>