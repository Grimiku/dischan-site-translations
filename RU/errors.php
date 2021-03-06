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
	'passwordIncorrect'			=> 'Неправильный пароль.',
	'userEmailNotFound'			=> 'Имя пользователя или E-Mail не найден.',
	'notLoggedIn'		=> 'Вы не вошли в свою учётную запись.',
	'error'		=> 'Ошибка!',
	'forumDoesNotExist'		=> 'Вы пытаетесь оставить пост в форуме который не существует.',
	'subConPicRequired'		=> 'Новая тема требует название, текст и картинку.',
	'picConRequired'		=> 'Ответ в теме требует картинку и(ли) текст.',
	'threadLocked'				=> 'Нельзя оставлять посты. Тема закрыта.',
	'fileUpError'			=> 'Возникла проблема с загрузкой файла. Пожалуйста попробуйте снова.',
	'thumbProblem'			=> 'Возникла проблема с создателем миниатюр. Может стоит попробовать другое изображение?',
	'passwordNoMatch'		=> 'Ваши новые пароли не идентичны.',
	'invalidEmail'			=> 'Недопустимый E-Mail.',
	'postLimitReached'		=> 'Лимит по постам достигнут. Пожалуйста начните новую тему если вы хотите продолжать вести дискуссию по этой теме.',
	'imageLimitReached'		=> 'Лимит по изображениям достигнут, попробуйте оставить пост без картинки.',
	'charLimitReached'		=> 'Ваш пост слишком длинный. Пожалуйста сократите его.',
	'newLLimitReached'		=> 'Пост превышает лимит по новым строкам. Пожалуйста уберите несколько новых строк.',
	'postingTooFast'		=> 'Вы слишком быстро пишите! Вам нужно немножко подождать. Может стоит пойти и угостить себя чашечкой горячего шоколада пока вы ждёте?',
	'fileTooLarge'			=> 'Ваш файл слишком большой! Попробуйте его уменьшить или пожалуйтесь что наш лимит на размер файлов слишком маленький.',
	'silenced'		=> 'Молчанка!',
	'silencedMsg'			=> 'Вас посадили на молчанку. Это означает что вы не можете делать посты! Вы может быть плохо себя вели или вас случайно забанили. Что бы апеллировать это решение, пожалуйста свяжитесь с модератором.',
	'alreadyUnsubbed'	=> 'Вы не подписаны к этой теме, по нашим данным, поэтому мы не можем вас отписать!',
	'alreadySubbed'			=> 'Мы не можем вас подписать к чему то к чему вы уже подписаны! Может стоит полегче обращаться с мышкой.',
	'ipBanned'			=> 'IP Забанен!',
	'ipBannedMsg'			=> 'Ваш IP забанен. Скорей всего это не ваша вина, скорей всего спаммер заставил на его забанить. Пожалуйста свяжитесь с нами если вы думаете что это не из-за вас.',
	'forumLocked'			=> 'Форум закрыт.',
	'captchaFail'			=> 'Капча неправильна, пожалуйста попробуйте снова.',
	'emptyForms'			=> 'Некоторые формы не заполнены, пожалуйста перепроверьте.',
	'invalidUsername'			=> 'Неправильное имя пользователя, пожалуйста попробуйте снова.',
	'passwordTooShort'			=> 'Пароли не совпали или слишком короткие.',
	'emailUsed'			=> 'E-Mail уже используется.',
	'usernameUsed'			=> 'Имя пользователя уже используется.',
	'passwordIncoTryAgain'	=> 'Неправильный пароль. Пожалуйста попробуйте снова.',
	'msgReqSubCon'			=> 'Новое сообщение требует название и текста.',
	'msgTooManyChars'		=> 'В вашем сообщение слишком много символов! Пожалуйста сократите его.',
	'msgTooManyNewL'		=> 'В вашем сообщение слишком много новых строк, пожалуйста уберите несколько новых строк.',
	'flood'			=> 'Вы выполняете действия слишком быстро. Пожалуйста подождите и попробуйте снова.',
	'destinationReq'		=> 'Требуется указать куда отправлять.',
	'threadNoLonger'			=> 'Тема больше не существует.',
	'registrationLock'			=> 'Регистрация сейчас закрыта. Извините! Мы возможно над чем то сейчас работаем. Пожалуйста попробуйте позже.',
	'userNotFound'			=> 'Пользователь не найдем.',
	'spamFilter'			=> 'Сработал спам фильтр!',
	'spamFilterMsg'			=> 'Ваше сообщение было похоже на спам поэтому мы его выкинули. Если вы не спаммер, пожалуйста заново напишите ваше сообщение и попробуйте снова.',
	'sendMsgFail'			=> 'Не удалось отправить сообщение!',
	'sendMsgFailMsg'		=> 'Ваше сообщение не отправлено по непонятным причинам. Извините! Пожалуйста попробуйте снова через некоторое время.',
	'formsEmpty'			=> 'Некоторые требуемые формы были оставлены пустыми.',
	'contactFlood'			=> 'Вы недавно отсылали контактную форму. Пожалуйста попробуйте снова через некоторое время.',
	'applicationFlood'		=> 'Вы недавно отсылали заявление. Пожалуйста попробуйте снова через некоторое время.',
	'noAcctEmail'			=> 'С этим E-Mail\'ом не связана учётная запись.',
	'passRstFlood'			=> 'Вы недавно сбрасывали пароль, пожалуйста проверьте вашу почту.<br /><br />Если вы не получили письмо, пожалуйста проверьте вашу Спам папку и <a href = "contact.php">свяжитесь с нами</a>.',
	'sorry'			=> 'Извините!',
	'loginDisabl'			=> 'Вход в данный момент отключён. Пожалуйста попробуйте снова через некоторое время.',
	'msgSendFailSome'		=> 'Отправка сообщение данным пользователям не удалась (они могут не существовать, пожалуйста проверьте их написание):',
	'ratAndReviewEmp'			=> 'Рецензия и(ли) рейтинг пустая(ые).',
	'reviewTooManyChars'		=> 'В вашей рецензии слишком много символов! Пожалуйста сократите её.',
	'reviewTooManyNewL'			=> 'В вашей рецензии слишком много новых строк, пожалуйста уберите несколько новых строк.',
	'productMssng'			=> 'Извините! Этот продукт не найден. Он мог быть временно или на вечно убран.',
	'reviewedAlr'			=> 'Вы уже оставляли рецензию на этот продукт. Вы можете рецензировать продукт только один раз. Если вы хотите что либо изменить насчёт рецензии, не стесняйтесь <a href = "http://dischan.org/contact.php">связаться с нами</a> и сообщить нам.',
	'serialDisabled'			=> 'Этот ключ был заблокирован поскольку он подозревается в злоупотреблении. С этим скоро разберутся, но вы можете <a href = "http://dischan.org/contact.php">связатся с нами</a> немедленно если вы чувствуете что это ошибка.',
	'noDownloadPrm'			=> 'У вас не хватает прав чтобы загрузить это. Извините! Если вы думаете что получили это сообщение по ошибке то пожалуйста <a href = "http://dischan.org/contact.php">свяжитесь с нами</a>.',
	'noDLSelect'			=> 'Вы должны выбрать формат или операционную систему что бы начать загрузку!',
	'invEmailSerialComb'		=> 'Неправильный ключ или E-Mail, пожалуйста попробуйте снова.',
	'downloadLimit'			=> 'Лимит по загрузкам достигнут!',
	'downloadLimitMsg1'			=> 'Вы достигли лимита по загрузкам для демо игр. Пожалуйста вернитесь через несколько часов и ваш лимит будет сброшен. Мы извиняемся за причинённые неудобства.',
	'downloadLimitMsg2'			=> 'Вы достигли лимита по загрузкам для продуктов. Пожалуйста вернитесь через несколько часов и ваш лимит будет сброшен. Мы извиняемся за причинённые неудобства.',
	'downloadLimitMsg3'			=> 'Вы достигли лимита по загрузкам для этого продукта. Если вам до сих пор нужно его загрузить, пожалуйста подождите несколько часов и ваш лимит будет сброшен.',
	'reviewNotFound'			=> 'Рецензия не найдена.',
	'mustPurchase'			=> 'Вы должны купить этот продукт перед тем как его рецензировать.',
	'noPermission'			=> 'У вас не хватает прав чтобы выполнить это действие. Если вы думаете что это ошибка, пожалуйста <a href = "http://dischan.org/contact.php">свяжитесь с нами</a>.',
	'formExpired'			=> 'Эта форма истекла по времени или недействительна. Пожалуйста попробуйте снова.',
	'userNotFoundGift'		=> 'Пользователь не найден.',
	'UserOwns'			=> 'У этого пользователя уже имеется этот продукт.',
	'invalidEmailGift'		=> 'Недействительный E-Mail.',
	'alreadyInCart'			=> 'Уже находится в вашей корзине.',
	'giftLimit'			=> 'Лимит по подаркам достигнут. Пожалуйста купите текущие подарки перед тем как добавите больше.',
	'noSelfGifting'			=> 'Вы не можете дарить подарки себе.',
	'outboxFull'			=> 'Ваша папка с исходящими письмами полная. Вы не сможете отсылать новые сообщения до тех пор пока вы не удалите несколько старых сообщений.',
	'invalidAmount'			=> 'Invalid amount.',
	'alreadyGiven'			=> 'Sorry, but you can\'t give for the same product twice. ):',
));

?>