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
	'frequentlyAskedQ'	=> 'Часто задаваемые вопросы (FAQ)',
	'freqPara'				=> '<p>
								<a href = "#release">Когда выйдет Cradle Song?</a><br />
								<a href = "#commercial">Будет ли Cradle Song коммерческой игрой?</a><br />
								<a href = "#mature">Cradle Song будет содержать материал для взрослых?</a><br />
								<a href = "#join">Можно мне присоединиться к Dischan?</a><br />
								<a href = "#translate">Можно мне перевести продукт или сайт Dischan?</a><br />
								<a href = "#problems">У меня проблема с продуктом или с сайтом Dischan, что мне делать?</a><br />
								<a href = "#language">Для чего нужен выбор языка в настройках моей учётной записи?</a><br />
								<a href = "#languageMissing">Мой предпочитаемый язык не доступен в языковых настройках, почему?</a><br />
								<a href = "#languageErrors">Я нашёл опечатку/неправильный перевод/грамматическую ошибку в продукте или на сайте Dischan, что мне делать?</a>
							</p>
							<br />
							<br />
							<p id = "release"><b>Когда выйдет Cradle Song?</b></p>
							<p>Определённой даты выхода Cradle Song нету, но мы хотим выпустить демо в 2012 и желательно полную игру в следующем году.</p>
							<br />
							<p id = "commercial"><b>Будет ли Cradle Song коммерческой игрой?</b></p>
							<p>Да. Но, наша цель что бы люди в неё играли а не что бы заработать много денег, поэтому она не будет дорогой. Точно меньше чем $10 USD.</p>
							<br />
							<p id = "mature"><b>Cradle Song будет содержать материал для взрослых?</b></p>
							<p>Да, Cradle Song будет содержать жестокость, кровь, мат и содержимое сексуального характера в некоторых путях. Игроки должны быть 17 лет или старше.</p>
							<br />
							<p id = "join"><b>Можно мне присоединиться Dischan?</b></p>
							<p>Онлайн заявку можно найти <a href = "apply.php">здесь</a>.</p>
							<br />
							<pid = "translate"><b>Можно мне перевести продукт или сайт Dischan?</b></p>
							<p>Да, но работать с переводчиками что бы создать хороший перевод сложно и требует много времени, поэтому у нас есть тест который мы просим вас пройти перед тем как с нами свяжитесь.
							Вы можете его найти <a href = "internationalization.php">здесь</a>.</p>
							<br />
							<p id = "problems"><b>У меня проблема с продуктом или с сайтом Dischan, что мне делать?</b></p>
							<p>Пожалуйста посетите нашу страницу <a href = "support.php">поддержки</a>.</p>
							<br />
							<p id = "language"><b>Для чего нужен выбор языка в настройках моей учётной записи?</b></p>
							<p>Мы используем настройку языка в вашей учётной записи для следующего:</p>
							<ol>
								<li>Позволяем магазину показывать загрузки для игр и других продуктов в вашем языке вначале, если доступен перевод (иначе вначале показывается английский и оставшиеся языки в алфавитном порядке).</li>
								<li>Показывания компонентов сайта в вашем языке, если доступен перевод.</li>
								<li>Отправка рассылки и оповещений в вашем языке, если доступен перевод.</li>
							</ol>
							<p id = "languageMissing"><b>Мой предпочитаемый язык не доступен в языковых настройках, почему?</b></p>
							<p>Это возможно по тому что у нас не имеется перевода на ваш язык, поэтому настройка имела бы никакого эффекта. Если вы свободно владеете как английским и вашим предпочитаемым языком и хотели бы перевести сайт или продукт в ваш язык, пожалуйста посетите страницу <a href = "internationalization.php">интернационализации и переводов</a>.</p>
							<br />
							<p id = "languageErrors"><b>Я нашёл опечатку/неправильный перевод/грамматическую ошибку в продукте или на сайте Dischan, что мне делать?</b></p>
							<p>Пожалуйста <a href = "contact.php">сообщите об этой ошибке нам</a>. Мы попытаемся её исправить.</p>',
));

?>