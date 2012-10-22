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
	'frequentlyAskedQ'	=> 'Questions Fréquemment Posées',
	'freqPara'				=> '<p>
								<a href = "#release">When will Cradle Song be released?</a><br />
								<a href = "#commercial">Will Cradle Song be a commercial game?</a><br />
								<a href = "#mature">Will Cradle Song contain mature content?</a><br />
								<a href = "#join">Can I join Dischan?</a><br />
								<a href = "#translate">Can I translate a Dischan product or website?</a><br />
								<a href = "#problems">I\'m having an issue with a Dischan product or web site, what should I do?</a><br />
								<a href = "#language">What is the purpose of the language setting on my account?</a><br />
								<a href = "#languageMissing">My prefered language is not listed as a language setting, why not?</a><br />
								<a href = "#languageErrors">I noticed a typo/mistranslation/grammar error in a Dischan product or web site, what should I do?</a>
							</p>
							<br />
							<br />
							<p id = "release"><b>When will Cradle Song be released?</b></p>
							<p>There is no set date for Cradle Song\'s release yet, but we are aiming to release a demo in 2012, and hopefully the full game the year after.</p>
							<br />
							<p id = "commercial"><b>Will Cradle Song be a commercial game?</b></p>
							<p>Yes. However, we would rather people play it than make a lot of money, so it will not be expensive by any means. Definitely under $10 USD.</p>
							<br />
							<p id = "mature"><b>Will Cradle Song contain mature content?</b></p>
							<p>Yes, Cradle Song will have violence, gore, swearing, and sexual content in some routes. Players should be 17 years or older to play.</p>
							<br />
							<p id = "join"><b>Can I join Dischan?</b></p>
							<p>There is an online application form <a href = "apply.php">here</a>.</p>
							<br />
							<pid = "translate"><b>Can I translate a Dischan product or website?</b></p>
							<p>Yes, however working with translators to produce a good translation can be difficult and time consuming, so we have a translation test we request you complete before contacting us.
							You can find it <a href = "internationalization.php">here</a>.</p>
							<br />
							<p id = "problems"><b>I\'m having an issue with a Dischan product or web site, what should I do?</b></p>
							<p>Please visit our <a href = "support.php">support</a> page.</p>
							<br />
							<p id = "language"><b>What is the purpose of the language setting on my account?</b></p>
							<p>We use the language setting on your account for the following:</p>
							<ol>
								<li>Allowing the store to list downloads for games and other products in your language first, if a translation is available (otherwise English is listed first, and the remaining languages in alphabetical order).</li>
								<li>Displaying components of the site in your language, if a translation is available.</li>
								<li>Delivering newsletters and notification emails in your language, if a translation is available.</li>
							</ol>
							<p id = "languageMissing"><b>My prefered language is not listed as a language setting, why not?</b></p>
							<p>This is likely because we have no translations for your language, so the setting would have no effect. If you are a fluent speaker of both English and your prefered language, and would like to help translate a site or product into your language,
							please visit our <a href = "internationalization.php">internationalization and translations</a> page.</p>
							<br />
							<p id = "languageErrors"><b>I noticed a typo/mistranslation/grammar error in a Dischan product or web site, what should I do?</b></p>
							<p>Please <a href = "contact.php">report this error to us</a>. We will try to fix it.</p>',
));

?>