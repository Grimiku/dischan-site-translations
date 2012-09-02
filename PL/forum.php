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
	'forumRules'		=> 'Zasady Forum',
	'forumRulesPara'	=> '<p>Zamieszczanie którychkolwiek z poniższych treści może skutkować tymczasowym lub trwałym banem na forum:</p> 
							<ul>
								<li>Nielegalna zawartość określona przez kanadyjskie i/lub amerykańskie prawo</li>
								<li>Pornografia</li>
								<li>Nadmierne wulgaryzmy</li>
								<li>Reklamy i/lub spam</li>
							</ul>
							<p>Moderatorzy mogą również banować użytkowników wedle własnego uznania. Jeśli uważasz, że zostałeś niesprawiedliwie osądzony, proszę się <a href = "contact.php">z nami skontaktować</a>.</p>',
	'forumUse'		=> 'Korzystanie z forum',
	'forumUsePara'	=> '<p>Poniższe znaczniki pozwalają formatować twoje posty na forum:</p>
							<ul>
								<li>Przekreślenie - Użyj: [s]przekreślony tekst[/s] - Przykład: <s>przekreślony tekst</s></li>
								<li>Pogrubienie - Użyj: [b]pogrubiony tekst[/b] - Przykład: <b>pogrubiony tekst</b></li>
								<li>Kursywa - Użyj: [i]pochylony tekst[/i] - Przykład: <i>pochylony tekst</i></li>
								<li>Spoiler - Użyj: [spoiler]spoiler[/spoiler] - Przykład: <p class = "spoiler">spoiler</p></li>
							</ul>
							<p>Kilka uwag:</p>
							<ul>
								<li>Wklejony link sam przekształci sie w hiperłącze</li>
								<li>Gdy najedziesz kursorem na obrazek, pokaże się jego oryginalna nazwa</li>
							</ul>',
));

?>