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
	'loggedInPurchaseConf'	=> 'Чек был отправлен на ваш Dischan E-Mail. Все заказанные дигитальные товары будут доступны в <a href = "library.php">библиотеке</a> как только транзакция завершится.<br /><br />
							Благодарим вас за покупку. Если у вас возникнут проблемы, не стесняйтесь <a href = "http://dischan.org/contact.php">связатся с нами</a>.',
	'guestPurchaseConf'		=> 'Чек был отправлен на ваш PayPal E-Mail, включая все ссылки и ключи на дигитальные товары.<br /><br />
							Благодарим вас за покупку. Если у вас возникнут проблемы, не стесняйтесь <a href = "http://dischan.org/contact.php">связатся с нами</a>.',
	'returnToStore'		=> 'вернутся в магазин',
	'comfirmationUppr'		=> 'Подтверждение',
	'shippingHandlingCost'		=> 'доставка',
	'total'		=> 'Сумма',
	'reviewOrder'		=> 'Пожалуйста перепроверьте ваш заказ перед оплатой.',
	'dischanCartPaypal'		=> 'Ваша покупка будет помечена в PayPal как \'Dischan Cart\'.',
	'purchaseTOS'		=> 'Примите во внимание: Совершая покупку в магазине Dischan, вы подтверждаете что согласны с <a target="_blank" href = "../termsandconditions.php">условиями пользования</a> и <a target="_blank" href = "../privacypolicy.php">политикой конфиденциальности</a>.',
	'giftCaps'		=> 'ПОДАРОК',
	'cartEmpty'		=> 'Похоже что ваше корзина пустая! Пожалуйста вернитесь в <a href = "index.php">магазин</a>. Если вы считаете что получили это оповещение по ошибке, не стесняйтесь <a href = "http://dischan.org/contact.php">связатся с нами.</a>',
	'signUp'		=> 'Зарегистрироваться',
	'checkoutLoginMsg'		=> 'Заход или регистрация учётной записи позволяет нам прикреплять ваши покупки к вашей учётной записи и хранить их в вашей библиотеке. Это облегчает скачку ваших игр, музыки, и/или других товаров в будущем.',
	'guestCheckout'		=> 'Guest Checkout',
	'guestCheckMsg1'		=> 'Гости могут пользоваться PayPal что бы следить за покупками. Все дигитальные товары потребуют чтобы вы вводили как ваш электронный адрес так и ключ для скачки товара. Рекомендуется зарегистрироваться или зайти в вашу учётную запись чтобы совершать покупки.',
	'guestCheckMsg2'		=> 'Учтите что в любой момент после совершение оплаты вы можете создать учётную запись и добавить ваши покупки изпользуя ваш PayPal E-Mail и ключ.',
));

?>