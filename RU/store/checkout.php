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
	'details'				=> 'details',
	'confirmation'				=> 'confirmation',
	'payment'	=> 'payment',
	'finish'		=> 'finish',
	'thankYouExcl'		=> 'Thank you!',
	'youreAwesome'		=> 'You\'re <i>awesome</i>.',
	'loggedInPurchaseConf'	=> 'A receipt has been sent to your dischan account email. Any digital goods will be available in your <a href = "library.php">library</a> as soon as the transaction is processed.<br /><br />
							Thank you very much for your business, and if you have any problems, do not hesitate to <a href = "http://dischan.org/contact.php">contact us</a>.',
	'guestPurchaseConf'		=> 'A receipt has been sent to your paypal email, including download links and serials for any digital goods.<br /><br />
							Thank you very much for your business, and if you have any problems, do not hesitate to <a href = "http://dischan.org/contact.php">contact us</a>.',
	'returnToStore'		=> 'return to store',
	'comfirmationUppr'		=> 'Confirmation',
	'shippingHandlingCost'		=> 'shipping & handling',
	'total'		=> 'Total',
	'reviewOrder'		=> 'Please review your order for accuracy before proceeding with payment.',
	'dischanCartPaypal'		=> 'Your purchase will show up in paypal as \'Dischan Cart\'.',
	'purchaseTOS'		=> 'Please note: By making a purchase
									on the dischan store, you agree to our <a target="_blank" href = "../termsandconditions.php">terms of service</a> and <a target="_blank" href = "../privacypolicy.php">privacy policy</a>.',
	'giftCaps'		=> 'GIFT',
	'cartEmpty'		=> 'It looks like your cart is empty! Please return to the <a href = "index.php">store</a>. If you believe you recieved this notification in error, please <a href = "http://dischan.org/contact.php">contact us.</a>',
	'signUp'		=> 'Sign Up',
	'checkoutLoginMsg'		=> 'Logging in or registering allows for us to attach your purchases to your account and store them in your library. This makes it easy for you to download your games, music, and/or other products later.',
	'guestCheckout'		=> 'Guest Checkout',
	'guestCheckMsg1'		=> 'A guest account will use your paypal email to keep track of your purchases. All digital goods will require you to
					enter both your email and product serial to download. Registering or logging in is the recommended
					way to make purchases.',
	'guestCheckMsg2'		=> 'Please note that at any time after your purchase you may still create an account and add in your products using your
					paypal email and serials.',
					
));

?>