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
	'storeHelp'				=> 'Ajuda da Loja',
	'sotreHelpPara'				=> 'Se tiver problemas ou questões relacionadas com a loja da Dischan, por favor leia as perguntas frequentes abaixo. Se o seu problema não for resolvido, encorajámo-lo a <a href = "contact.php">contactar-nos</a>, incluindo toda a informação que considerar relevante. Responderemos o mais cedo possível.',
	'storeFAQ'		=> 'Perguntas Frequentes da Loja',
	'storeFAQPara'	=> '<p><b>A loja da Dischan permite enviar prendas?</b></p>
							<p>Sim! Pode dar uma prenda a outro utilizador da Dischan ou a um endereço de email. Basta navegar até à página do produto e clicar em "Prenda".</p>
							<br />
							<p><b>A Dischan permite pagamentos internacionais?</b></p>
							<p>Sim! Nós usamos o PayPal como o nosso processador de pagamentos, e nós aceitamos tudo o que eles aceitam. Porém, para itens que requerem expedições, é melhor contactar-nos primeiro, se não viver nos Estados Unidos nem no Canadá.</p>
							<br />
							<p><b>Como funcionam os downloads de produtos digitais?</b></p>
							<p>Se comprar um produto digital com uma conta Dischan, o mesmo será adicionada à sua biblioteca, para que possa transferi-lo a qualquer altura. Se não tiver uma conta Dischan, então será enviada uma chave para o seu email do PayPal. Pode usar esta chave em conjunto com o seu email do PayPal para transferir os seus produtos.</p>
							<br />
							<p><b>Não recebi um email depois da compra, o que faço?</b></p>
							<p>Por favor espere pelo menos 30 minutos depois de efetuar a compra, e verifique a pasta do lixo ou do spam. Se o email ainda não chegar, por favor <a href = "contact.php">contacte-nos</a> com o ID da sua transação do PayPal ou o número de recipiente, e o nome do utilizador ou o email que usou na compra. Tentaremos resolver o problema o mais cedo possível.</p>',
));

?>