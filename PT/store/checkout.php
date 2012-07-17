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
	'details'				=> 'detalhes',
	'confirmation'				=> 'confirmação',
	'payment'	=> 'pagamento',
	'finish'		=> 'terminar',
	'thankYouExcl'		=> 'Obrigado!',
	'youreAwesome'		=> 'Você é <i>espetacular</i>.',
	'loggedInPurchaseConf'	=> 'Um recibo foi enviado para o seu email da conta dischan. Todos os produtos digitais estarão disponíveis na sua <a href = "library.php">biblioteca</a> assim que a transação for processada.<br /><br />
							Muito obrigado pelo seu negócio, e se tiver algum problema, não hesite em <a href = "http://dischan.org/contact.php">contactar-nos</a>.',
	'guestPurchaseConf'		=> 'Um recibo foi enviado para o seu email PayPal, incluindo links de download e chaves para todos os produtos digitais.<br /><br />
							Muito obrigado pelo seu negócio, e se tiver algum problema, não hesite em <a href = "http://dischan.org/contact.php">contactar-nos</a>.',
	'returnToStore'		=> 'regressar à loja',
	'comfirmationUppr'		=> 'Confirmação',
	'shippingHandlingCost'		=> 'expedição & tratamento',
	'total'		=> 'Total',
	'reviewOrder'		=> 'Por favor reveja a exatidão do seu pedido antes de continuar com o pagamento.',
	'dischanCartPaypal'		=> 'A sua compra irá aparecer no PayPal como \'Dischan Cart\'.',
	'purchaseTOS'		=> 'Por favor note: Ao efetuar uma compra na loja da dischan, concorda com os nossos <a target="_blank" href = "../termsandconditions.php">termos de serviço</a> e a <a target="_blank" href = "../privacypolicy.php">política de privacidade</a>.',
	'giftCaps'		=> 'PRENDA',
	'cartEmpty'		=> 'Parece que o seu carrinho está vazio! Por favor regresse à <a href = "index.php">loja</a>. Se acha que recebeu esta notificação erradamente, por favor <a href = "http://dischan.org/contact.php">contacte-nos.</a>',
	'signUp'		=> 'Entrar',
	'checkoutLoginMsg'		=> 'Se entrar ou registrar, seremos capazes de ligar as suas compras à sua conta e de as armazenar na sua biblioteca. Assim será mais fácil transferir os seus jogos, música e/ou outros produtos mais tarde.',
	'guestCheckout'		=> 'Checkout de Convidados',
	'guestCheckMsg1'		=> 'Um checkout de convidado irá usar o seu email do PayPal para manter conta das suas compras. Todos os produtos digitais requererão que você insira tanto o seu email como a chave do produto para transferir. A maneira recomendada de fazer compras é de entrar ou registrar.',
	'guestCheckMsg2'		=> 'Por favor note que em qualquer altura depois da compra poderá criar uma conta e adicionar os produtos usando o email do PayPal e as chaves.',
					
));

?>