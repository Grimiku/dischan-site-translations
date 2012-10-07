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
	'forumRules'		=> 'Forum Regeln',
	'forumRulesPara'	=> '<p>Folgendes zu posten kann zu einem temporären oder permanenten Bann vom Forum führen:</p> 
							<ul>
								<li>Illegale Inhalte nach Kanadischem und/oder US-Amerikanischem Gesetz</li>
								<li>Pornographie</li>
								<li>Exzessive Obszönität</li>
								<li>Werbung und/oder spam</li>
							</ul>
							<p>Moderatoren können außerdem User nach ihrem eigenen Ermessen vom Forum verbannen. Wenn du glaubst fälschlicher- oder ungerechterweise verbannt worden zu sein, <a href = "contact.php">kontaktiere uns</a> bitte.</p>',
	'forumUse'		=> 'Nutzung des Forums',
	'forumUsePara'	=> '<p>Es gibt einige Tags, die verwendet werden können, um den Text in Posts zu formattieren:</p>
							<ul>
								<li>Anwendung: [s]durchgestrichener Text[/s] - Resultat: <s>durchgestrichener Text</s></li>
								<li>Anwendung: [b]fettgedruckter Text[/b] - Resultat: <b>fettgedruckter Text</b></li>
								<li>Anwendung: [i]kursiv gesetzter Text[/i] - Resultat: <i>kursiv gesetzter Text</i></li>
								<li>Anwendung: [spoiler]versteckter Text[/spoiler] - Resultat: <p class = "spoiler">versteckter Text</p></li>
							</ul>
							<p>Einige Hinweise:</p>
							<ul>
								<li>URLS werden automatisch verlinkt.</li>
								<li>Den Cursor über dem Bild zu halten, zeigt den ursprünglichen Namen der Datei an.</li>
							</ul>',
));

?>
