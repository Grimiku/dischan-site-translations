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
	'passwordIncorrect'			=> 'Password incorrect.',
	'userEmailNotFound'			=> 'Username or Email not found.',
	'notLoggedIn'		=> 'You are not logged in.',
	'error'		=> 'Error!',
	'forumDoesNotExist'		=> 'You are trying to post to a forum that doesn\'t exist.',
	'subConPicRequired'		=> 'A new thread requires a subject, content and a picture.',
	'picConRequired'		=> 'A thread reply requires a picture and/or content.',
	'threadLocked'				=> 'Cannot post. Thread is locked.',
	'fileUpError'			=> 'There was a problem with the file upload. Please try again.',
	'thumbProblem'			=> 'There was a problem with the image thumbnailer. Maybe try a different image?',
	'passwordNoMatch'		=> 'Your new passwords didn\'t match.',
	'invalidEmail'			=> 'Invalid Email.',
	'postLimitReached'		=> 'Post limit reached. Please start another thread if you wish to continue discussing this topic.',
	'imageLimitReached'		=> 'Image limit reached, try posting without a picture.',
	'charLimitReached'		=> 'Your post exceeds the character limit. Please shorten it.',
	'newLLimitReached'		=> 'Post exceeds newline limit. Please remove some.',
	'postingTooFast'		=> 'You\'re posting too fast! You\'ll need to wait a little bit. Maybe go treat yourself to a hot chocolate while you wait?',
	'fileTooLarge'			=> 'Your file is too big! Try making it smaller, or complaining that our size limit is too small.',
	'silenced'		=> 'Silenced!',
	'silencedMsg'			=> 'You have been silenced. This means you can\'t make any posts! You might have been misbehaving, or accidentally banned. To appeal this decision, please contact a moderator.',
	'alreadyUnsubbed'	=> 'You aren\'t subscribed to this thread according to us, so we can\'t unsubscribe you!',
	'alreadySubbed'			=> 'We can\'t subscribe you to something you are already subscribed too! Maybe take it easy on that mouse button.',
	'ipBanned'			=> 'IP Banned!',
	'ipBannedMsg'			=> 'Your IP address is banned. It\'s probably not your fault, a spammer has likely caused us to ban it. Please contact us if you think it wasn\'t you.',
	'forumLocked'			=> 'This forum is locked.',
	'captchaFail'			=> 'Captcha failed, please try again.',
	'emptyForms'			=> 'Some forms left empty, please double check.',
	'invalidUsername'			=> 'Invalid username, please try again.',
	'passwordTooShort'			=> 'Passwords did not match, or too short.',
	'emailUsed'			=> 'Email already in use.',
	'usernameUsed'			=> 'Username already in use.',
	'passwordIncoTryAgain'	=> 'Password incorrect. Please try again.',
	'msgReqSubCon'			=> 'A new message requires a subject and content.',
	'msgTooManyChars'		=> 'Your message has too many characters! Please shorten it.',
	'msgTooManyNewL'		=> 'Your message has too many newlines, please remove some.',
	'flood'			=> 'You are performing actions too quickly. Please wait a bit and then retry.',
	'destinationReq'		=> 'Destination required.',
	'threadNoLonger'			=> 'Thread no longer exists.',
	'registrationLock'			=> 'Registration is currently locked. Sorry! We are probably working on something. Please check back later.',
	'userNotFound'			=> 'User not found.',
	'spamFilter'			=> 'Spam filter triggered!',
	'spamFilterMsg'			=> 'Your message resembled spam so we discarded it. If you are not a spammer, please rewrite your message and try again.',
	'sendMsgFail'			=> 'Sending message failed!',
	'sendMsgFailMsg'		=> 'Your message was not sent due to an unknown error. Sorry! Please try again later.',
	'formsEmpty'			=> 'Some required forms were left empty.',
	'contactFlood'			=> 'You have already submitted a contact form recently. Please try again later.',
	'applicationFlood'		=> 'You have already submitted an application recently. Please try again later.',
	'noAcctEmail'			=> 'There is no account associated with this email address.',
	'passRstFlood'			=> 'You have already submitted a password reset recently, please check your email.<br /><br />If you have not recieved any emails, please check your spam box, and <a href = "contact.php">contact us</a>.',
	'sorry'			=> 'Sorry!',
	'loginDisabl'			=> 'Login is temporarily disabled. Please check back later.',
	'msgSendFailSome'		=> 'Message sending failed for the following users (they may not exist, please check your spelling):',
	'ratAndReviewEmp'			=> 'Review and/or rating box empty.',
	'reviewTooManyChars'		=> 'Your review has too many characters! Please shorten it.',
	'reviewTooManyNewL'			=> 'Your review has too many newlines, please remove some.',
	'productMssng'			=> 'Sorry! That product was not found. It may have been temporarily or permanently removed.',
	'reviewedAlr'			=> 'You\'ve already reviewed this product. You may only review a product once. If you wish to change anything
			about a review, feel free to <a href = "http://dischan.org/contact.php">contact us</a> and let us know.',
	'serialDisabled'			=> 'This serial has been disabled due to suspected abuse. The matter will be looked into, however you may <a href = "http://dischan.org/contact.php">contact us</a> immediately if you feel this was a mistake.',
	'noDownloadPrm'			=> 'You do not have permission to download this. Sorry! If you believe you received this message in error, please
			<a href = "http://dischan.org/contact.php">contact us</a>.',
	'noDLSelect'			=> 'You must chose a format or operating system to download!',
	'invEmailSerialComb'		=> 'Invalid serial or email, please try again.',
	'downloadLimit'			=> 'Download Limit Reached!',
	'downloadLimitMsg1'			=> 'You\'ve reached your download limit for game demos. Please come back in a few hours and your limit will be reset. We apologize for the inconvenience.',
	'downloadLimitMsg2'			=> 'You\'ve reached your download limit for products. Please come back in a few hours and your limit will be reset. We apologize for the inconvenience.',
	'downloadLimitMsg3'			=> 'You\'ve reached your download limit for this product. If you still need to download it, please wait a few hours and your limit will be reset.',
	'reviewNotFound'			=> 'Review not found.',
	'mustPurchase'			=> 'You must purchase this product before you can review it.',
	'noPermission'			=> 'You do not have permission to perform this action. If you believe this is an error, please <a href = "http://dischan.org/contact.php">contact us</a>.',
	'formExpired'			=> 'This form has expired, or is invalid. Please try again.',
	'userNotFoundGift'		=> 'User not found.',
	'UserOwns'			=> 'User already owns this product.',
	'invalidEmailGift'		=> 'Invalid email.',
	'alreadyInCart'			=> 'Already in your cart.',
	'giftLimit'			=> 'Gift limit reached. Please purchase your current gifts before adding more.',
	'noSelfGifting'			=> 'You can\'t add a gift for yourself.',
	'outboxFull'			=> 'Your outbox is full. You will be unable to send any new messages until you delete some old messages.',
	'invalidAmount'			=> 'Invalid amount.',
	'alreadyGiven'			=> 'Sorry, but you can\'t give for the same product twice. ):',
));

?>