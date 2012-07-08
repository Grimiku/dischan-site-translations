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
	'internationalTrans'=> 'Интернационализация и Переводы',
	'internationalPara'	=> '<p>Dischan старается быть настолько интернациональным насколько возможно и для того чтобы делится нашей продукцией в стольких языках насколько мы можем. Чтобы это сделать, нам нужна ваша помощь.
							Если вы уверенно многоязычны и заметили что за языком не следят, пожалуйста <a href = "contact.php">свяжитесь с нами</a>. Мы будем рады вашей помощи в переводе нашего сайта или нашей продукции.</p>
							<br />
							<p>Чтобы убедится в ваших способностях, мы просим чтобы вы завершили наш <a href="files/translatorspack.zip">тест</a>, который включает перевод различных частей скрипта из превью Cradle Song. Мы попросим его у вас после того как вы свяжитесь с нами, поэтому завершите его до того как свяжитесь.</p>',
	'qualityControl'	=> 'Контроль Качества',
	'qualityControlPara'=> '<p>Хоть мы и стараемся на все 100, Dischan может гарантировать качество только оригинального скрипта и сайта на английском языке. Если вы заметите опечатки, грамматические ошибки или неправильные переводы, пожалуйста <a href = "contact.php">свяжитесь с нами</a> и сообщите нам.</p>',
));

?>