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
	'positions'			=> 'Вакансии',
	'positionsPara'		=> 'Хоть Dischan всегда интересуется потенциальным талантом любого вида, ниже вы найдёте несколько вакансий которые мы хотели бы заполнить. Пожалуйста учтите что в данный момент эти позиции добровольные. Но, если будут заработаны деньги от вашей работы, вас компенсируют надлежащим образом, обычно определённым процентом от полученного дохода.',
	'graphicDesigner'	=> 'Графический Дизайнер',
	'graphicDesignPara'	=> '<p>Dischan ищет графических дизайнеров для задач такого рода:</p>
							<ul>
								<li>Мозговой штурм дизайнов для вымышленных миров (логотипы, вывески, печати и т.д.)</li>
								<li>Веб дизайн</li>
								<li>Дизайн пользовательского интерфейса</li>
							</ul>
							<p>Если вы считаете что можете выполнить любое из выше названных действий тогда мы будем рады работать с вами.
							Заявители должны указать ссылку на их портфолио для рецензирования. Чем больше работ, тем лучше, если хотите то вы можете указать работы которыми вы гордитесь.
							<br/><br/>
							<a href = "apply.php?position=gd"><b>Подать Заявление</b></a></p>',
	'artist'			=> 'Художник',
	'artistPara'		=> '<p>Dischan ищет художников для помощи в создании концепт арта, спрайтов и задников. Некоторые из навыков которые мы ищем являются:
							<ul>
								<li>Опыт работы в Photoshop\'е</li>
								<li>Опыт в создании и модифицировании цифровых изображений</li>
							</ul>
							Заявителям стоит прикрепить портфолио недавних работ как приложение или как ссылку.
							<br/><br/>
							<a href = "apply.php?position=ar"><b>Подать Заявление</b></a></p>',
));

?>