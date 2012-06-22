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
	'apply'				=> 'Подать заявление',
	'applyText'			=> 'Dischan никогда не закроет двери потенциальному таланту. Если вы думаете что достоины с нами работать, пожалуста заполните анкету снизу. Убедитесь что вы заполнили все поля со звёздочкой иначе анкета не отправится! <br /><br /> Если вы хотите узнать какие вакансии у нас сейчас имеются, пожалуста посетите страницу <a href = "positions.php">вакансий</a>.',
	'yourName'			=> 'ФИО',
	'yourEmail'			=> 'E-Mail',
	'doubleCheck'		=> 'Не забудьте перепроверить!',
	'position'			=> 'Вакансия',
	'graphicDesigner'	=> 'Графический дизайнер',
	'artist'			=> 'Артист',
	'yourSkills'		=> 'Ваши навыки',
	'aboutYou'			=> 'Раскажите немного о себе',
	'extra'				=> 'Что-то ещё что может быть нам стоит знать?',
));

?>