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
	'details'				=> 'детали',
	'confirmation'				=> 'подтверждение',
	'payment'	=> 'оплата',
	'finish'		=> 'завершить',
	'thankYouExcl'		=> 'Спасибо!',
	'youreAwesome'		=> 'Вы <i>крутые</i>.',
	'loggedInPurchaseConf'	=> 'Чек был отправлен на почтовый ящик зарегестрированый на Dischan. Все заказаные дигитальные товары будут доступны в <a href = "library.php">библиотеке</a> как только транзакция завершится.<br /><br />
							Благодарим вас за покупку. Если у вас возникнут проблемы, стесняйтесь и <a href = "http://dischan.org/contact.php">свяжитесь с нами</a>.',
	'guestPurchaseConf'		=> 'Чек был отправлен на почтовый ящик зарегестрированый на PayPal, включая все ссылки и серийные ключи на дигитальные товары.<br /><br />
							Благодарим вас за покупку. Если у вас возникнут проблемы, стесняйтесь и <a href = "http://dischan.org/contact.php">свяжитесь с нами</a>.',
	'returnToStore'		=> 'вернутся в магазин',
	'comfirmationUppr'		=> 'Подтверждение',
	'shippingHandlingCost'		=> 'shipping & handling',
	'total'		=> 'Сумма',
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