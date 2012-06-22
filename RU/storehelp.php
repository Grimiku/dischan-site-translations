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
	'storeHelp'				=> 'Store Help',
	'sotreHelpPara'				=> 'If you have any issues or questions concerning the Dischan store, please check the frequently asked questions below. If this does not resolve your issue, then you are encouraged to <a href = "contact.php">contact us</a>, including all information you may believe relevant. We will get back to you as soon as we can.',
	'storeFAQ'		=> 'Store FAQ',
	'storeFAQPara'	=> '<p><b>Does the Dischan store allow gifting?</b></p>
							<p>Yes! You can gift to another Dischan user, or to an email address. Just navigate to a product page and click "Gift".</p>
							<br />
							<p><b>Does Dischan allow international purchases?</b></p>
							<p>Yes! We use PayPal as our payment processor, and anything they accept we do too. However, for items that require shipping, it is best to contact us first if you are outside of the United States or Canada.</p>
							<br />
							<p><b>How do digital product downloads work?</b></p>
							<p>If you purchase your digital content with a Dischan account, then it is added to your library to be downloaded at any time. If you do not use a Dischan account, then a serial for your product will be sent to your PayPal email. You can use this serial in conjunction with your PayPal email to download your products.</p>
							<br />
							<p><b>I haven\'t received my email after purchase, what do I do?</b></p>
							<p>Please wait for at least 30 minutes after your purchase, and be sure to check your junk or spam folder. If it still does not arrive, please <a href = "contact.php">contact us</a> with your PayPal transaction ID or receipt number and the username or email you used to purchase. We will work to resolve the issue as quickly as possible.</p>',
));

?>