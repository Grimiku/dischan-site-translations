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
	'frequentlyAskedQ'	=> 'FAQ (Häufig gestellte Fragen)',
	'freqPara'				=> '<p>
								<a href = "#release">Wann wird Cradle Song veröffentlicht werden?</a><br />
								<a href = "#commercial">Wird Cradle Song etwas kosten?</a><br />
								<a href = "#mature">Wird Cradle Song jugendfrei sein?</a><br />
								<a href = "#join">Kann ich Dischan beitreten?</a><br />
								<a href = "#translate">Kann ich ein Dischan Produkt bzw. Webseite übersetzen?</a><br />
								<a href = "#problems">Es gibt Problem mit einem Dischan Produkt bzw. Webseite. Was soll ich tun?</a><br />
								<a href = "#language">Welchen Einfluss hat die Spracheinstellung auf meinem Account?</a><br />
								<a href = "#languageMissing">Meine Sprache ist nicht aufgelistet. Wieso nicht?</a><br />
								<a href = "#languageErrors">Ich habe einen Tipp-/Übersetzungs-/Grammatikfehler bemerkt. Was soll ich tun?</a>
							</p>
							<br />
							<br />
							<p id = "release"><b>Wann wird Cradle Song veröffentlicht werden?</b></p>
							<p>Es gibt noch keinen fixen Termin für Cradle Song, aber wir streben die Veröffentlichung einer Demo Ende 2012, und den Release des vollen Spiels im darauffolgenden Jahr an.</p>
							<br />
							<p id = "commercial"><b>Wird Cradle Song etwas kosten?</b></p>
							<p>Ja. Allerdings ist es uns wichtiger, das es gespielt wird, als daran zu verdienen. Es wird keineswegs teuer sein. Definitiv unter $10 USD.</p>
							<br />
							<p id = "mature"><b>Wird Cradle Song jugendfrei sein?</b></p>
							<p>Gewalt, Brutalität, Flüche und sexuelle Inhalte werden in manchen Teilen vorkommen. Siebzehn ist ein geeignetes Alter zum Spielen unserer Produkte.</p>
							<br />
							<p id = "join"><b>Kann ich Dischan beitreten?</b></p>
							<p>Es gibt ein Online-Bewerbungsfoumular <a href = "apply.php">hier</a>.</p>
							<br />
							<pid = "translate"><b>Kann ich ein Dischan Produkt bzw. Webseite übersetzen?</b></p>
							<p>Ja. Allerdings kann es sehr schwer und Zeitaufwendig sein, eine gute Übersetzung zu machen. Daher haben wir einen Test vorbereitet, den wir dich bitten zu probieren, bevor du uns kontaktierst.
							Du kannst ihn <a href = "internationalization.php">hier</a> finden.</p>
							<br />
							<p id = "problems"><b>Es gibt Problem mit einem Dischan Produkt bzw. Webseite, was soll ich tun?</b></p>
							<p>Schreibe dem <a href = "support.php">Support</a>.</p>
							<br />
							<p id = "language"><b>Welchen Einfluss hat die Spracheinstellung auf meinem Account?</b></p>
							<p>Wir benutzen diese Einstellung an für folgendes:</p>
							<ol>
								<li>Im Store, falls möglich, Spiele und andere Produkte in deiner Sprache vor anderen Spielen und Produkten anzuzeigen. (Ansonsten ist Englisch die erste Sprache, gefolgt von den Restlichen in alphabetischer Reihenfolge)</li>
								<li>Teile unserer Seite, falls möglich, in der Sprache deiner Wahl anzuzeigen.</li>
								<li>E-Mails und andere Benachrichtigungen, falls möglich, in der Sprache deiner Wahl anzuzeigen.</li>
							</ol>
							<p id = "languageMissing"><b>Meine Sprache ist nicht aufgelistet. Wieso nicht?</b></p>
							<p>Das liegt wahrscheinlich daran, dass wir keine Übersetzung für deine Sprache haben. Wenn du sowohl Englisch, als auch deine Sprache fließend sprichst, und du uns helfen möchtest eines unserer Produkte bzw. Webseiten, in deine Sprache zu übersetzen,
							gehe auf die <a href = "internationalization.php">Internationalisierungs- und Übersetzungs</a>seite.</p>
							<br />
							<p id = "languageErrors"><b>Ich habe einen Tipp-/Übersetzungs-/Grammatikfehler bemerkt. Was soll ich tun?</b></p>
							<p>Bitte <a href = "contact.php">melde uns diesen Fehler</a>. Wir werden versuchen, ihn zu beheben.</p>',
));

?>
